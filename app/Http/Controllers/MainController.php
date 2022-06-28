<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Review;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Doctor;

class MainController extends Controller
{


    public static function main(){
        $params = Doctor::all();
        return view('main', ['doctors' => $params]);
    }

    public static function about(){
        return view('about');
    }

    public static function sign(){
        return view('sign');
    }

    public function save_form(Request $request){
        return view('sign', ['request' => $request]);
    }

}