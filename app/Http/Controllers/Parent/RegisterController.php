<?php

namespace App\Http\Controllers\Parent;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        // Global
        $page_title = 'Register';
        $page_description = "Daftar Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        return view('parent/register/index', 
                    compact(
                            'page_title',
                            'page_description', 
                            'action', 
                            'header', 
                            'search', 
                            'extraHeader', 
                            'footer', 
                            'bottom', 
                            'sidebar',
                            
                        ));
    }

    public function store(Request $request)
    {
        // return $request;
       $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nomor_telepon' => ['required', 'min:10', 'unique:users'],
            'password' => 'required',
            'id_peranan' => 'required',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);

    //    $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Masuk ke Akun Anda!');

       return redirect('/login');
    }
}