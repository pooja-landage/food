<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rider;

class RiderController extends Controller
{
    public function getTable(Request $request)
    {    
        $data = Rider::all();
        // dd($data);
        return view('admin.rider.ride',compact('data'));
    }
    
    public function store(Request $request)
    {    
        $data = Rider::all();
        // dd($data);
        return view('admin.rider.request',compact('data'));
    } 
}
