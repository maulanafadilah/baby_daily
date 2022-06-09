<?php

namespace App\Http\Controllers\Parent;

use App\Models\User;
use App\Models\Eltern;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // Global
       $page_title = 'Akun';
       $page_description = "Akun Saya";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;

       

       return view('parent/account/index', 
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // Global
       $page_title = 'Informasi Akun';
       $page_description = "Informasi Akun Saya";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = true;

    //    SQL
       $nomor_telepon = auth()->user()->nomor_telepon;
       $f_pic = Eltern::select('foto_orangtua')->where('nomor_telepon', $nomor_telepon)->get();
       if($f_pic == '[]'){
           $profile_pic = false;
       } else{
           $profile_pic = Eltern::select('foto_orangtua')->where('nomor_telepon', $nomor_telepon)->get()[0];
       }

       return view('parent/account/show', 
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
                           'profile_pic'
                       ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Global
       $page_title = 'Edit Akun';
       $page_description = "Edit Informasi Akun Saya";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;

        // SQL
        $user = auth()->user()->id;

        switch ($id) {
            case ($id == 1):
                $biodata = User::where('id', $user)->get('nama_lengkap')[0];
                // return $biodata;
                return view('parent/account/edit', 
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
                       ), ['biodata'=>$biodata]);
                break;
            case ($id == 2):
                $biodata = User::where('id', $user)->get('nomor_telepon')[0];
                // return $biodata;
                return view('parent/account/edit', 
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
                       ), ['biodata'=>$biodata]);
                break;
            case ($id == 3):
                $biodata = User::where('id', $user)->get('email')[0];
                // return $biodata;
                return view('parent/account/edit', 
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
                       ), ['biodata'=>$biodata]);
                break;
            case ($id == 4):
                return view('parent/account/reset', 
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
                    break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        switch($request){
            case ($request->nama_lengkap == true):
                $validatedData = $request->validate([
                'nama_lengkap' => 'required',
                ]);
                User::where('id', $id)
                    ->update($validatedData);
                return redirect('/account/{{auth()->user()->id}}')->with('success', 'Nama Lengkap Berhasil Diubah!');
                break;
            case ($request->nomor_telepon == true):
                $validatedData = $request->validate([
                'nomor_telepon' => 'required|unique:users',
                ]);
                User::where('id', $id)
                    ->update($validatedData);
                return redirect('/account/{{auth()->user()->id}}')->with('success', 'Nomor Telepon Berhasil Diubah!');
                break;
            case ($request->email == true):
                $validatedData = $request->validate([
                'email' => 'required|unique:users',
                ]);
                User::where('id', $id)
                    ->update($validatedData);
                return redirect('/account/{{auth()->user()->id}}')->with('success', 'Email Berhasil Diubah!');
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
