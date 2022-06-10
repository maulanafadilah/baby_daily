<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SellersController extends Controller
{
    public function add()
    {
        // Global
        $page_title = 'Buat Toko';
        $page_description = "Halaman Buat Toko";
        $action = __FUNCTION__;

        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;
        return view('mbb/login', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'nama_toko'     => 'required|unique:posts|max:255',
            'provinsi'      => 'required',
            'kabupaten'     => 'required',
            'kecamatan'     => 'required',
            'kelurahan'     => 'required',
            'alamat'        => 'required',
            'kode_pos'      => 'required|numeric',
            'flag'          => 'required|numeric'
        ]);

        Sellers::create([
            'nama_penjual' => auth()->user()->nama_lengkap,
            'nomor_telepon' => auth()->user()->nomor_telepon,
            'nama_toko' => $request->nama_toko,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'flag' => $request->flag,
            'id_pengguna' => auth()->user()->id
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_toko'     => 'required|unique:posts|max:255',
            'provinsi'      => 'required',
            'kabupaten'     => 'required',
            'kecamatan'     => 'required',
            'kelurahan'     => 'required',
            'alamat'        => 'required',
            'kode_pos'      => 'required|numeric',
            'flag'          => 'required|numeric'
        ]);

        Sellers::where('id', auth()->user()->id)
            ->update([
                'nama_toko' => $request->nama_toko,
                'provinsi' => $request->provinsi,
                'kabupaten' => $request->kabupaten,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'alamat' => $request->alamat,
                'kode_pos' => $request->kode_pos,
                'flag' => $request->flag
            ]);
    }

    public function banner_1(Request $request)
    {
        $this->validate($request, [
            'banner_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('banner_1');
        $image->storeAs('public/sellers/banner_1', $image->hashName());

        Sellers::where('id', auth()->user()->id)
            ->update(['banner_1' => $image->hashName()]);
    }

    public function update_banner_1(Request $request, Sellers $sellers)
    {
        $this->validate($request, [
            'banner_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('banner_1');
        $image->storeAs('public/sellers/banner_1', $image->hashName());

        Storage::delete('public/sellers/banner_1/' . $sellers->image);

        $sellers->where('id', auth()->user()->id)
            ->update(['banner_1' => $image->hashName()]);
    }

    public function banner_2(Request $request)
    {
        $this->validate($request, [
            'banner_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('banner_2');
        $image->storeAs('public/sellers/banner_2', $image->hashName());
    }

    public function update_banner_2(Request $request, Sellers $sellers)
    {
        $this->validate($request, [
            'banner_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('banner_2');
        $image->storeAs('public/sellers/banner_2', $image->hashName());

        Storage::delete('public/sellers/banner_2/' . $sellers->image);

        $sellers->where('id', auth()->user()->id)
            ->update(['banner_1' => $image->hashName()]);
    }

    public function banner_3(Request $request)
    {
        $this->validate($request, [
            'banner_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('banner_1');
        $image->storeAs('public/sellers/banner_3', $image->hashName());
    }

    public function update_banner_3(Request $request, Sellers $sellers)
    {
        $this->validate($request, [
            'banner_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('banner_3');
        $image->storeAs('public/sellers/banner_3', $image->hashName());

        Storage::delete('public/sellers/banner_3/' . $sellers->image);

        $sellers->where('id', auth()->user()->id)
            ->update(['banner_1' => $image->hashName()]);
    }
}
