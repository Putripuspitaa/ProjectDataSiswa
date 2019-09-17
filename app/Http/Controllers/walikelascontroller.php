<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Guru;
use App\Kelas;

class walikelascontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function walikelas(){
            $halaman = 'walikelas';
            $walikelas_list= Walikelas::all();
            return view('walikelas.index', compact('halaman' , 'walikelas_list'));
        }

    public function create(){
            $halaman = 'walikelas';
            $guru = Guru::all();
            $kelas = Kelas::all();
            return view('walikelas.create', compact('halaman', 'guru', 'kelas'));
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $walikelas->avatar = $request->file('avatar')->getClientOriginalName();
            $walikelas->save();
        return redirect('walikelas');
    }

    public function store(Request $request){
        Walikelas::create($request->all());
        return redirect('walikelas');
    }

    public function show($id)
    {
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        return view('walikelas.show' , compact('halaman' , 'walikelas'));
    }

    public function edit($id)
    {
        $halaman = 'walikelas';
        $walikelas= Walikelas::findOrFail($id);
        return view('walikelas.edit' , compact('halaman' , 'walikelas'));
    }

    public function update($id, Request $request)
    {
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->id = $request->id;
        $walikelas->nama_guru = $request->nama_guru;
        $walikelas->nama_kelas = $request->nama_kelas;
        // $walikelas->tanggal_lahir = $request->tanggal_lahir;
        // $walikelas->jenis_kelamin = $request->jenis_kelamin;
        
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $walikelas->avatar = $request->file('avatar')->getClientOriginalName();
         }
        $walikelas->save();
        return redirect('walikelas');
    }

    public function delete($id)
    {
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->delete();
        return redirect('walikelas');
    }
}