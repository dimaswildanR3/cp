@extends('layouts.master')

@section('content')
<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        @if(session('sukses'))
        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-check"></i> Sukses :</h5>
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session('warning'))
        <div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-info"></i> Informasi :</h5>
            {{session('warning')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="callout callout-danger alert alert-danger alert-dismissible fade show">
            <h5><i class="fas fa-exclamation-triangle"></i> Peringatan :</h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form action="/pengertianProduk/{{$PengertianProduk->id}}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Data Pengerian Produk</h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="judul">Judul</label>
                    <input value="{{$PengertianProduk->judul}}" name="judul" type="text" class="form-control" id="nama" placeholder="Nama" >
                    <label for="isi">Isi</label>
                    <input value="{{$PengertianProduk->isi}}" name="isi" type="text" class="form-control" id="nama" placeholder="Nama" >
                    <label for="ket">Keterangan</label>
                    <input value="{{$PengertianProduk->ket}}" name="ket" type="text" class="form-control" id="nama" placeholder="Nama" >
                     <label for="publish">Pilih Nama Produk </label>
                    <select name="id_produk" class="form-control my-1 mr-sm-2 bg-light" id="id_produk"  oninput="setCustomValidity('')">
                        <option value="{{$PengertianProduk->id_produk}}">{{$PengertianProduk->id_produk}}</option>
                        @foreach($datasi as $ibui)
                            @if(!empty($ibui->produk))
                                <option value="{{$ibui->id}}">{{$ibui->produk}}</option>
                            @endif
                        @endforeach
                    </select>
                    {{-- <label for="publish">Status</label>
                    <select name="publish" id="publish" class="form-control bg-light" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                        <option value="{{$PengertianProduk->publish}}">{{$PengertianProduk->publish}}</option>
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select> --}}
                    <label for="foto">foto</label>
                    <input value="{{$PengertianProduk->foto}}" name="foto" type="file" class="form-control" id="nama" placeholder="{{$PengertianProduk->foto}}" >
                    <img src="{{ asset('foto_upload/'.$PengertianProduk->foto) }}" alt="" title=""style="height: 150px;width:100px;">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/pengertianProduk/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection