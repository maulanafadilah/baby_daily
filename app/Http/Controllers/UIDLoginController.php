<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class UIDLoginController extends Controller
{
    public function redirect(Request $request)
    {
        $request->session()->put("state", $state=Str::random(40));
        $query = http_build_query([
            "client_id" => "217",
            "redirect_uri" => "http://127.0.0.1:8000/login/callback",
            "response_type" => "code",
            "scope" => "",
            "state" => $state
        ]);
        return redirect("https://u.id/oauth/authorize?" . $query);
    }

    public function callback(Request $request)
    {
        $state = $request->session()->pull("state");
    
        throw_unless(strlen($state) > 0 && $state == $request->state,
            InvalidArgumentException::class);

        $response = Http::asForm()->post("https://api-v2.u.id/api/oauth/token", [
            "grant_type" => "authorization_code",
            "client_id" => "217",
            "client_secret" => "5etVjYNz4ZpgAzrtYcKjYkIee4tmrwNqliUqOIkW",
            "redirect_uri" => "http://127.0.0.1:8000/login/callback",
            "code" => $request->code
        ]);

        $json_response = json_decode($response);
        $token = $json_response->{'access_token'};

        $response2 = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('https://api-v2.u.id/api/v2/user_info');

        // return $response;
        $json_response2 = json_decode($response2);
        $data = $json_response2->{'data'}->{'verification_statuses'};

        $user = User::firstOrCreate([
            'email' => $json_response2->{'data'}->{'email'}
        ], [
            'nama_lengkap' => $json_response2->{'data'}->{'fullname'},
            'password' => Hash::make('password'),
            'nomor_telepon' => $json_response2->{'data'}->{'user_id'},
            'id_peranan' => 4,
        ]);

        // $user = new User;
        // $user->nama_lengkap = $json_response2->{'data'}->{'fullname'};
        // $user->email = $json_response2->{'data'}->{'verification_statuses'}->{'email'};
        // $user->nomor_telepon = $json_response2->{'data'}->{'user_id'};
        // $user->password = Hash::make('password');
        // $user->id_peranan = 4;
        // $user->save();

        Auth::login($user, true);
        return redirect()->intended('/');

        // $credentials = [
        //     'nomor_telepon' => $json_response2->{'data'}->{'user_id'},
        //     'password' => 'password'
        // ];
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/');
        // }

        // return back()->with('loginError', 'Login Gagal');
    }

    public function getData(Request $request)
    {
        $token = $request->token;

        $response2 = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('https://api-v2.u.id/api/v2/user_info');

        // return $response;
        $json_response2 = json_decode($response2);
        $data = $json_response2->{'data'}->{'verification_statuses'};
        return $data;
    }

    public function redirectToUID()
    {
        return Socialite::driver('uid')->redirect();
    }

    public function handleUIDCallback()
    {
        // try {
            $user = Socialite::driver('uid')->user();
            dd($user);
        // } catch (\Throwable $th) {
            //throw $th;
        // }
    }
}
