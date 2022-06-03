<?php

namespace App\Http\Controllers\Parent;
use App\Models\User;

use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MitraController extends Controller
{
    public function index()
    {

        // Global
        $page_title = 'Mitra';
        $page_description = "Mitra list";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        // SQL
        $seller = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->limit(2)->get();
        $seller_new = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->orderBy('id', 'DESC')->limit(2)->get();

        $products_pop = Product::select('*')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->join('productimages', 'products.id', '=', 'productimages.id')->where('sellers.tag', '2')->limit(5)->get();
        // return $products_pop;

        return view('parent/shop/mitra/index', 
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
                            'seller',
                            'seller_new',
                            'products_pop'
                        ));
    }

    public function mitra_umkm()
    {

        // Global
        $page_title = 'Mitra UMKM';
        $page_description = "List UMKM";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        $seller = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->get();
        $seller_count = Seller::select('id')->get();
        // $seller2 = json_decode($seller, true);
        // return $seller_count;

        return view('parent/shop/mitra/umkm', 
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
                            'seller',
                            'seller_count'
                        ));
    }

}