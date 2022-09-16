<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SuratControllers extends Controller
{
    public function index(){
        // dd(Surat::all());
        return view('home',['surat'=> Surat::all()]);
    }
    public function store(Request $request){
    
        $validated=$request->validate([
            'no_surat'=>'unique:surats,no_surat',
            'file'=>'mimes:pdf',
        ]);
        $dokumen=$request->file('file');
        $nama_dokumen='DOC'.date('Tmdhis').'.'.$request->file->extension() ;
        $dokumen->move('dokumen/',$nama_dokumen);
        Surat::create([
            'no_surat'=>$request->no_surat,
            'kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'file'=>$nama_dokumen,
        ]);
        return redirect ('/');
    }   
    public function lihat($id){
        return view('lihat',['surat'=>Surat::find($id)]);
    }
    public function hapus($id){
        $data=Surat::find($id);
        if($data->featured_image && file_exists(storage_path('app/public/' . $data->featured_image)))
            {
                \Storage::delete('public/'.$data->featured_image);
            }
        $data->delete();
    return redirect('/');
    }
    public function cari(Request $request){
        $data=Surat::where('judul','like','%'.$request->cari.'%')->get();
        // dd($data->count());
        return view('home',['surat'=>$data,'cari'=>$request->cari]);
    }
    
    public function ubah($id){
        dd(Surat::find($id));
        return view('unggah',['surat',Surat::find($id)]);
    }
}