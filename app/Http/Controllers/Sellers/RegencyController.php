<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\Regency;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    public function select(Request $request)
    {
        $regencies = [];
        $provinceID = $request->provinceID;
        if ($request->has('q')) {
            $search = $request->q;
            $regencies = Regency::select("id", "name")
                ->where('province_id', $provinceID)
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $regencies = Regency::where('province_id', $provinceID)->limit(10)->get();
        }
        return response()->json($regencies);
    }
}
