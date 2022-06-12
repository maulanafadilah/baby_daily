<?php

namespace App\Http\Controllers\Parent;

use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Productimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Global
        $page_title = 'Beranda';
        $page_description = "Beranda Baby Daily";
        $action = __FUNCTION__;

        // Component
        if(Auth::check()){
            $header = false;
            $sidebar = false;
        } else{
            $header = false;
            $sidebar = false;
        }
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;

        // SQL
        if(request('search')){
            $result = Product::select('products.nama_produk', 'products.id', 'productimages.gambar', 'sellers.tag', 'products.harga')->join('productimages', 'products.id', '=', 'productimages.id')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->where('nama_produk', 'like', '%'. request('search') . '%')->where('sellers.tag', '2')->get();
            $count = Product::select('products.nama_produk', 'products.id', 'productimages.gambar', 'sellers.tag', 'products.harga')->join('productimages', 'products.id', '=', 'productimages.id')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->where('nama_produk', 'like', '%'. request('search') . '%')->where('sellers.tag', '2')->count();
        } else{
            return back();
        }
        
        return view('parent/shop/search', 
               compact('page_title', 
                        'page_description', 
                        'action', 
                        'header', 
                        'search', 
                        'extraHeader', 
                        'footer', 
                        'bottom', 
                        'sidebar',
                    'result',
                'count'));
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Global
        $page_title = 'Product';
        $page_description = "Product Page";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        // SQL
        $product_detail = Product::select('*')->where('products.id', $id)->join('sellers', 'products.id_penjual', '=', 'sellers.id')->get();
        $product_related = Product::select('*')->join('productimages', 'products.id', '=', 'productimages.id')->limit(5)->get();
        $productimage = Productimage::select('*')->where('id_produk', $id)->get();

        $seller_tag = Product::select('sellers.tag')->where('products.id', $id)->join('sellers', 'products.id_penjual', '=', 'sellers.id')->first();

        if(Auth::check()){
            $wishlist = Wishlist::select('id')->where('id_produk', $id)->where('id_pengguna', auth()->user()->id)->first();
        } else{
            $wishlist = false;
        }

        return view('parent/shop/product', 
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
                            'product_detail',
                            'product_related',
                            'productimage',
                            'seller_tag',
                            'wishlist'
                        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
