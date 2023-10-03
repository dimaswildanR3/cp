@extends('layouts.master')

@section('content')

<!-- Pastikan CKEditor script dimuat dengan benar -->


    {{-- <link rel="stylesheet" href="/public/ckeditor/skins/moono-lisa/editor.css"> --}}

<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        <!-- Periksa apakah ada pesan kesalahan JavaScript di konsol -->
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
        <form action="/pengertianProduk/store" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Tambah Pengertian Produk </h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="judul">Judul</label>
                    <input value="{{old('judul')}}" name="judul" type="text" class="form-control" id="judul" placeholder="Judul" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <!-- Tambahkan textarea untuk CKEditor -->
                    <label for="isi">Isi</label>
                    <p>centang hijau bisa copy disini ✅</p>
                    <textarea name="isi" id="isi"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">{{old('isi')}}</textarea>

                    <label for="ket">Keterangan</label>
                    <input value="{{old('ket')}}" name="ket" type="text" class="form-control" id="ket" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    
                    <label for="id_produk">Nama Produk</label>
                    <select name="id_produk" class="form-control my-1 mr-sm-2 bg-light" id="id_produk" oninput="setCustomValidity('')">
                        <option value="">-- Pilih Nama Produk --</option>
                        @foreach($datasi as $ibui)
                            @if(!empty($ibui->produk))
                                <option value="{{$ibui->id}}">{{$ibui->produk}}</option>
                            @endif
                        @endforeach
                    </select>
                    
                    <label for="foto">Foto</label>
                    <input value="{{old('foto')}}" name="foto" type="file" class="form-control" id="foto" placeholder="foto" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>

<!-- Inisialisasi CKEditor -->
<script>
    CKEDITOR.replace('editor1', {
        height: 400, // Mengatur tinggi editor ke 400 piksel
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] }
        ]
    });
</script>

@endsection
