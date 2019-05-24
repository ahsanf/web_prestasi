<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prestasiController extends Controller
{
   public function index(){
        $data_prestasi = \App\prestasi::all();
        return view('prestasi.index',['data_prestasi' => $data_prestasi]);
    }

    public function create(Request $request){
        \App\Prestasi::create($request->all());
        return redirect('/prestasi')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $prestasi = \App\Prestasi::find($id);
        return view('prestasi/edit',['prestasi' => $prestasi ]);
    }

    public function update(Request $request,$id){
        $prestasi = \App\Prestasi::find($id);
        $prestasi->update($request->all());
        return redirect('/prestasi')->with('sukses','Data berhasil diedit');
    }

    public function delete($id){
        $prestasi = \App\Prestasi::find($id);
        $prestasi -> delete($prestasi);
        return redirect('/prestasi')->with('sukses','Data berhasil dihapus');
    }
}
