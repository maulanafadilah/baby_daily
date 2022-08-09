<?php

namespace App\Http\Controllers\parent;

use App\Models\Babie;
use App\Models\Eltern;
use App\Models\Product;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Global
        $page_title = 'KMS Digital';
        $page_description = "Beranda KMS Digital";
        $action = __FUNCTION__;
        
        // Component
        $header = false;
        $search = false;
        $extraHeader = false;
        $footer = false;
        $bottom = false;
        $sidebar = false;

        $products_all = Product::select('products.nama_produk', 'products.id', 'products.cover', 'sellers.tag', 'products.harga')->join('sellers', 'products.id_penjual', '=', 'sellers.id')->where('sellers.tag', '2')->paginate(8);
        $id_pengguna = auth()->user()->id;

        $biodata = Eltern::where('id_pengguna', $id_pengguna)->get();

        if ($biodata == '[]') {
            return redirect('/profile')->with('failed', 'Tolong Tambahkan Nomor KK Terlebih Dahulu');
            // return view('parent/kms/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'products_all'));
        } else{
            $biodata = Eltern::where('id_pengguna', $id_pengguna)->get()[0];
            $balita = Babie::select('id', 'nama_lengkap', DB::raw("PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM CURDATE()), EXTRACT(YEAR_MONTH FROM tanggal_lahir)) as usia"))->where('no_kk', $biodata->no_kk)->get();
            if($balita == '[]'){
                $balita = false;
            }
            return view('parent/kms/index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'balita', 'biodata', 'products_all'));
        }
        // return $biodata;

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

        $balita = Babie::find($id);
        if ($balita != null) {
        $usia = Babie::select(DB::raw("PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM CURDATE()), EXTRACT(YEAR_MONTH FROM tanggal_lahir)) as usia"))->where('id', $id)->first();
        $gd = Babie::where('id', $id)->get('jenis_kelamin');

        $blt = DB::table('babies')->where('id', $id)->value('nik');
        $s = json_encode($blt);
        $khrn = Presence::where('nik', $s)->orderBy('tanggal', 'asc')->get('berat');

            if ($khrn != '[]') {
                foreach ($gd as $student) {
                    $dataPoints2 = array(
                    $student['jenis_kelamin'],
                        );
                }
                $md = json_encode($dataPoints2);
            
                foreach ($khrn as $student) {
                    $dataPoints[] = array(
                    $student['berat'],
                        );
                }
                $md2 = json_encode($dataPoints);
            
                // return $md2;
                $kehadiran = Presence::where('nik', $balita->nik)->orderBy('tanggal', 'desc')->get();
            } else {
                $md = 0;
                $md2 = 0;
                $kehadiran = false;
            }
        }else{
            $balita = false;
            $usia = false;
            $md = 0;
            $md2 = 0;
            $kehadiran = false;
        }
        

        return view('parent/kms/show', compact('md', 'md2', 'page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar', 'usia'), ['balita' => $balita, 'kehadiran' => $kehadiran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            // Global
       $page_title = 'Tambah Perkembangan Anak';
       $page_description = "Tambah Perkembangan Bulanan Anak";
       $action = __FUNCTION__;

       // Component
       $header = false;
       $search = true;
       $extraHeader = false;
       $footer = false;
       $bottom = false;
       $sidebar = false;
        
       $id_balita = $id;
       return view('parent/kms/create', 
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
                           'id_balita'
                       ));
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
        // return $request;
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
        ]);

        
        $biodata = Babie::select('nik', 'nama_lengkap', 'tanggal_lahir')->where('id', $id)->get()[0];
        // return $usia;
        Presence::create($validatedData + ['nik'=>$biodata->nik, 'nama_balita'=>$biodata->nama_lengkap, 'usia'=>'0', 'id_posyandu'=>'5']);
        return redirect('/kms/'.$id)->with('success', 'Berhasil Menambah Perkembangan Balita!');
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
