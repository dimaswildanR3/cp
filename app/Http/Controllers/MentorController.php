<?php

namespace App\Http\Controllers;

use App\Mentor;
use App\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MentorController extends Controller
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
        
        $datas = Mentor::orderBy('publish', 'asc')->get();
        return view('mentor.index', compact('datas'));
    }
    public function updatePublishStatus(Request $request)
    {
        $id = $request->id;
        $mentors = Mentor::findOrFail($id);

        // Toggle the publish status
        $mentors->publish = $mentors->publish === 'ya' ? 'tidak' : 'ya';

        $mentors->save();
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
        $datasi = jurusan::get();
        return view('mentor.create',compact('datasi'));
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
            $mentor = new Mentor;
            $mentor->foto          = $nama_image;
            $mentor->nama             = $request->input('nama');
            $mentor->kelas             = $request->input('kelas');
            $mentor->id_jurusan             = $request->input('id_jurusan');
            // $mentor->ket        = $request->input('ket');
            $mentor->publish   = $request->input('publish');      
            $mentor->save();
        return redirect()->route('mentor')->with('sukses', 'Data mentor Berhasil Ditambah');

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

        $data = mentor::findOrFail($id);

        return view('mentor/show', compact('data'));
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
        $mentor = Mentor::findOrFail($id);
    
        return view('mentor/edit', compact('mentor'));

    
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
        
        $mentor = Mentor::find($id);
        $mentor->nama             = $request->input('nama');
        $mentor->kelas             = $request->input('kelas');
        $mentor->id_jurusan             = $request->input('id_jurusan');
        // $mentor->ket        = $request->input('ket');
        $mentor->publish   = $request->input('publish');      
        if($request->file('foto') == "")
        {
           $mentor->foto =$mentor->foto;
        } 
        else
        {
        
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("foto_upload/", $fileName);
           $mentor->foto = $fileName;
        }
        $mentor->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('mentor/index')->with('sukses', 'Data mentor Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        Mentor::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('mentor')->with('sukses', 'Data mentor Berhasil Dihapus');
    }
}
