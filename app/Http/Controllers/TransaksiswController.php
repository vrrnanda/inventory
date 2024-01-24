<?php

namespace App\Http\Controllers;

use App\Models\TransaksiSoftware;
use App\Models\Vendor;
use Illuminate\Http\Request;
use PDF;

class TransaksiswController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi_software=TransaksiSoftware::paginate(10);

        return view ('pages.transaksisw.index', compact('transaksi_software'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendor = Vendor::all();
        return view('pages.transaksisw.create', compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TransaksiSoftware::create([
            'kodets' => $request -> kodets,
            'namasw' => $request -> namasw,
            'namavd' => $request -> namavd,
            'merk' => $request -> merk,
            'spesifikasi' => $request -> spesifikasi,
            'no_spk' => $request -> no_spk,
            'tgl_spk' => $request -> tgl_spk,
            'no_do' => $request -> no_do,
            'tgl_do' => $request -> tgl_do,
            'no_garansi' => $request -> no_garansi,
            'tgl_garansi' => $request -> tgl_garansi,
            'tgl_pembelian' => $request -> tgl_pembelian,
            'harga' => $request -> harga
        ]);

        return redirect()-> route('transaksi_software.index')-> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Request $request)
    {
        $transaksi_software = TransaksiSoftware::findOrFail($id);
        $vendor = Vendor::all();

        return view('pages.transaksisw.show', compact('transaksi_software','vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi_software = TransaksiSoftware::findOrFail($id);
        $vendor = Vendor::all();

        return view('pages.transaksisw.edit', compact('transaksi_software','vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vendor = Vendor::all();
        $transaksi_software = TransaksiSoftware::findOrFail($id);
        $transaksi_software -> kodets = $request -> kodets;
        $transaksi_software -> namasw = $request -> namasw;
        $transaksi_software -> namavd = $request -> namavd;
        $transaksi_software -> merk = $request -> merk;
        $transaksi_software -> spesifikasi = $request -> spesifikasi;
        $transaksi_software -> no_spk = $request -> no_spk;
        $transaksi_software -> tgl_spk = $request -> tgl_spk;
        $transaksi_software -> no_do = $request -> no_do;
        $transaksi_software -> tgl_do = $request -> tgl_do;
        $transaksi_software -> no_garansi = $request -> no_garansi;
        $transaksi_software -> tgl_garansi = $request -> tgl_garansi;
        $transaksi_software-> tgl_pembelian = $request -> tgl_pembelian;
        $transaksi_software-> harga = $request -> harga;
        $transaksi_software -> save();
        return redirect()-> route('transaksi_software.index', compact('vendor','transaksi_software'))-> with('success', 'Data berhasil ditubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi_software = TransaksiSoftware::findOrFail($id);

        $transaksi_software-> delete();
        return redirect()-> route('transaksi_software.index')-> with('success', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $transaksi_software = TransaksiSoftware::where ('namasw', 'like', '%'.$cari.'%')
        ->orWhere('kodets', 'like', '%'. $cari. '%')
        ->paginate();

        return view('pages.transaksisw.index', compact('transaksi_software'));
    }
    public function print(){
        $transaksi_software = TransaksiSoftware::all();

        $pdf = PDF::loadview('pages.transaksisw.print',['transaksi_software'=>$transaksi_software]);
        return $pdf-> stream();
    }
}
