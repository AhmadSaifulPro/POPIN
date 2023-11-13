<?php

namespace App\Http\Controllers;

use App\Models\WaliSantri;
use Illuminate\Http\Request;

class WaliSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WaliSantri::all();
        return view('walisantri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('walisantri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required',
            'nama_wali'=>'required',
            'alamat_wali'=>'required',
            'no_telp'=>'required',
            'email'=>'required',
            'password'=>'required',
            'jenis_kelamin'=>'required',
            'hubungan'=>'required',
            'pekerjaan'=>'required',
            'tgl_lahir'=>'required',
            'kota_lahir'=>'required',
            'penghasilan_wali'=>'required',
        ]);

        $data = new WaliSantri();
        $data->nik = $request->nik;
        $data->nama_wali = $request->nama_wali;
        $data->alamat_wali = $request->alamat_wali;
        $data->no_telp = $request->no_telp;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->hubungan = $request->hubungan;
        $data->pekerjaan = $request->pekerjaan;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->kota_lahir = $request->kota_lahir;
        $data->penghasilan_wali = $request->penghasilan_wali;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->save();

        return redirect()->route('wali_santri.index');
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
        $data = WaliSantri::FindOrFail($id);
        return view('walisantri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = WaliSantri::FindOrFail($id);
        $data->nik = $request->nik;
        $data->nama_wali = $request->nama_wali;
        $data->alamat_wali = $request->alamat_wali;
        $data->no_telp = $request->no_telp;
        $data->email = $request->email;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->hubungan = $request->hubungan;
        $data->pekerjaan = $request->pekerjaan;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->kota_lahir = $request->kota_lahir;
        $data->penghasilan_wali = $request->penghasilan_wali;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->save();

        return redirect()->route('wali_santri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WaliSantri::FindOrFail($id)->delete();
        return redirect()->route('wali_santri.index');
    }
}
