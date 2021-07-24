<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function getData()
    {
        return view('admin.restaurant.create');   
    }
    public function store()
    {
        return view('admin.restaurant.store');   
    }
    public function submitForm(Request $request)
    {
        $product = new Restaurant();
        $product->name = $request->name;
        $product->email = $request->email;
        $product->password = $request->password;
        $product->conformed_password = $request->conformed_password;
        $product->phone_no = $request->phone_no;
        $product->address = $request->address;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin.restaurant.request')->with('message', 'Data Successfully Added');
    }
    public function getTable(Request $request)
    {    
        $data = Restaurant::all();
        // dd($data);
        return view('admin.restaurant.request',compact('data'));
    } 
   
    
}
