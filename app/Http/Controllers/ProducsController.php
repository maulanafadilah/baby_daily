<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducsController extends Controller
{
    public function index()
    {
        // Global
        $page_title = 'Producs';
        $page_description = "Halaman Producs";
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

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk'     => 'required|unique:posts|max:255',
            'harga'      => 'required|numeric',
            'brand'     => 'required',
            'stok'     => 'required|numeric',
            'deskripsi'     => 'required',
            'id_kategori'        => 'required|numeric'
        ]);

        $categories = DB::table('categories')->where('id_kategori', $request->id_kategori)->count();

        if ($categories == 1) {
            Products::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'brand' => $request->brand,
                'stok' => $request->stock,
                'deskripsi' => $request->deskripsi,
                'id_kategori' => $request->id_kategori,
                'id_penjual' => auth()->user()->id
            ]);
        } else {
            return back()->with('failed', 'Kategori tidak ditemukan');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_produk'     => 'required|unique:posts|max:255',
            'harga'      => 'required|numeric',
            'brand'     => 'required',
            'stok'     => 'required|numeric',
            'deskripsi'     => 'required',
            'id_kategori'        => 'required|numeric'
        ]);

        $categories = DB::table('categories')->where('id_kategori', $request->id_kategori)->count();

        if ($categories == 1) {
            Products::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'brand' => $request->brand,
                'stok' => $request->stock,
                'deskripsi' => $request->deskripsi,
                'id_kategori' => $request->id_kategori,
                'id_penjual' => auth()->user()->id
            ]);
        } else {
            return back()->with('failed', 'Kategori tidak ditemukan');
        }
    }
}
