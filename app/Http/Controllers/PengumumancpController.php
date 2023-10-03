<?php

namespace App\Http\Controllers;

use App\Pengumumancp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PengumumancpController extends Controller
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

        $datas = Pengumumancp::get();
        return view('pengumumancp.index', compact('datas'));
    }
    public function updatePublishStatus(Request $request)
    {
        $id = $request->id;
        $pengumumancp = Pengumumancp::findOrFail($id);

        // Toggle the publish status
        $pengumumancp->publish = $pengumumancp->publish === 'ya' ? 'tidak' : 'ya';

        $pengumumancp->save();
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

        return view('pengumumancp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
            $pengumumancp = new Pengumumancp;
            
            $pengumumancp->nama             = $request->input('nama');
         
            $pengumumancp->tutup             = $request->input('tutup');
            $pengumumancp->link             = $request->input('link');
            // $pengumumancp->ket        = $request->input('ket');
            $pengumumancp->publish   = $request->input('publish');      
            $pengumumancp->save();
        return redirect()->route('pengumumancp')->with('sukses', 'Data pengumumancp Berhasil Ditambah');

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

        $data = Pengumumancp::findOrFail($id);

        return view('pengumumancp/show', compact('data'));
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
        $pengumumancp = Pengumumancp::findOrFail($id);
    
        return view('pengumumancp/edit', compact('pengumumancp'));

    
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
        $pengumumancp = Pengumumancp::where('id', $id)->first();
        // $pengumumancp->foto          = $nama_image;
        $pengumumancp->nama             = $request->input('nama');
        $pengumumancp->tutup             = $request->input('tutup');
        $pengumumancp->link             = $request->input('link');
        $pengumumancp->publish   = $request->input('publish');   
        // $pengumumancp->harga             = $request->input('harga');   
     
        $pengumumancp->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('pengumumancp/index')->with('sukses', 'Data pengumumancp Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        Pengumumancp::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('pengumumancp')->with('sukses', 'Data pengumumancp Berhasil Dihapus');
    }

}
