<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function getTable(Request $request)
    {    
        $data = Customer::all();
        // dd($data);
        return view('admin.customer.table',compact('data'));
    }
}
