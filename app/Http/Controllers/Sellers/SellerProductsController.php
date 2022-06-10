<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SellerProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Sellers::join('users', 'sellers.nomor_telepon', '=', 'users.nomor_telepon')
            ->where('sellers.nomor_telepon', auth()->user()->nomor_telepon)
            ->first();

        $products = Products::join('sellers', 'sellers.id', '=', 'products.id_penjual')
            ->where('sellers.nomor_telepon', auth()->user()->nomor_telepon)
            ->select('products.id', 'products.cover', 'products.nama_produk', 'products.harga')
            ->get();
        $page_title = 'Tambah Produk';
        $page_description = "Tambah Produk Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'auth';
        $roles = auth()->user()->id_peranan;
        $search = 'seller_product';
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;
        $header_title = 'Produk';

        return view('sellers/produk/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'sellers', 'products', 'header_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        $page_title = 'Tambah Produk';
        $page_description = "Tambah Produk Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_product';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        $header_title = 'Tambah Produk';

        return view('sellers/produk/create', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title', 'categories'));
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
            'gambar' => 'required',
            'gambar.*' => 'mimes:png,jpg,jpeg|max:10240',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'brand' => 'required',
            'id_kategori' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        $id_penjual = Sellers::where('id_pengguna', auth()->user()->id)->get('id')[0];

        $produk = new Products();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->brand = $request->brand;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_kategori = $request->id_kategori;
        $produk->id_penjual = $id_penjual->id;
        $produk->save();
        $id = DB::getPdo()->lastInsertId();

        $no = 0;
        foreach ($request->file('gambar') as $key => $image) {
            if ($no == 0) {
                $photo = $image->store('products');
                Products::where('id', $id)
                    ->update(['cover' => $photo]);

                ProductImages::create([
                    'gambar' => $photo,
                    'id_produk' => $id
                ]);
                $no++;
            } else {
                $photo = $image->store('products');
                ProductImages::create([
                    'gambar' => $photo,
                    'id_produk' => $id
                ]);
            }
        }

        if ($request->link_buka) {
            Products::where('id', $produk->id)
                ->update(['link_buka' => $request->link_buka]);
        }

        if ($request->link_tokped) {
            Products::where('id', $produk->id)
                ->update(['link_tokped' => $request->link_tokped]);
        }

        if ($request->link_shopee) {
            Products::where('id', $produk->id)
                ->update(['link_shopee' => $request->link_shopee]);
        }


        return redirect()->route('sellerproducts.index')->with('success', 'Berhasil menambahkan produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::where('id', $id)->first();
        $produk = Products::join('productimages', 'productimages.id_produk', '=', 'products.id')
            ->where('products.id', '!=', $id)->get();
        $images = Products::join('productimages', 'productimages.id_produk', '=', 'products.id')
            ->where('products.id', $id)->get('gambar');
        $page_title = 'Tambah Produk';
        $page_description = "Tambah Produk Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_product';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        $header_title = 'Detail Produk';

        return view('sellers/produk/detail', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'products', 'header_title', 'produk', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::join('productimages', 'productimages.id_produk', '=', 'products.id')
            ->where('products.id', $id)->first();
        $categories = DB::table('categories')->get();
        $page_title = 'Edit Produk';
        $page_description = "Edit Produk Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_product';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        $header_title = 'Edit Produk';

        return view('sellers/produk/edit', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title', 'categories', 'products'));
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
            'gambar.*' => 'mimes:png,jpg,jpeg',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'brand' => 'required',
            'id_kategori' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        Products::where('id', $id)
            ->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'brand' => $request->brand,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'id_kategori' => $request->id_kategori
            ]);

        if ($request->hasFile('gambar')) {

            $images = ProductImages::where('id_produk', $id)
                ->select('id', 'gambar')
                ->get();

            foreach ($request->file('gambar') as $key => $image) {
                $photo = $image->store('products');
                ProductImages::where('id', $images->id)
                    ->update([
                        'gambar' => $photo,
                        'id_produk' => $id
                    ]);
            }

            $image = $request->file('gambar');
            $file_name = rand(1000, 9999999) . $image->getClientOriginalName();



            File::delete(public_path('products/images/' . $images->gambar));
            $image->move('products/images', $file_name);

            ProductImages::where('id', $images->id)
                ->update(['gambar' => $file_name]);
        }


        if ($request->link_buka) {
            Products::where('id', $id)
                ->update(['link_buka' => $request->link_buka]);
        }

        if ($request->link_tokped) {
            Products::where('id', $id)
                ->update(['link_tokped' => $request->link_tokped]);
        }

        if ($request->link_shopee) {
            Products::where('id', $id)
                ->update(['link_shopee' => $request->link_shopee]);
        }


        return redirect()->route('sellerproducts.index')->with('success', 'Berhasil mengupdate produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = ProductImages::where('id_produk', $id)
            ->select('id', 'gambar')
            ->get();

        foreach ($images as $key => $image) {
            Storage::delete($image->gambar);
            ProductImages::destroy($image->id);
        }

        Products::destroy($id);
        return redirect()->route('sellerproducts.index')->with('success', 'Berhasil menghapus produk');
    }
}
