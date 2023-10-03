<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class jurusanController extends Controller
{
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
        
        $datas = jurusan::get();
        // $datas = jurusan::orderBy('publish', 'asc')->get();
        return view('jurusan.index', compact('datas'));
    }
    public function updatePublishStatus(Request $request)
    {
        $id = $request->id;
        $jurusans = jurusan::findOrFail($id);

        // Toggle the publish status
        $jurusans->publish = $jurusans->publish === 'ya' ? 'tidak' : 'ya';

        $jurusans->save();
        // dd($jurusan);

        return redirect()->back()->with('sukses', 'Status publish berhasil diubah.');
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

        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
            $jurusan = new jurusan;
         $jurusan->nama             = $request->input('nama');
          
            // $jurusan->ket        = $request->input('ket');
            $jurusan->publish   = $request->input('publish');      
            $jurusan->save();
        return redirect()->route('jurusan')->with('sukses', 'Data jurusan Berhasil Ditambah');

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

        $data = jurusan::findOrFail($id);

        return view('jurusan/show', compact('data'));
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
        $jurusan = jurusan::findOrFail($id);
    
        return view('jurusan/edit', compact('jurusan'));

    
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
        
        $jurusan = jurusan::find($id);
        $jurusan->nama             = $request->input('nama');
        // $jurusan->kelas             = $request->input('kelas');
        // $jurusan->ket        = $request->input('ket');
        $jurusan->publish   = $request->input('publish');      
       
        $jurusan->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('jurusan/index')->with('sukses', 'Data jurusan Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        jurusan::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('jurusan')->with('sukses', 'Data jurusan Berhasil Dihapus');
    }
}

