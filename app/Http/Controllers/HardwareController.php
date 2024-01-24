<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use Illuminate\Http\Request;


class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hardware = Hardware::paginate(5);
        return view ('pages.hardware.index', ['hardware' => $hardware]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.hardware.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hardware::create([
            'kodehw' => $request -> kodehw,
            'namahw' => $request -> namahw
        ]);

        return redirect()-> route('hardware.index')-> with('success', 'Data berhasil ditambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hardware = Hardware::findOrFail($id);

        return view('pages.hardware.edit', compact('hardware'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hardware = Hardware::findOrFail($id);

        $hardware-> kodehw = $request-> kodehw;
        $hardware-> namahw = $request-> namahw;
        $hardware-> save();

        return redirect()-> route('hardware.index')-> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hardware = Hardware::findOrFail($id);

        $hardware-> delete();
        return redirect()-> route('hardware.index')-> with('success', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $hardware = Hardware::where ('namahw', 'like', '%'.$cari.'%') 
        ->orWhere('kodehw', 'like', '%'. $cari. '%')
        ->paginate();

        return view('pages.hardware.index', compact('hardware'));
    }
}
