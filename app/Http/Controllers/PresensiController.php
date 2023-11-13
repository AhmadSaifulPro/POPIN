<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Admin;
use App\Models\Santri;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Absen::all();
        return view('presensi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin = Admin::all();
        $santri = Santri::all();
        return view('presensi.create', compact('santri', 'admin'));
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // $request->validate([
        //     'siswa_id' =>'required',
        //     'admin_id' =>'required',
        //     'verifikasi' =>'required',
        //     'ket' =>'required',
        //     'tanggal' =>'required',
        //     'jam_keluar' =>'required',
        //     'jam_masuk' =>'required',
        // ]);

        //nambah foto
        if($request->file('foto')){
            $img = $request->file('foto');
            $foto = time(). '-'. $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($lokasi, $foto);
        }

        $data = new Absen();
        $data->siswa_id = $request->siswa_id;
        $data->admin_id = auth()->guard('admin')->user()->id;
        $data->foto = $foto;
        $data->verifikasi = $request->verifikasi;
        $data->ket = $request->ket;
        $data->tanggal = $request->tanggal;
        $data->jam_keluar = $request->jam_keluar;
        $data->jam_kembali = $request->jam_kembali;
        // dd($data);
        $data->save();

        return redirect()->route('presensi.index');
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
        $santri = Santri::all();
        $data = Absen::FindOrFail($id);
        return view('presensi.edit', compact('santri','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Absen::FindOrFail($id);
        if($request->file('foto')){
            $img = $request->file('foto');
            $foto = time(). '-'. $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($lokasi, $foto);


            $data->siswa_id = $request->siswa_id;
            $data->admin_id = auth()->guard('admin')->user()->id;
            $data->verifikasi = $request->verifikasi;
            $data->foto = $foto;
            $data->ket = $request->ket;
            $data->tanggal = $request->tanggal;
            $data->jam_keluar = $request->jam_keluar;
            $data->jam_kembali = $request->jam_kembali;
        }else{
            $data->siswa_id = $request->siswa_id;
            $data->admin_id = auth()->guard('admin')->user()->id;
            $data->verifikasi = $request->verifikasi;
            $data->ket = $request->ket;
            $data->tanggal = $request->tanggal;
            $data->jam_keluar = $request->jam_keluar;
            $data->jam_kembali = $request->jam_kembali;
        }
        $data->save();

        return redirect()->route('presensi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Absen::FindOrFail($id)->delete();
        return redirect()->route('presensi.index');
    }

    public function absenQr($id){
        // echo "OK";
        $admin = auth()->guard('admin')->user()->id;
        $santri = Santri::FindOrFail($id);
        // dd($santri);
        return view('presensi.absenqr', compact('admin', 'santri'));
    }

    public function nambah(Request $request, $id)
    {
        // $request->validate([
        //     'siswa_id' =>'required',
        //     'admin_id' =>'required',
        //     'verifikasi' =>'required',
        //     'ket' =>'required',
        //     'tanggal' =>'required',
        //     'jam_keluar' =>'required',
        //     'jam_masuk' =>'required',
        // ]);

        //nambah foto
        if($request->file('foto')){
            $img = $request->file('foto');
            $gambar = time(). '-'. $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($lokasi, $gambar);
        }

        $data = new Absen();
        $data->siswa_id = $id;
        $data->admin_id = auth()->guard('admin')->user()->id;
        $data->foto = $gambar;
        $data->verifikasi = $request->verifikasi;
        $data->ket = $request->ket;
        $data->tanggal = $request->tanggal;
        $data->jam_keluar = $request->jam_keluar;
        $data->jam_kembali = $request->jam_kembali;
        // dd($data);
        $data->save();

        return redirect()->route('presensi.index');
    }
}
