<?php

namespace App\Http\Controllers;

use App\Models\Eltern;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Global
        $page_title = 'Beranda';
        $page_description = "Beranda Baby Daily";
        $action = __FUNCTION__;

        // Component
        if(Auth::check()){
            if(!auth()->user()->pertanyaan){
                return redirect()->route('question');
            }else{
                $header = 'auth';
                $sidebar = true;
                $nomor_telepon = auth()->user()->nomor_telepon;
                $f_pic = Eltern::select('foto_orangtua')->where('nomor_telepon', $nomor_telepon)->get();
                if($f_pic == '[]'){
                    $profile_pic = false;
                } else{
                    $profile_pic = Eltern::select('foto_orangtua')->where('nomor_telepon', $nomor_telepon)->get()[0];
                }
            }
        } else{
            $header = 'default';
            $sidebar = false;
            $profile_pic = false;
        }
        $search = false;
        $extraHeader = false;
        $footer = true;
        $bottom = true;

        
        // SQL
        $category_old = Categorie::select('nama_kategori', 'slug', 'icon')->limit(4)->oldest()->get();
        $category_new = Categorie::select('nama_kategori', 'slug', 'icon')->orderBy('id', 'DESC')->limit(3)->get();
        $category_all = Categorie::select('nama_kategori', 'slug', 'icon')->orderBy('id', 'ASC')->get();

        $products_pop = Product::select('products.nama_produk', 'products.id', 'productimages.gambar', 'sellers.tag', 'products.harga')->join('productimages', 'products.id', '=', 'productimages.id')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->limit(5)->get();
        
        $seller = Seller::select('id', 'nama_toko', 'kabupaten', 'foto_penjual')->limit(5)->get();
        
        $products_all = Product::select('products.nama_produk', 'products.id', 'productimages.gambar', 'sellers.tag', 'products.harga')->join('productimages', 'products.id', '=', 'productimages.id')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->paginate(8);
        

        return view('parent/index', 
               compact('page_title', 
                        'page_description', 
                        'action', 
                        'header', 
                        'search', 
                        'extraHeader', 
                        'footer', 
                        'bottom', 
                        'sidebar',
                        'category_old',
                        'category_new',
                        'category_all',
                        'products_all',
                        'products_pop',
                        'seller',
                        'profile_pic'));
    }
    public function rolehandler(){
        // Global
        $page_title = 'Error';
        $page_description = "Halaman Error";
		$action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        

        return view('roleHandler', 
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

    public function user()
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

}
