<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test()
    {
        $drivers = DB::table('drivers')->get();
        //dd($drivers);
//        return view('drivers')->with('drivers', $drivers);
        return view('drivers', compact('drivers'));
    }
}
