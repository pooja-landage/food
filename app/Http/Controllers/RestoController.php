<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resto;
class RestoController extends Controller
{
    public function getData(Request $request)
    {    
        $data = Resto::all();
        // dd($data);
        return view('admin.restaurant.resto',compact('data'));
    } 
}
