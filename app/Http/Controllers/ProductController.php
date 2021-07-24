<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function getForm()
    {
       
        $categories = Category::all();
        return view('admin.product.form',compact('categories'));
    }
    public function submitForm(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $arrayTostring =implode(',', $request->category_id);
        $product->category_id=$arrayTostring;
        $product->status = $request->status;
        $product->addon = $request->addon;
        if($files = $request->file('image'))
        {
            $name = $files->getClientOriginalName();
            $files->move('images',$name);
            $product->image = $name;
        }
        $product->save();
        return redirect()->route('admin.product.table')->with('message', 'Data Successfully Added');
    }
    public function getTable(Request $request)
    {    
        $data = Product::all();
        // dd($data);
        return view('admin.product.table',compact('data'));
    } 
}
