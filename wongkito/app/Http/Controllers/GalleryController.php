<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gallerys = Gallery::all();
        return view('landing.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Gallery();
        $data ->gambar=$request->file('gambar')->store('public/gallery');
        $data ->description=$request->desc;
        $data ->save();

        return redirect()->route('gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Gallery::find($id);
        return view('admin.editgallery', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
          $request->validate([
        'gallery' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan kebutuhan Anda
    ]);

    // Cari produk yang ingin diedit
    $data = Gallery::find($id);

    if ($request->hasFile('gambar')) {
        Storage::delete($data->gambar); 
        $data->gambar = $request->file('gallery')->store('public/gallery');
    }
        $data ->description=$request->desc;
        $data ->save();

        return redirect()->route('gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Gallery::find($id)->delete();

        return redirect()->route('gallery');
    }
}
