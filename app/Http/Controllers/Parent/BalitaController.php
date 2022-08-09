<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\Babie;
use App\Models\Eltern;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Global
       $page_title = 'Tambah Data Anak';
       $page_description = "Tambah Informasi Data Anak";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;

       return view('parent/baby/create', 
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
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi_lahir' => 'required',
            'berat_lahir' => 'required',
        ]);

        $id_pengguna = auth()->user()->id;
        $nik_ortu = Eltern::select('nik')->where('id_pengguna', $id_pengguna)->get()[0];
        $nik = $nik_ortu->nik . rand(10,100);
        $no_kk_ortu = Eltern::select('no_kk')->where('id_pengguna', $id_pengguna)->get()[0];

        // return $no_kk_ortu;
        Babie::create($validatedData + ['no_kk'=>$no_kk_ortu->no_kk, 'nik'=>$nik, 'id_posyandu'=>'5']);

        return redirect('/kms')->with('success', 'Berhasil Menambah Balita!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Babie  $babie
     * @return \Illuminate\Http\Response
     */
    public function show(Babie $babie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Babie  $babie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // Global
       $page_title = 'Edit Data Anak';
       $page_description = "Edit Informasi Data Anak";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;

       $biodata = Babie::select('id', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'tinggi_lahir', 'berat_lahir')->where('id', $id)->get()[0];

    //    return $biodata;

       return view('parent/baby/edit', 
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
                           'biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Babie  $babie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $id;
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi_lahir' => 'required',
            'berat_lahir' => 'required',
        ]);

        Babie::where('id', $id)->update($validatedData);
        return redirect('/kms/'.$id)->with('success', 'Berhasil Mengubah Data Balita!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Babie  $babie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Babie::destroy($id);
        return redirect('kms')->with('success', 'Berhasil Menghapus Balita!');
    }
}
