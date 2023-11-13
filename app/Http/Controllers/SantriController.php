<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Tabungan;
use App\Models\WaliSantri;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wali = WaliSantri::all();
        $data = Santri::all();
        $qrCodes = QrCode::size(120)->generate('https://www.binaryboxtuts.com/');

        return view('santri.index', compact('data', 'qrCodes','wali'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wali = WaliSantri::all();
        return view('santri.create', compact('wali'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'id_walisantri'=>'required',
            'nama_bapak'=>'required',
            'nama_ibu'=>'required',
            'tahun_masuk'=>'required',
            'mukim'=>'required',
        ]);

        $data = new Santri();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->id_walisantri = $request->id_walisantri;
        $data->nama_bapak = $request->nama_bapak;
        $data->nama_ibu = $request->nama_ibu;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->mukim = $request->mukim;
        $data->save();

        return redirect()->route('santri.index');
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
        $wali = WaliSantri::all();
        $data = Santri::FindOrFail($id);
        return view('santri.edit', compact('data','wali'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Santri::FindOrFail($id);
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->id_walisantri = $request->id_walisantri;
        $data->nama_bapak = $request->nama_bapak;
        $data->nama_ibu = $request->nama_ibu;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->mukim = $request->mukim;
        $data->save();

        return redirect()->route('santri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Santri::FindOrFail($id)->delete();
        return redirect()->route('santri.index');
    }

    public function tabungan($siswa_id){
        $santri = Santri::all();
        $data = Tabungan::where('siswa_id', $siswa_id )->get();
        return view('santri.tabungan', compact('data', 'santri'));
    }


    public function tabungansantri(){
        $siswa_id = Santri::select('id')->where('id_walisantri', auth()->guard('wali')->user()->id)->value('id');
        $data = Tabungan::where('siswa_id', $siswa_id )->get();
        return view('santri.tabungan', compact('data'));
    }


}
