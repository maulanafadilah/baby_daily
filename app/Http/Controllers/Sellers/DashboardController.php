<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Sellers;

class DashboardController extends Controller
{
    public function index()
    {

        $sellers = Sellers::join('users', 'sellers.nomor_telepon', '=', 'users.nomor_telepon')
            ->where('sellers.nomor_telepon', auth()->user()->nomor_telepon)
            ->first();

        $products = Products::join('sellers', 'sellers.id', '=', 'products.id_penjual')
            ->join('productimages', 'productimages.id_produk', '=', 'products.id')
            ->where('sellers.nomor_telepon', auth()->user()->nomor_telepon)
            ->select('products.id', 'products.nama_produk', 'productimages.gambar', 'products.stok')
            ->latest('products.created_at')->paginate(5);

        $stok = Products::join('sellers', 'sellers.id', '=', 'products.id_penjual')
            ->where('nomor_telepon', auth()->user()->nomor_telepon)->sum('stok');
        $page_title = 'Dashboard';
        $page_description = "Dashboard Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'auth';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;

        return view('sellers/dashboard/dashboard', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'sellers', 'products', 'stok'));
    }

    public function faq()
    {
        $page_title = 'FAQ';
        $page_description = "FAQ Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;
        $header_title = 'FAQ';

        return view('sellers/dashboard/faq', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title'));
    }

    public function bantuan()
    {
        $page_title = 'Pusat Bantuan';
        $page_description = "Pusat Bantuan Sellers Baby Daily";
        $action = __FUNCTION__;

        // Component
        $header = 'seller_profile';
        $roles = auth()->user()->id_peranan;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = true;
        $sidebar = true;
        $header_title = 'Pusat Bantuan';

        return view('sellers/dashboard/pusatbantuan', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'roles', 'header_title'));
    }
}
