<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Ruang;
use Illuminate\Http\Request;
use PDF;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasi = Lokasi::paginate(5);
        return view ('pages.lokasi.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ruang = Ruang::all();
        return view('pages.lokasi.create', compact('ruang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lokasi::create([
            'kodelok' => $request -> kodelok,
            'namabrg' => $request -> namabrg,
            'namarg' => $request -> namarg,
            'jumlah' => $request -> jumlah,
            'tgllok' => $request -> tgllok,
        ]);

        return redirect()-> route('lokasis.index')-> with('success', 'Data berhasil ditambahkan');
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
        $lokasi = Lokasi::findOrFail($id);
        $ruang = Ruang::all();

        return view('pages.lokasi.edit', compact('lokasi','ruang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi -> kodelok = $request -> kodelok;
        $lokasi -> namabrg = $request -> namabrg;
        $lokasi -> namarg = $request -> namarg;
        $lokasi -> jumlah = $request -> jumlah;
        $lokasi -> tgllok = $request -> tgllok;
        $lokasi -> save();
        return redirect()-> route('lokasis.index')-> with('success', 'Data berhasil ditubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lokasi= Lokasi::findOrFail($id);

        $lokasi-> delete();
        return redirect()-> route('lokasis.index')-> with('success', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $lokasi = Lokasi::where ('namarg', 'like', '%'.$cari.'%')
        ->orWhere('namabrg', 'like', '%'. $cari. '%')
        ->orWhere('kodelok', 'like', '%'. $cari. '%')
        ->paginate();

        return view('pages.lokasi.index', compact('lokasi'));
    }
    public function print(){
        $lokasi = Lokasi::all();

        $pdf = PDF::loadview('pages.lokasi.print',['lokasis'=>$lokasi]);
        return $pdf-> stream();
    }
}
