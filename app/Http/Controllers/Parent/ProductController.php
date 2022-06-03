<?php

namespace App\Http\Controllers\Parent;

use App\Models\User;
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
        // $tag_json = json_encode($seller_tag);
        // return $product_detail;

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
