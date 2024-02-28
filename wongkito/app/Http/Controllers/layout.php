<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Gallery;
use App\Models\Produk;
use Illuminate\Http\Request;

class layout extends Controller
{
     public function index(){
    $gallerys = Gallery::all();
    $produks = Produk::paginate(6);
    // return view('landing.index', compact('produks','gallerys'));
     return view('landing.index', ['produks' => $produks, 'gallerys' => $gallerys]);
    }

     public function adminpage(){
        return view ('admin.adminpage');
    }

     public function addproduk(){
        return view ('admin.addproduk');
    }

     public function Customer(){
        $data = Customer::get();
        return view ('admin.customer', compact('data'));
    }

     public function Produk(){
        $produks = Produk::paginate(3);
        return view ('admin.produk', compact('produks'));
    }
    
    public function gallery(){
        $gallerys = Gallery::paginate(3);
        return view ('admin.gallery', compact('gallerys'));
    }

     public function editproduk(){
        return view ('admin.editproduk');
    }

     public function editgallery(){
        return view ('admin.editgallery');
    }

     public function addgallery(){
        return view ('admin.addgallery');
    }

}
