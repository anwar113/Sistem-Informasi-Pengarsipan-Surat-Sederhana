<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Spatie\Backtrace\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


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
        Alert::success('Sukses', 'Data berhasil disimpan');
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
        Alert::success('Sukses', 'Data berhasil dihapus');
    return redirect('/');
    }
    public function cari(Request $request){
        $data=Surat::where('judul','like','%'.$request->cari.'%')->get();
        // dd($data->count());
        return view('cari',['surat'=>$data,'cari'=>$request->cari]);
    }
    
    public function ubah($id){
        
        // dd($su->no_surat);
        return view('edit',['surat'=>Surat::find($id)]); 
    }

    public function update(Request $request,$id){
        $data=Surat::find($id);
        $validated=$request->validate([
            'no_surat'=>'unique:surats,no_surat|max:15',
            'file'=>'mimes:pdf',
        ]);

        if ($request->hasFile('file')) {
            $dokumen=$request->file('file');
            $nama_dokumen='DOC'.date('Tmdhis').'.'.$request->file->extension() ;
            $dokumen->move('dokumen/',$nama_dokumen);
            $data->file=$nama_dokumen;
        }
        
        $data->no_surat=$request->no_surat;
        $data->kategori=$request->kategori;
        $data->judul=$request->judul;
        $data->save();
        

        if (isset($exist_file)&& file_exists($exist_file)) {
            unlink($exist_file);
        }

        Alert::success('Sukses', 'Data berhasil disimpan');
        return redirect('lihat_'.$data->id);
    }
}