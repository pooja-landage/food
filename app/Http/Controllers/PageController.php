<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function getForm()
    {
        return view('admin.page.form');   
    }
    public function submitForm(Request $request)
    {
        $product = new Page();
        $product->title = $request->title;
        $product->excerpt = $request->excerpt;
        $product->page_content = $request->page_content;
        $product->save();
        return redirect()->route('admin.page.table')->with('message', 'Data Successfully Added');
    }
    public function getTable(Request $request)
    {    
        $data = Page::all();
        // dd($data);
        return view('admin.page.table',compact('data'));
    } 
    public function editForm($id)
    {
        $data = Page::find($id);
        // dd($data);
        return view('admin.page.edit',compact('data')); 
    }  
    public function updateForm(Request $request,$id)
    {
        $product = Page::find($id);
        $product->title = $request->title;
        $product->excerpt = $request->excerpt;
        $product->page_content = $request->page_content;
        $product->update();
        return redirect()->route('admin.page.table')->with('message', 'Data Successfully Added');
        
    }
    public function deleteForm(Request $request,$id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->excerpt = $request->excerpt;
        $product->page_content = $request->page_content;
        $product->delete();
        return redirect()->route('admin.page.table');
    }
}
