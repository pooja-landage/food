<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function getTable(Request $request)
    {    
        $data = Review::all();
        // dd($data);
        return view('admin.restaurant.review',compact('data'));
    }
}
