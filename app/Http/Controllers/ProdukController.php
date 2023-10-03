<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProdukController extends Controller
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

        $datas = Produk::get();
        return view('Produk.index', compact('datas'));
    }

    public function updatePublishStatus(Request $request)
    {
        $id = $request->id;
        $Produk = Produk::findOrFail($id);

        // Toggle the publish status
        $Produk->publish = $Produk->publish === 'ya' ? 'tidak' : 'ya';

        $Produk->save();
        // dd($mentor);

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

        return view('produk.create');
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
            $Produk = new Produk;
            $Produk->foto          = $nama_image;
            $Produk->nama_produk             = $request->input('nama_produk');
            $Produk->produk             = $request->input('produk');
            $Produk->harga1             = $request->input('harga1');
            $Produk->harga             = $request->input('harga');
            // $Produk->ket        = $request->input('ket');
            $Produk->publish   = $request->input('publish');      
            $Produk->save();
        return redirect()->route('produk')->with('sukses', 'Data Produk Berhasil Ditambah');

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

        $data = Produk::findOrFail($id);

        return view('produk/show', compact('data'));
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
        $Produk = Produk::findOrFail($id);
    
        return view('produk/edit', compact('Produk'));

    
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
        $Produk = Produk::where('id', $id)->first();
        // $Produk->foto          = $nama_image;
        $Produk->nama_produk             = $request->input('nama_produk');
        $Produk->produk             = $request->input('produk');
        $Produk->publish   = $request->input('publish');   
        $Produk->harga1             = $request->input('harga1');   
        $Produk->harga             = $request->input('harga');   
        if($request->file('foto') == "")
        {
           $Produk->foto =$Produk->foto;
        } 
        else
        {
        
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("foto_upload/", $fileName);
           $Produk->foto = $fileName;
        }
        $Produk->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('produk/index')->with('sukses', 'Data Produk Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        Produk::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('produk')->with('sukses', 'Data Produk Berhasil Dihapus');
    }
}

