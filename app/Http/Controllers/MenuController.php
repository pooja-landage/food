<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function gettable(Request $request)
    {    
        $data = Menu::all();
        // dd($data);
        return view('admin.shop.menu',compact('data'));
    } 
}
