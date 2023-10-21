<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('apartment');

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->has('bedrooms')) {
            $query->where('bedrooms', $request->input('bedrooms'));
        }
        if ($request->has('bathrooms')) {
            $query->where('bathrooms', $request->input('bathrooms'));
        }
        if ($request->has('storeys')) {
            $query->where('storeys', $request->input('storeys'));
        }
        if ($request->has('garages')) {
            $query->where('garages', $request->input('garages'));
        }
        if ($request->has('price_min')) {
            $priceMin = $request->input('price_min');
            $query->where('price', '>=', $priceMin);
        }
        if ($request->has('price_max')) {
            $priceMax = $request->input('price_max');
            $query->where('price', '<=', $priceMax);
        }
        $parameters = $query->get();
        return response()->json($parameters);
    }
}
