<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
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
        
        // Global
        $page_title = 'Store';
        $page_description = "Store Page";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        // SQL
        $seller_detail = Seller::select('sellers.nama_toko', 'regencies.name as kabupaten', 'sellers.jam_buka', 'sellers.jam_tutup', 'sellers.link_tokped', 'sellers.link_buka', 'sellers.link_shopee', 'sellers.foto_penjual')->where('sellers.id', $id)->join('regencies', 'sellers.regency_id', '=', 'regencies.id')->get();
        $product_list = Product::select('*')->where('id_penjual', $id)->join('productimages', 'products.id', '=', 'productimages.id')->paginate(6);
        
        $nomor_telepon = Seller::select('nomor_telepon')->where('id', $id)->first();
        $wa = explode('0', $nomor_telepon->nomor_telepon, 2)[1];
        // return $wa;

        return view('parent/shop/store', 
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
                            'seller_detail',
                            'product_list',
                            'wa'
                        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
