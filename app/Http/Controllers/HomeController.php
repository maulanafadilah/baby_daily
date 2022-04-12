<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Global
        $page_title = 'Beranda';
        $page_description = "Beranda KMS Digital";
		$action = __FUNCTION__;

        // Component
        $header = 'index';
        $search = false;
        $extraHeader = false;
        $footer = true;
        $bottom = 'default';
        $sidebar = false;

        return view('index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
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
        $bottom = 'cart';
        $sidebar = false;

        // Icon & Link
        $icon1 = '';
        $icon2 = 'trash-outline';
        $link1 = '';
        $link2 = '';

        return view('shop/cart', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'icon1', 'icon2', 'link1', 'link2'));
    }
}
