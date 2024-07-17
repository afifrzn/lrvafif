<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Wisata = Wisata::get(); 
        $User = User::get();
        $Pemesanan = Pemesanan::with('user','wisata')->get();
        dd($Pemesanan); 

        return view('pemesanan.view', compact('Wisata','User','Pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemesanan.add', [
            'pemesanan' => Pemesanan::get(),
            'User' => User::get(),
            'Wisata' => Wisata::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Pemesanan::create([
        'User_id'=> $request->name,
        'Wisata_id'=> $request->nama,
       ]);

       return redirect()->route('pemesanan.index');
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
        return view('pemesanan.edit',[
            'Pemesanan' => Pemesanan::find($id),
            'Wisata' => Wisata::get(),
            'User' => User::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Wisata = Wisata::find($id);
        $User = User::find($id);
        $Pemesanan = Pemesanan::find($id);

        $Pemesanan->update([
            'User_id'=> $request->name,
            'Wisata_id'=> $request->nama,
           ]);


    
           return redirect()->route('pemesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rows = Pemesanan::find($id);

        $rows->delete();

        return to_route('pemesanan.index');
    }
}
