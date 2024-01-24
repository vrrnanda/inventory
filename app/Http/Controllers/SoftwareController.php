<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $software = Software::paginate(10);
        
        return view ('pages.software.index', ['software' => $software]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.software.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Software::create([
            'kodesw' => $request -> kodesw,
            'namasw' => $request -> namasw
        ]);

        return redirect()-> route('software.index')-> with('success', 'Data berhasil ditambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $software = Software::findOrFail($id);

        return view('pages.software.edit', compact('software'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $software = Software::findOrFail($id);

        $software -> kodesw = $request -> kodesw;
        $software -> namasw = $request -> namasw;
        $software -> save();
        return redirect()-> route('software.index')->with ('alert-success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $software = Software::findOrFail($id);

        $software-> delete();
        return redirect()-> route('software.index')-> with('success', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $software = Software::where ('namasw', 'like', '%'.$cari.'%') 
        ->orWhere('kodesw', 'like', '%'. $cari. '%')
        ->paginate();

        return view('pages.software.index', compact('software'));
    }
}
