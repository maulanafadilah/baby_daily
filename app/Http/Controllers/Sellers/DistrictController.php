<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function select(Request $request)
    {
        $districts = [];
        $regencyID = $request->regencyID;
        if ($request->has('q')) {
            $search = $request->q;
            $districts = District::select("id", "name")
                ->where('regency_id', $regencyID)
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $districts = District::where('regency_id', $regencyID)->limit(10)->get();
        }
        return response()->json($districts);
    }
}
