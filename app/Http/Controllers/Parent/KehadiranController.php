<?php

namespace App\Http\Controllers\Parent;

use App\Models\Babie;
use App\Models\Presence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KehadiranController extends Controller
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
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Global
       $page_title = 'Edit Perkembangan Anak';
       $page_description = "Edit Perkembangan Bulanan Anak";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;

       $id_kehadiran = $id;
       $kehadiran = Presence::select('tanggal', 'tinggi', 'berat')->where('id', $id)->get()[0];

    //    return $kehadiran;
        
       return view('parent/kms/edit', 
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
                           'id_kehadiran',
                           'kehadiran'
                       ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
        ]);

        $id_balita = Presence::select('nik')->where('id', $id)->get()[0];
        $biodata = Babie::select('id')->where('nik', $id_balita->nik)->first();
        // return $biodata;
        Presence::where('id',$id)->update($validatedData);
        return redirect('/kms/'.$biodata->id)->with('success', 'Berhasil Mengubah Perkembangan Balita!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_balita = Presence::select('nik')->where('id', $id)->get()[0];
        $biodata = Babie::select('id')->where('nik', $id_balita->nik)->first();
        Presence::destroy($id);
        return redirect('/kms/'.$biodata->id)->with('success', 'Berhasil Menghapus Perkembangan!');
    }
}
