<?php

namespace App\Http\Controllers;

use App\PengertianProduk;
use App\Produk;
use App\User;
use App\voucher;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class tampilanController extends Controller
{
    public function index(){
        
        return view('index');
    }
    public function ktk(){
        
        return view('Kelas-Tugas-Kuliah');
    }
    public function bmj(){
        
        return view('bimbangan-mata-kuliah-jurusan');
    }
    public function tentang(){
        
        return view('tentang');
    }
    public function bso(){
        
        return view('bimbingan-skripsi-online');
    }
    public function kontak(){
        
        return view('kontak');
    }
    public function kti(){
        
        return view('kti');
    }
    public function skripsi(){
        
        return view('skripsi');
    }
    public function nonaktif(){
        
        return view('nonaktif');
    }
    public function pembelian(){
        
        return view('pembelian');
    }
    public function checkout($idpengertian,$id){
        $pengertian = \App\PengertianProduk::where('id_produk', $idpengertian)->get();
        $User = \App\User::where('id', $id)->get();
        $Users = $User->first();
     $datas = \App\jurusan::get();
        // dd($Users);    

  
        return view('/checkout', compact('Users', 'pengertian','User','datas'));
        // return view('checkout');
    }

    public function okk()
    {
        // return view('auths.login');
        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'Siswa') {
                return redirect()->back()->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiKeuangan') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiSurat') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasPerpus') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            }
        }
        return view('header.blade.php');
    }
    
    public function pembayaran($idpengertian, $id, Request $request)
    {
        $pengertian = \App\PengertianProduk::where('id_produk', $idpengertian)->get();
        $User = \App\User::where('id', $id)->get();
        $Users = $User->first();
        $Produk = \App\Produk::where('produk', $idpengertian)->first();
        $datas = \App\jurusan::get();
    
        // Ambil nama voucher dari request atau set default ke kosong jika tidak ada
        $namaVoucher = $request->input('nama_voucher', '');
    
        // Cari voucher berdasarkan nama yang telah diterima
        $voucher = \App\voucher::where('nama', $namaVoucher)->where('publish', 'ya')->first();
    
        return view('/pembayaran', compact('Users', 'pengertian', 'User', 'datas', 'Produk', 'voucher'));
    }
    
        public function Pengertian($id_produk)
        {
            $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->get();
            $id_pesdik_login = $pengertian->first();
    
            $Produk = \App\Produk::where('produk', $id_produk)->first();
            $voucher = \App\voucher::get();
            // $data_pesdik = $data->last();
    
            //Mencari Data Tagihan Per Siswa
            // $pesdik_pilih = \App\Anggotarombel::select('rombel_id')->where('pesdik_id', $id)->get();
            // $pesdik_jk = \App\Pesdik::select('jenis_kelamin')->where('id', $id)->first();
            // $pilih_jk =  \App\Tagihan::whereIn('jenis_kelamin', $pesdik_jk)->orWhere('jenis_kelamin', 'Semua')->get();
    
            // $id_tagihan_terbayar = \App\TransaksiPembayaran::select('tagihan_id')->where('pesdik_id', $id)->get();
            // $tagihan_siswa = \App\absen::where('id_pesdik', $id) ->whereDate('tanggal', now())->get();
            // dd($tagihan_siswa);
            // $tagihan_terbayar = \App\TransaksiPembayaran::where('pesdik_id', $id)
            //     ->leftJoin('tagihan', function ($join) {
            //         $join->on('transaksipembayaran.tagihan_id', '=', 'tagihan.id');
            //     })
            //     ->orderByRaw('transaksipembayaran.rombel_id DESC')->get();
            // $jumlah_tagihan = \App\Tagihan::whereIn('rombel_id', $pesdik_pilih)
            //     ->WhereIn('jenis_kelamin', $pilih_jk)->sum('nominal');
            // $jumlah_terbayar =  \App\TransaksiPembayaran::where('pesdik_id', $id)
            //     ->sum('jumlah_bayar');
    
            return view('/pembelian', compact('id_pesdik_login', 'pengertian','Produk','voucher'));
            // return view('/pembelian', compact('id_pesdik_login', 'data_pesdik', 'tagihan_siswa', 'tagihan_terbayar', 'jumlah_tagihan', 'jumlah_terbayar','pesdik'));
        }
        
        public function validateVoucher(Request $request)
        {
            $voucherCode = $request->input('voucher_code');
            $voucher = voucher::where('nama', $voucherCode)->first();
        
            if ($voucher) {
                // Jika kode voucher benar, kembalikan respons JSON dengan informasi voucher
                return response()->json(['message' => 'Kode voucher valid.','voucher' => $voucher]);
            } else {
                // Jika kode voucher salah, kembalikan respons JSON dengan pesan kesalahan
                return response()->json(['message' => 'Kode voucher tidak valid.']);
            }
        }
        

}
