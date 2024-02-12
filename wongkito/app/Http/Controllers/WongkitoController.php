<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class WongkitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $data = new Customer();
        $data ->name=$request->name;
        $data ->email=$request->email;
        $data ->number=$request->number;
        $data ->message=$request->message;
        $data ->save();
  
        return redirect()->route('index');

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Customer::find($id);
        $data->name = $request->name;
        $data->email =$request->email;
        $data->number =$request->number;
        $data ->message=$request->message;
        $data ->save();

        return redirect()->route('admin.customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Customer::find($id)->delete();

        return redirect()->route('admin.customer');
    }
}
