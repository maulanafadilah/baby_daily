<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function select(Request $request)
    {
        $provinces = [];

        if ($request->has('q')) {
            $search = $request->q;
            $provinces = Province::select("id", "name")
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $provinces = Province::limit(10)->get();
        }
        return response()->json($provinces);
    }
}
