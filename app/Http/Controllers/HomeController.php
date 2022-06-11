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
        $header = 'default';
        $search = false;
        $extraHeader = false;
        $footer = true;
        // if (auth()->user()->id_peranan == 5) {
        // }
        $bottom = true;
        $sidebar = false;

        return view('welcome', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
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

    public function user()
    {

        // Global
        $page_title = 'Beranda';
        $page_description = "Beranda Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'auth';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = true;
        $bottom = true;
        $sidebar = true;

        return view('parent/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles'));
    }
}
