<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
    
        public function __construct()
        {
            $this->middleware('auth');
        }
    
        public function index()
        {
            
            if(Auth::user()->level == 'admin') {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
            }
    
            $datas = Siswa::get();
            return view('siswa.index', compact('datas'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            if(Auth::user()->level == 'admin') {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
            }
    
            return view('siswa.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
                $siswa = new Siswa;
                $siswa->nis             = $request->input('nis');
                $siswa->nama            = $request->input('nama');
                $siswa->alamat          = $request->input('alamat');
                // $siswa->penerbit        = $request->input('penerbit');
                $siswa->Jenis_kelamin   = $request->input('Jenis_kelamin');
                $siswa->save();
            return redirect()->route('siswa')->with('sukses', 'Data Siswa Berhasil Ditambah');
    
        }
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            if(Auth::user()->level == 'admin') {
                    Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                    return redirect()->to('/'); 
            }
    
            $data = Siswa::findOrFail($id);
    
            return view('siswa/show', compact('data'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Request $request,$id)
        {   
            if(Auth::user()->level == 'admin') {
                    Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                    return redirect()->to('/');
            }
            $siswa = Siswa::findOrFail($id);
        
            return view('siswa/edit', compact('siswa'));
    
        
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,$id)
        {
            $siswa = Siswa::where('id', $id)->first();
            $siswa->nis             = $request->input('nis');
            $siswa->nama            = $request->input('nama');
            $siswa->alamat          = $request->input('alamat');
            // $siswa->penerbit        = $request->input('penerbit');
            $siswa->Jenis_kelamin   = $request->input('Jenis_kelamin');      
            $siswa->update();
    
            // $data->cover = $cover;
            // $data->save();
    
    
            // // alert()->success('Berhasil.','Data telah diubah!');
            return redirect()->to('siswa/index')->with('sukses', 'Data Siswa Berhasil Diubah');;
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function delete($id)
        
        {
            Siswa::findOrFail($id)->delete();
            // alert()->success('Berhasil.','Data telah dihapus!');
            return redirect()->route('siswa')->with('sukses', 'Data Siswa Berhasil Dihapus');
        }
    }