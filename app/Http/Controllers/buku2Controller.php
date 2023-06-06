<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class buku2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = DB::table('tb_buku')->get();
        return view('blog/databuku2',['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah_buku(Request $request)
    {
        DB::table('tb_buku')->insert([
            'nama_buku' => $request->nama,
            'kategori_buku' => $request->kategori,
            'penerbit_buku' => $request->penerbit,
            'tahun_buku' => $request->tahun,
            'jumlah_buku' => $request->jumlah
          ]);
          return redirect('/buku2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
