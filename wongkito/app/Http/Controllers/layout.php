<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class layout extends Controller
{
     public function index(){
        return view ('landing.index');
    }
     public function adminpage(){
        return view ('admin.adminpage');
    }
     public function produk(){
        return view ('admin.produk');
    }

     public function Customer(){
        $data = Customer::get();
        return view ('admin.customer', compact('data'));
    }
}
