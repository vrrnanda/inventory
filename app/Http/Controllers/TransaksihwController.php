<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiHardware;
use App\Models\Vendor;
use PDF;

class TransaksihwController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi_hardware=TransaksiHardware::paginate(10);

        return view ('pages.transaksihw.index', compact('transaksi_hardware'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendor = Vendor::all();
        return view('pages.transaksihw.create', compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TransaksiHardware::create([
            'kodeth' => $request -> kodeth,
            'namahw' => $request -> namahw,
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

        return redirect()-> route('transaksi_hardware.index')-> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi_hardware = TransaksiHardware::findOrFail($id);
        $vendor = Vendor::all();

        return view('pages.transaksihw.show', compact('transaksi_hardware','vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi_hardware = TransaksiHardware::findOrFail($id);
        $vendor = Vendor::all();

        return view('pages.transaksihw.edit', compact('transaksi_hardware','vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi_hardware= TransaksiHardware::findOrFail($id);
        $transaksi_hardware -> kodeth = $request -> kodeth;
        $transaksi_hardware -> namahw = $request -> namahw;
        $transaksi_hardware -> namavd= $request -> namavd;
        $transaksi_hardware -> merk = $request -> merk;
        $transaksi_hardware -> spesifikasi = $request -> spesifikasi;
        $transaksi_hardware -> no_spk = $request -> no_spk;
        $transaksi_hardware-> tgl_spk = $request -> tgl_spk;
        $transaksi_hardware -> no_do = $request -> no_do;
        $transaksi_hardware -> tgl_do = $request -> tgl_do;
        $transaksi_hardware -> no_garansi = $request -> no_garansi;
        $transaksi_hardware -> tgl_garansi = $request -> tgl_garansi;
        $transaksi_hardware -> tgl_pembelian = $request -> tgl_pembelian;
        $transaksi_hardware -> harga = $request -> harga;
        $transaksi_hardware -> save();
        return redirect()-> route('transaksi_hardware.index')-> with('success', 'Data berhasil ditubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi_hardware = TransaksiHardware::findOrFail($id);

        $transaksi_hardware-> delete();
        return redirect()-> route('transaksi_hardware.index')-> with('success', 'Data berhasil dihapus');
    }
    public function print(){
        $transaksi_hardware = TransaksiHardware::all();

        $pdf = PDF::loadview('pages.transaksihw.print',['transaksi_hardware'=>$transaksi_hardware]);
        return $pdf-> stream();
    }
}
