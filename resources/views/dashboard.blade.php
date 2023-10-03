@extends('layouts.master')
@section('content')
@if(session('warning'))
<div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
  <h5><i class="fas fa-info"></i> Peringatan :</h5>
  {{session('warning')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="row">
  <div class="container-fluid">
    <!-- Info boxes -->
    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PetugasAdministrasiSurat'  || auth()->user()->role == 'user')
    <div class="row">
      <div class="flex-fill col-md-3" style="padding: 4px 4px 4px 4px">
        <div class="info-box md-3">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Mentor</span>
            <span class="info-box-number">
              {{DB::table('mentor')->count()}}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class=" flex-fill col-md-3" style="padding: 4px 4px 4px 4px">
        <div class="info-box md-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-envelope-open"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Produk</span>
            <span class="info-box-number">{{DB::table('produk')->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="flex-fill col-md-3" style="padding: 4px 4px 4px 4px">
        <div class="info-box md-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pembelian</span>
            <span class="info-box-number">{{DB::table('beli')->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class=" flex-fill" style="padding: 4px 4px 4px 4px">
        <div class="info-box md-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Pengguna</span>
            <span class="info-box-number">{{DB::table('users')->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    @endif
    <!-- /.row -->
  </div>
  @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PetugasAdministrasiKeuangan')
  <div class="col-md-9">
    
  </div>
  <div class="col-md-3">
    {{-- <section class="content card" style="padding: 15px 15px 0px 15px "> --}}
      {{-- <div class="box"> --}}
        {{-- <div class="row">
          <div class="col">
            <h4><i class="nav-icon fas fa-dollar-sign my-0 btn-sm-1"></i> Keuangan Sekolah</h4>
            <hr>
          </div>
        </div> --}}
        {{-- <div class="card-body p-0"> --}}
          <?php
          // $jumlah_pengeluaran = DB::table('pengeluaran')
          //   ->sum('pengeluaran.jumlah');
          // // $jumlah_pemasukan = DB::table('pemasukan')
          //   ->sum('pemasukan.jumlah');
          ?>
          {{-- <ul class="products-list product-list-in-card pl-1 pr-1">
            <a href="javascript:void(0)" class="product-title">Jumlah Pemasukan</a>
            <h5>@currency($jumlah_pemasukan),00</h5>
            <hr>
          </ul> --}}
          {{-- <ul class="products-list product-list-in-card pl-1 pr-1">
            <a href="javascript:void(0)" class="product-title">Jumlah Pengeluaran</a>
            <h5> @currency($jumlah_pengeluaran),00</h5>
            <hr>
          </ul> --}}
          {{-- <ul class="products-list product-list-in-card pl-1 pr-1">
            <a href="javascript:void(0)" class="product-title">Saldo</a>
            <h5>@currency($jumlah_pemasukan-$jumlah_pengeluaran),00</h5>
            <hr />
          </ul> --}}
        {{-- </div> --}}
      {{-- </div> --}}
    {{-- </section> --}}
  </div>
  @endif
 


  @endsection