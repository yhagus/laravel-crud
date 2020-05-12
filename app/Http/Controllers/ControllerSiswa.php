<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSiswa extends Controller
{
    //
    public function index()
    {
    	$data_siswa = \App\Siswa::all();
    	return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {
    	\App\Siswa::create($request->all());
    	return redirect('siswa')->with('sukses','Data berhasil diinputkan');
    }
    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }
    public function update(Request $request,$id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data telah diupdate');
    }
    public function delete(Request $request,$id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil dihapus');
    }
    public function home()
    {
        return view('home');
    }
    
}
