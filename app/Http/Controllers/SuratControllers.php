<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratControllers extends Controller
{
    public function index(){
        // dd(Surat::all());
        return view('home',['surat'=> Surat::all()]);
    }
    public function store(Request $request){
        $fileName;
        $validated=$request->validate([
            'file'=>'mimes:pdf'
        ]);
        if($request->file('file')){
            $fileName = $request->file('file')->store('files','public');
        }

        Surat::create([
            'no_surat'=>$request->no_surat,
            'kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'file'=>$fileName,
        ]);

        return route('home')->withSuccess('Data Berhasil Ditambahkan');

    }
    
}