<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendor= Vendor::paginate(10);
        return view ('pages.vendor.index', compact('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vendor::create([
            'kodevd' => $request -> kodevd,
            'namavd' => $request -> namavd,
            'no_telp' => $request -> no_telp,
            'alamat' => $request -> alamat
        ]);

        return redirect()-> route('vendor.index')-> with('success', 'Data berhasil ditambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('pages.vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vendor = Vendor::findOrFail($id);

        $vendor-> kodevd = $request-> kodevd;
        $vendor-> namavd = $request-> namavd;
        $vendor-> no_telp = $request-> no_telp;
        $vendor-> alamat = $request-> alamat;
        $vendor-> save();

        return redirect()-> route('vendor.index')-> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = Vendor::findOrFail($id);

        $vendor-> delete();
        return redirect()-> route('vendor.index')-> with('success', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $vendor= Vendor::where ('namavd', 'like', '%'.$cari.'%') 
        ->orWhere('kodevd', 'like', '%'. $cari. '%')
        ->paginate();

        return view('pages.vendor.index', compact('vendor'));
    }
}
