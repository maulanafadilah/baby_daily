<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\NoteBooks;
use Illuminate\Http\Request;

class NoteBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebooks = NoteBooks::where('id_pengguna', auth()->user()->id)->get();
        $page_title = 'Catatan Toko';
        $page_description = "Catatan Toko Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;
        $header_title = 'Catatan Toko';

        return view('sellers/profile/notebooks/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title', 'notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Buat Catatan Toko';
        $page_description = "Buat Catatan Toko Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        $header_title = 'Buat Catatan Toko';

        return view('sellers/profile/notebooks/create', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        NoteBooks::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'id_pengguna' => auth()->user()->id
        ]);

        return redirect()->route('notebooks.index')->with('success', 'Berhasil membuat catatan toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notebooks = NoteBooks::where('id', $id)->get()[0];
        $page_title = 'Catatan Toko';
        $page_description = "Catatan Toko Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = true;
        $header_title = 'Catatan Toko ';

        return view('sellers/profile/notebooks/show', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title', 'notebooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notebooks = NoteBooks::where('id', $id)->get()[0];
        $page_title = 'Edit Catatan Toko';
        $page_description = "Edit Catatan Toko Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;
        $header_title = 'Edit Catatan Toko';

        return view('sellers/profile/notebooks/edit', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title', 'notebooks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        NoteBooks::where('id', $id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect()->route('notebooks.index')->with('success', 'Berhasil mengupdate catatan toko');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NoteBooks::destroy($id);
        return redirect()->route('notebooks.index')->with('success', 'Berhasil menghapus catatan toko');
    }
}
