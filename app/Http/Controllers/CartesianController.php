<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartesian\CartesianProduct;

class CartesianController extends Controller
{
    public function get(Request $request)
    {
//        $array = [
//            [
//                "head 0",
//                "head 0"
//            ],
//            [
//                "body 0",
//                "body 1",
//                "body 2",
//                "body 3"
//            ],
//            [
//                "footer 0",
//                "footer 1"
//            ]
//        ];
        $array = json_decode($request->getContent());
        return CartesianProduct::allPossabilities($array);
    }

    public function populate($min, $max)
    {
        $array = CartesianProduct::populate($min,$max);
        return response()->json($array);
    }
}
