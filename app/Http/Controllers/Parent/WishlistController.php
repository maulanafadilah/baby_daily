<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Global
        $page_title = 'Wishlist';
        $page_description = "List Produk Favorit";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        $wishlist = Wishlist::select('products.nama_produk', 'products.id', 'products.harga', 'wishlists.id as idw', 'products.cover', 'sellers.tag')->where('wishlists.id_pengguna', auth()->user()->id)->where('sellers.tag', '2')->join('products', 'wishlists.id_produk', '=', 'products.id')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->get();

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
                'wishlist',
                // 'wishlist_image'
            )
        );
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
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'id_produk' => 'required',          
        ]);

        // return $validatedData;
        
        Wishlist::create($validatedData + ['id_pengguna' => auth()->user()->id]);

        return back()->with('success', 'Berhasil Menambahkan ke Favorit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wishlist::destroy($id);

        return back()->with('success', 'Favorit Dihapus');
    }
}
