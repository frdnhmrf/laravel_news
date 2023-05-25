<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BeritaController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Berita::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Berita::paginate(5);
           
            Session::put('halaman_url', request()->fullUrl());
        }

        
        return view('databerita',compact('data'));
    }

    public function tambahberita(){
        $data =Berita::all();
        return view('tambahdata',compact('data'));
    }

    public function insertdata(Request $request){
        //dd($request->all());
        $this->validate($request,[
                'judul' => 'required',
                'deskripsi' => 'required',
         ]);

        $data = Berita ::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoberita/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('berita')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        
        $data = Berita::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Berita::find($id);
        $data->update($request->all());
        if(session('halaman_url')){
            return Redirect(session('halaman_url'))->with('success',' Data Berhasil Di Update');
        }

        return redirect()->route('berita')->with('success',' Data Berhasil Di Update');

    }

    public function delete($id){
        $data = Berita::find($id);
        $data->delete();
        return redirect()->route('berita')->with('success',' Data Berhasil Di Hapus');
    }

    public function home(){
        $data = Berita::all();
        return view('home',compact('data'));
    }
}
