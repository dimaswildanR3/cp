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
        <form action="/voucher/{{$voucher->id}}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Data voucher</h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="nama">nama</label>
                    <input value="{{$voucher->nama}}" name="nama" type="text" class="form-control" id="nama" placeholder="Nama" >
                    <label for="discount">discount</label>
                    <input value="{{$voucher->discount}}" name="discount" type="text" class="form-control" id="nama" placeholder="Nama" >
                    {{-- <label for="ket">Keterangan</label>
                    <input value="{{$voucher->ket}}" name="ket" type="text" class="form-control" id="nama" placeholder="Nama" > --}}
                    <label for="publish">Status</label>
                    <select name="publish" id="publish" class="form-control bg-light" required oninvalid="this.setCustomValidity('kelasan ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                        <option value="{{$voucher->publish}}">{{$voucher->publish}}</option>
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                    {{-- <label for="foto">foto</label>
                    <input value="{{$voucher->foto}}" name="foto" type="file" class="form-control" id="nama" placeholder="{{$voucher->foto}}" >
                    <img src="{{ asset('foto_upload/'.$voucher->foto) }}" alt="" title=""style="height: 150px;width:100px;"> --}}
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/voucher/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection