<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = DB::table('tb_pegawai')->get();
        return view('blog/databuku',['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah_pegawai(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:1|max:65',
            'telfon' => 'required|min:3|max:50',
            'alamat'=> 'required',
        ]);
        DB::table('tb_pegawai')->insert([
            'nama_pegawai' => $request->nama,
            'telfon_pegawai' => $request->telfon,
            'alamat_pegawai' => $request->alamat,
            'posisi_peagawai' => $request->posisi,
          ]);
          return redirect('/buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $buku = DB::table('tb_pegawai')->where('id',$id)->get();
        ($buku);
        return view('blog/edit2',['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:1|max:35',
            'telfon' => 'required|min:3|max:40',
            'alamat'=> 'required',
        ]);
        DB::table('tb_pegawai')->where('id',$request->id)->update([
            'nama_pegawai' => $request->nama,
            'telfon_pegawai' => $request->telfon,
            'alamat_pegawai' => $request->alamat,
            'posisi_peagawai' => $request->posisi,
         ]);
          
         return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_pegawai')->where('id',$id)->delete();

        return redirect('/buku');
    }

    public function delete(Request $request, $id){

        DB::table('tb_pegawai')->where('id',$id)->delete();

        return redirect('/buku');


    }
}
