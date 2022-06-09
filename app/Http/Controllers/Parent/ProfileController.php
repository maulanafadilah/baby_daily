<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\Eltern;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Global
       $page_title = 'Data Diri';
       $page_description = "Informasi Data Diri Saya";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = true;

       $nomor_telepon = auth()->user()->nomor_telepon;

       $biodata = Eltern::where('nomor_telepon', $nomor_telepon)->get();
       $f_pic = Eltern::select('foto_orangtua')->where('nomor_telepon', $nomor_telepon)->get();
                if($f_pic == '[]'){
                    $profile_pic = false;
                } else{
                    $profile_pic = Eltern::select('foto_orangtua')->where('nomor_telepon', $nomor_telepon)->get()[0];
                }
    //    return $biodata;

        if($biodata == '[]'){
            return view('parent/profile/index', 
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
        else{            
            // return $biodata;
            $biodata = Eltern::where('nomor_telepon', $nomor_telepon)->get()[0];
            return view('parent/profile/show', 
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
                           'profile_pic',
                       ), ['biodata'=>$biodata]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Global
       $page_title = 'Edit Data Diri';
       $page_description = "Edit Informasi Data Diri Saya";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;

       return view('parent/profile/create', 
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'no_kk' => 'required',
            'nik' => 'required|unique:elterns',
        ]);

        Eltern::create($validatedData + ['nomor_telepon' => auth()->user()->nomor_telepon, 'nama_lengkap'=> auth()->user()->nama_lengkap, 'id_pengguna'=>auth()->user()->id]);

        return redirect('/profile')->with('success', 'Berhasil Mengubah Data Diri!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // Global
       $page_title = 'Edit Data Diri';
       $page_description = "Edit Informasi Data Diri Saya";
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

        if($id == 1){
            $biodata = Eltern::where('id_pengguna', $user)->get('nama_lengkap')[0];
            return view('parent/profile/edit', 
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
        }
        elseif($id == 2){
            $biodata = Eltern::where('id_pengguna', $user)->get('nik')[0];
            return view('parent/profile/edit', 
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
        }
        elseif($id == 3){
            $biodata = Eltern::where('id_pengguna', $user)->get('no_kk')[0];
            return view('parent/profile/edit', 
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
        }
        elseif($id == 4){
            $biodata = Eltern::where('id_pengguna', $user)->get('tanggal_lahir')[0];
            return view('parent/profile/edit-birth', 
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
        }
        elseif($id == 5){
            $biodata = Eltern::select('jenis_kelamin')->where('id_pengguna', $user)->get()[0];
            return view('parent/profile/edit', 
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
        }
        elseif($id == 6){
            $biodata = Eltern::select('foto_orangtua')->where('id_pengguna', $user)->get()[0];
            return view('parent/profile/edit-picture', 
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
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parent  $parent
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
                return redirect('/profile')->with('success', 'Data Diri Berhasil diupdate!');
                break;
            case ($request->nik == true):
                $validatedData = $request->validate([
                    'nik' => 'required|unique:elterns',
                ]);
                Eltern::where('id_pengguna', $id)
                    ->update($validatedData);
                return redirect('/profile')->with('success', 'Data Diri Berhasil Diupdate!');
                break;
            case ($request->no_kk == true):
                $validatedData = $request->validate([
                    'no_kk' => 'required',
                ]);
                Eltern::where('id_pengguna', $id)
                    ->update($validatedData);
                return redirect('/profile')->with('success', 'Data Diri Berhasil Diupdate!');
                break;
            case ($request->tanggal_lahir == true):
                $validatedData = $request->validate([
                    'tanggal_lahir' => 'required',
                ]);
                Eltern::where('id_pengguna', $id)
                    ->update($validatedData);
                return redirect('/profile')->with('success', 'Data Diri Berhasil Diupdate!');
                break;
            case ($request->jenis_kelamin == true):
                $validatedData = $request->validate([
                    'jenis_kelamin' => 'required',
                ]);
                Eltern::where('id_pengguna', $id)
                    ->update($validatedData);
                return redirect('/profile')->with('success', 'Data Diri Berhasil Diupdate!');
                break;
            case ($request->foto_orangtua == true):
                    // return $request;
                    $validatedData = $request->validate([
                        'foto_orangtua' => 'required|image|file|max:10240',
                    ]);

                    if($request->oldImage){
                        Storage::delete($request->oldImage);
                        $validatedData['foto_orangtua'] = $request->file('foto_orangtua')->store('profile');
                    }else{
                        $validatedData['foto_orangtua'] = $request->file('foto_orangtua')->store('profile');
                    }

                    Eltern::where('id_pengguna', $id)
                        ->update($validatedData);
                    return redirect('/profile')->with('success', 'Data Diri Berhasil Diupdate!');
                    break;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parent  $parent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
