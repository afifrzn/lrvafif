<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
$Wisata = Wisata::get();

return view('view', compact('Wisata'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Wisata::create([
        'nama_wisata'=> $request->nama_wisata,
        'lokasi'=> $request->lokasi,
        'harga'=> $request->harga,
       ]);

        return to_route("wisata.index");
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
        $row = Wisata::findOrFail($id);
        return view ('wisata.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     * 
     */
    public function update(Request $request, string $id)
    {
        $row = Wisata::findOrFail($id);
        $row->update([
            'nama_wisata' => $request->nama_wisata,
            'lokasi' => $request->lokasi,
            'harga' => $request->harga
        ]);

        return to_route("wisata.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
