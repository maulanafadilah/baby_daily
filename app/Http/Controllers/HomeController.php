<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Global
        $page_title = 'Beranda';
        $page_description = "Beranda Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'auth';
        $search = false;
        $extraHeader = false;
        $footer = true;
        $bottom = true;
        $sidebar = true;

        return view('parent/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function keranjang()
    {
        // Global
        $page_title = 'Keranjang';
        $page_description = "Keranjang Belanja";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        return view('parent/shop/cart', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function kms()
    {
        // Global
        $page_title = 'KMS Digital';
        $page_description = "Beranda KMS Digital";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;

        return view('parent/kms/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function kms_show()
    {
        // Global
        $page_title = 'Detail KMS';
        $page_description = "Detail Informasi KMS Anak";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        return view('parent/kms/show', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function wishlist()
    {

        // Global
        $page_title = 'Wishlist';
        $page_description = "List Produk Favorit";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;



        return view(
            'parent/shop/wishlist',
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
            )
        );
    }

    public function discovery()
    {

        // Global
        $page_title = 'Discovery';
        $page_description = "Discovery Promotion List";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        

        return view('parent/shop/discovery', 
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
                        ));
    }

    public function category()
    {

        // Global
        $page_title = 'Category';
        $page_description = "Category Promotion List";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        

        return view('parent/shop/category', 
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
                        ));
    }

    public function promotion()
    {

        // Global
        $page_title = 'Promotion';
        $page_description = "Promotion List";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        

        return view('parent/shop/promotion', 
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
                        ));
    }

    public function information()
    {

        // Global
        $page_title = 'Information';
        $page_description = "Information Post";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = true;

        

        return view('parent/article/information', 
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
                        ));
    }

    public function brand()
    {

        // Global
        $page_title = 'Brand';
        $page_description = "Brand list";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = true;
        $extraHeader = true;
        $footer = false;
        $bottom = false;
        $sidebar = true;

        

        return view('parent/shop/brand', 
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
                        ));
    }

    public function mitra()
    {

        // Global
        $page_title = 'Mitra';
        $page_description = "Mitra list";
		$action = __FUNCTION__;

        // Component
        $header = 'auth';
        $search = true;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        

        return view('parent/shop/mitra', 
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
        $extraHeader = true;
        $footer = false;
        $bottom = false;
        $sidebar = true;

        

        return view('parent/shop/umkm', 
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
                        ));
    }

    public function store()
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
        $sidebar = true;

        

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
                        ));
    }
}
