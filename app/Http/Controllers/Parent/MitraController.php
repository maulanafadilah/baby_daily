<?php

namespace App\Http\Controllers\Parent;
use App\Models\User;

use App\Models\Seller;
use App\Models\Product;
use App\Models\Categorie;
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
        $footer = true;
        $bottom = false;
        $sidebar = false;

        // SQL
        $seller = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->where('tag', 2)->limit(5)->get();
        // $seller_new = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->orderBy('id', 'DESC')->limit(2)->get();
        $category = Categorie::select('nama_kategori', 'slug', 'icon')->orderBy('id', 'ASC')->limit(3)->get();
        $category_all = Categorie::select('nama_kategori', 'slug', 'icon')->orderBy('id', 'ASC')->get();
        $products_all = Product::select('products.nama_produk', 'products.id', 'productimages.gambar', 'sellers.tag', 'products.harga')->join('productimages', 'products.id', '=', 'productimages.id')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->where('sellers.tag', '2')->paginate(8);
        

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
                            'products_pop',
                            'category',
                            'category_all',
                            'products_all'
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
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        $seller = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->get();
        $seller_count = Seller::select('id')->get();
        // $seller2 = json_decode($seller, true);
        // return $seller_count;

        return view('parent/shop/mitra/list', 
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