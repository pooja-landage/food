<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function getForm()
    {   
        $data = Category::all ();
        return view('admin.shop.category',compact('data'));   
    } 
    public function submitForm(Request $request)
    {
        $product = new Category();
        $product->name = $request->name;
        $product->slug = $request->name;
        $product->parent_category = $request->parent_category;
        $product->save();
        return redirect()->route('admin.shop.category')->with('message', 'Data Successfully Added');
    }
}
