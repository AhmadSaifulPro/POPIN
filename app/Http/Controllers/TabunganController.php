<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Santri;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tabungan::all();
        $santri = Santri::all();
        return view('tabungan.index', compact('data', 'santri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $santri = Santri::all();
        return view('tabungan.create', compact('santri'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' =>'required',
            'jenis' =>'required',
            'jumlah' =>'required',
            'admin_id' =>'required',
        ]);

        $data = new Tabungan();
        $data->tanggal = today();
        $data->siswa_id = $request->siswa_id;
        $data->jenis = $request->jenis;
        $data->jumlah = $request->jumlah;
        $data->admin_id = auth()->guard('admin')->user()->id;
        $data->save();

        return redirect()->route('tabungan.index');
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
        $data = Tabungan::FindOrFail($id);
        return view('tabungan.edit', compact('data', 'santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Tabungan::FindOrFail($id);
        $data->tanggal = $request->tanggal;
        $data->siswa_id = $request->siswa_id;
        $data->jenis = $request->jenis;
        $data->jumlah = $request->jumlah;
        $data->admin_id = auth()->guard('admin')->user()->id;
        $data->save();

        return redirect()->route('tabungan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tabungan::FindOrFail($id)->delete();
        return redirect()->route('tabungan.index');
    }


    public function download(Request $request){

        $data = Tabungan::whereBetween('tanggal', [$request->tanggal_awal, $request->tanggal_akhir])->get();
        $pdf = Pdf::loadView('pdf', compact('data'));
        return $pdf->download();
    }

    public function download_individu(Request $request){

        $data = Tabungan::whereBetween('tanggal', [$request->tanggal_awal, $request->tanggal_akhir])->where('siswa_id', $request->siswa_id)->get();
        $pdf = Pdf::loadView('pdf', compact('data'));
        return $pdf->download();
    }
}
