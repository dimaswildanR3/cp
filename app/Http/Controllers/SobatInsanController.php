<?php

namespace App\Http\Controllers;

use App\SobatInsan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SobatInsanController extends Controller
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
        
        $datas = SobatInsan::all();
        return view('SobatInsan.index', compact('datas'));
    }
    
    public function updatePublishStatus(Request $request)
    {
        $id = $request->id;
        $SobatInsans = SobatInsan::findOrFail($id);

        // Toggle the publish status
        $SobatInsans->publish = $SobatInsans->publish === 'ya' ? 'tidak' : 'ya';

        $SobatInsans->save();
        // dd($SobatInsan);

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

        return view('SobatInsan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image           = $request->file('foto');
        //mengambil nama image
        $nama_image      = $image->getClientOriginalName();
        
        //memindahkan cover ke folder tujuan
        $image->move('foto_upload',$image->getClientOriginalName());
            $SobatInsan = new SobatInsan;
            $SobatInsan->foto          = $nama_image;
            $SobatInsan->nama             = $request->input('nama');
            $SobatInsan->teks             = $request->input('teks');
            // $SobatInsan->ket        = $request->input('ket');
            $SobatInsan->publish   = $request->input('publish');      
            $SobatInsan->save();
        return redirect()->route('SobatInsan')->with('sukses', 'Data SobatInsan Berhasil Ditambah');

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

        $data = SobatInsan::findOrFail($id);

        return view('SobatInsan/show', compact('data'));
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
        $SobatInsan = SobatInsan::findOrFail($id);
    
        return view('SobatInsan/edit', compact('SobatInsan'));

    
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
        
        $SobatInsan = SobatInsan::find($id);
        $SobatInsan->update([
            'publish' => 'tidak'
            ]);
        // $SobatInsan->publish   =  $request->input('publish');   
        // $SobatInsan->foto          = $nama_image;
        $SobatInsan->nama             = $request->input('nama');
        $SobatInsan->teks             = $request->input('teks');   
        if($request->file('foto') == "")
        {
           $SobatInsan->foto =$SobatInsan->foto;
        } 
        else
        {
        
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("foto_upload/", $fileName);
           $SobatInsan->foto = $fileName;
        }
        $SobatInsan->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('SobatInsan/index')->with('sukses', 'Data SobatInsan Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        SobatInsan::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('SobatInsan')->with('sukses', 'Data SobatInsan Berhasil Dihapus');
    }
}
