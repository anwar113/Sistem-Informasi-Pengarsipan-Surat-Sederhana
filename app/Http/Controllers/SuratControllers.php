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
    
        $validated=$request->validate([
            'pdf'=>'mimes:pdf',
            'no_surat'=>'unique:Surat,no_surat',
            'pdf'=>'mimes:pdf',
        ]);
        if($request->file('pdf')){
            $fileName = $request->file('pdf')->store('files','public');
        }
        Surat::create([
            'no_surat'=>$request->no_surat,
            'kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'file'=>$fileName,
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
        return view('home',['surat'=>$data]);
    }
    
}