<?php

namespace App\Http\Controllers;

use App\Rekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RekomendasiController extends Controller
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
        
        $datas = Rekomendasi::all();
        return view('rekomen.index', compact('datas'));
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
            

        return view('rekomen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cover           = $request->file('cover');
        //mengambil nama cover
        $nama_cover      = $cover->getClientOriginalName();
        
        //memindahkan cover ke folder tujuan
        $cover->move('foto_upload',$cover->getClientOriginalName());
            $rekomen = new Rekomendasi;
            $rekomen->cover          = $nama_cover;
            $rekomen->judul             = $request->input('judul');
            $rekomen->isi             = $request->input('isi');
            $rekomen->link             = $request->input('link');
            // $rekomen->ket        = $request->input('ket');
            // $rekomen->publish   = $request->input('publish');      
            $rekomen->save();
        return redirect()->route('rekomen')->with('sukses', 'Data rekomen Berhasil Ditambah');

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

        $data = Rekomendasi::findOrFail($id);

        return view('rekomen/show', compact('data'));
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
        $rekomen = Rekomendasi::findOrFail($id);
    
        return view('rekomen/edit', compact('rekomen'));

    
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
        
        $rekomen = Rekomendasi::find($id);
      
        // $rekomen->publish   =  $request->input('publish');   
        // $rekomen->foto          = $nama_image;
        $rekomen->judul             = $request->input('judul');
        $rekomen->isi             = $request->input('isi');   
        // $rekomen->cover             = $request->input('cover');   
        if($request->file('cover') == "")
        {
           $rekomen->cover =$rekomen->cover;
        } 
        else
        {
        
            $file       = $request->file('cover');
            $fileName   = $file->getClientOriginalName();
            $request->file('cover')->move("foto_upload/", $fileName);
           $rekomen->cover = $fileName;
        }
        $rekomen->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('rekomen/index')->with('sukses', 'Data rekomen Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        Rekomendasi::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('rekomen')->with('sukses', 'Data rekomen Berhasil Dihapus');
    }

}
