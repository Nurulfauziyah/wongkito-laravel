<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('landing.index', compact('produks'));
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
        
        $data = new Produk();
        $data ->name=$request->name;
        $data ->description=$request->desc;
        $data ->link=$request->link;
        $data ->price=$request->price;
        $data ->gambar=$request->file('gambar')->store('public/images');
        $data ->save();

        return redirect()->route('produk');
       
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
        $data = Produk::find($id);
        return view('admin.editproduk', compact('data'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $request->validate([
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan kebutuhan Anda
    ]);

    // Cari produk yang ingin diedit
    $data = Produk::find($id);

    // Hapus gambar lama jika ada
    if ($request->hasFile('gambar')) {
        Storage::delete($data->gambar); // Hapus gambar lama dari storage
        $data->gambar = $request->file('gambar')->store('public/images'); // Simpan gambar baru
    }
        $data ->name=$request->name;
        $data ->description=$request->desc;
        $data ->link=$request->link;
        $data ->price=$request->price;
        $data ->save();

        return redirect()->route('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Produk::find($id)->delete();

        return redirect()->route('produk');
    }
}
