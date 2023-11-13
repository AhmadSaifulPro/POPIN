<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Admin::all();
        return view('pengurus.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'nama'=> 'required',
            'password'=> 'required',
            'alamat'=> 'required',
            'telp'=> 'required'
        ]);


        $data = new Admin();
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->save();

        return redirect()->route('pengurus.index');
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
        $data = Admin::FindOrFail($id);
        return view('pengurus.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Admin::FindOrFail($id);
        $data->email = $request->email;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->save();

        return redirect()->route('pengurus.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::FindOrFail($id)->delete();
        return redirect()->route('pengurus.index');
    }
}
