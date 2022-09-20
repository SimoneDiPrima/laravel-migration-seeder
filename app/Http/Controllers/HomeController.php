<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = [];
        return view('trains.index',compact('trains'));
    }
}
