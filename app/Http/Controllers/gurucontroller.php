<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class gurucontroller extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    public function guru() {
        $halaman = 'guru';
        $guru_list = Guru::all();
        return view('guru.index', compact('halaman', 'guru_list'));
    }
    public function create() {
        $halaman = 'guru';
        $guru_list = Guru::all();
        return view('guru.create', compact('halaman'));
    }
    public function store(Request $request) {
        // Guru::create($request->all());
        $guru = new Guru;
        $guru->nip = $request->nip;
        $guru->nama_siswa = $request->nama_guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->id_kelas = $request->id_kelas;
        if($request->hasFile('avatar'))
        {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
        
        }
        return redirect('guru');
        
    }
    public function show($id) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.show', compact('halaman', 'guru'));
    }
    public function edit($id) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('halaman', 'guru'));
    }

    public function update($id, Request $request)
    {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        $guru->nip = $request->nip;
        $guru->nama_guru = $request->nama_guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        if($request->hasFile('avatar'))
        {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
        
        }
        $guru->save();
        return redirect('guru');
    }

    public function delete($id){
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect('guru');
    }
    
}
