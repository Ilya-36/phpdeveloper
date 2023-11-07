<?php

namespace App\Http\Controllers;

use App\Http\DTO\ApartmentSearchDTO;
use App\Http\Requests\StorePostRequest;
use App\Http\Services\ApartmenSearchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    private  $apartmen;
    public function __construct(ApartmenSearchService $apartmenSearchService)
    {
        $this->apartmen = $apartmenSearchService;
    }

    public function index(StorePostRequest $request)
    {
//        $query = DB::table('apartments');
//
//        if ($request->has('name')) {
//            $query->where('name', 'like', '%' . $request->input('name') . '%');
//        }
//        if ($request->has('bedrooms')) {
//            $query->where('bedrooms', $request->input('bedrooms'));
//        }
//        if ($request->has('bathrooms')) {
//            $query->where('bathrooms', $request->input('bathrooms'));
//        }
//        if ($request->has('storeys')) {
//            $query->where('storeys', $request->input('storeys'));
//        }
//        if ($request->has('garages')) {
//            $query->where('garages', $request->input('garages'));
//        }
//        if ($request->has('price_min')) {
//            $priceMin = $request->input('price_min');
//            $query->where('price', '>=', $priceMin);
//        }
//        if ($request->has('price_max')) {
//            $priceMax = $request->input('price_max');
//            $query->where('price', '<=', $priceMax);
//        }
        $apartmentSearch = new ApartmentSearchDTO(
            $request->input('name'),
            $request->input('badrooms')
        );
        $data = $this->apartmen->search($apartmentSearch);

        return response()->json($data);
    }
}
