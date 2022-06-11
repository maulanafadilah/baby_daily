<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Products::join('productimages', 'productimages.id_produk', '=', 'products.id')
            ->where('products.id', $id)->select('cover', 'productimages.id')->get()[0];
        $product_images = ProductImages::where('id_produk', $id)->get();
        $page_title = 'Photo Produk';
        $page_description = "Photo Produk Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = false;
        $header_title = 'Photo Produk';

        return view('sellers/produk/images/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'product_images', 'header_title', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Photo Produk';
        $page_description = "Edit Photo Produk Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = 'seller_product';
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        $header_title = 'Edit Photo Produk';

        return view('sellers/produk/images/edit', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title', 'id'));
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
            'gambar' => 'required',
            'gambar.*' => 'mimes:png,jpg,jpeg|max:10240'
        ]);

        $images = ProductImages::where('id', $id)
            ->select('gambar')
            ->get()[0];

        Storage::delete($images->gambar);

        $photo = $request->file('gambar')->store('products');

        $image = Products::where('cover', $images->gambar)->first();

        ProductImages::where('id', $id)
            ->update(['gambar' => $photo]);

        if ($image) {
            Products::where('id', $image->id)
                ->update(['cover' => $photo]);
        }

        return redirect()->route('sellerproducts.index')->with('success', 'Berhasil mengganti photo produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
