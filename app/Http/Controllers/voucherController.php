<?php

namespace App\Http\Controllers;

use App\voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class voucherController extends Controller
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
        
        $datas = voucher::get();
        // $datas = voucher::orderBy('publish', 'asc')->get();
        return view('voucher.index', compact('datas'));
    }
    public function updatePublishStatus(Request $request)
    {
        $id = $request->id;
        $vouchers = voucher::findOrFail($id);

        // Toggle the publish status
        $vouchers->publish = $vouchers->publish === 'ya' ? 'tidak' : 'ya';

        $vouchers->save();
        // dd($voucher);

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

        return view('voucher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $voucher = new voucher;           
            $voucher->nama             = $request->input('nama');
            $voucher->discount             = $request->input('discount');
            // $voucher->ket        = $request->input('ket');
            $voucher->publish   = $request->input('publish');      
            $voucher->save();
        return redirect()->route('voucher')->with('sukses', 'Data voucher Berhasil Ditambah');

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

        $data = voucher::findOrFail($id);

        return view('voucher/show', compact('data'));
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
        $voucher = voucher::findOrFail($id);
    
        return view('voucher/edit', compact('voucher'));

    
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
        
        $voucher = voucher::find($id);
        $voucher->nama             = $request->input('nama');
        $voucher->discount             = $request->input('discount');
        // $voucher->ket        = $request->input('ket');
        $voucher->publish   = $request->input('publish');            
        $voucher->update();

        // $data->cover = $cover;
        // $data->save();


        // // alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('voucher/index')->with('sukses', 'Data voucher Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    
    {
        voucher::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('voucher')->with('sukses', 'Data voucher Berhasil Dihapus');
    }
}
