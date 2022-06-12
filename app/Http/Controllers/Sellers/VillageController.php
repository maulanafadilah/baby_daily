<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function select(Request $request)
    {
        $villages = [];
        $districtID = $request->districtID;
        if ($request->has('q')) {
            $search = $request->q;
            $villages = Village::select("id", "name")
                ->where('district_id', $districtID)
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $villages = Village::where('district_id', $districtID)->limit(10)->get();
        }
        return response()->json($villages);
    }
}
