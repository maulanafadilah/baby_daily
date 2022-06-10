<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use PasswordValidationRules;

    public function index()
    {
        // Global
        $page_title = 'Login';
        $page_description = "Halaman Login";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        return view('mbb/login', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function register()
    {
        // Global
        $page_title = 'Register';
        $page_description = "Halaman Register";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        return view('mbb/register', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function reset()
    {
        // Global
        $page_title = 'Reset Password';
        $page_description = "Halaman Reset Password";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        return view('mbb/reset', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function reset_password(Request $request)
    {
        $this->validate($request, [
            'nomor_telepon'     => 'required',
            'password'      => $this->passwordRules(),
            'pertanyaan'     => 'required|numeric',
            'jawaban'     => 'required|string',
        ]);

        // cek akun
        $users = User::where('nomor_telepon', $request->nomor_telepon)
            ->where('pertanyaan', $request->pertanyaan)->first();

        if ($users && Hash::check($request->jawaban, $users->jawaban)) {
            $password = Hash::make($request->password);
            User::where('nomor_telepon', $request->nomor_telepon)
                ->update(['password' => $password]);

            return redirect()->route('login')->with('success', 'Berhasil Mengganti Password');
        } else {
            return back()->with('failed', 'Akun tidak ditemukan');
        }
    }

    public function edit_profile()
    {
        // Global
        $page_title = 'Edit Profile';
        $page_description = "Halaman Edit Profile";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        return view('parent.profile.edit', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function update_profile(Request $request)
    {
        $this->validate($request, [
            'nomor_telepon'     => 'required',
            'nama_lengkap' => 'required|string'
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'nomor_telepon' => $request->nomor_telepon
            ]);

        return redirect()->route('home')->with('success', 'Berhasil Mengupdate Profile');
    }

    public function update_pertanyaan(Request $request)
    {
        $this->validate($request, [
            'pertanyaan'     => 'required|numeric',
            'jawaban'      => 'required'
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => Hash::make($request->jawaban)
            ]);

        return redirect()->route('home')->with('success', 'Berhasil Mengupdate Pertanyaan');
    }

    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => $this->passwordRules()
        ]);

        $password = Hash::make($request->password);
        User::where('id', auth()->user()->id)
            ->update(['password' => $password]);

        return redirect()->route('home')->with('success', 'Berhasil Mengupdate Password');
    }

    public function question()
    {
        // Global
        $page_title = 'Pertanyaan';
        $page_description = "Halaman Pertanyaan";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        return view('mbb/pertanyaan', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pertanyaan'     => 'required|numeric',
            'jawaban'      => 'required'
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => Hash::make($request->jawaban)
            ]);

        return redirect()->route('home');
    }
}
