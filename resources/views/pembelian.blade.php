<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Class Program</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/logo2.png" rel="icon">
  <link href="assets/img/logo/logo2.png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
  <!-- Include Bootstrap CSS and JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">


  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .containerr {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h1, h2 {
        text-align: center;
        color: #007bff;
    }

    .step-containerr {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .step {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        line-height: 30px;
        margin: 0 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .separator {
        flex-grow: 1;
        height: 1px;
        background-color: #999;
    }

    .left {
        margin-left: 0;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }

    .right {
        margin-right: 0;
    }

    .package {
        background-color: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
        margin-top: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
    }

    .package-details {
        flex: 1;
        padding: 20px;
    }

    .package h3 {
        color: #007bff;
        margin-bottom: 10px;
    }

    .features {
        list-style: none;
        padding: 0;
    }

    .features li {
        padding: 5px;
    }

    .price {
        text-align: right;
        padding: 20px;
        background-color: #f9f9f9;
        color: #007bff;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        font-size: 18px;
    }

    .price del {
        color: #999;
    }

    .select-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s ease;
        border-radius: 5px;
        display: block;
        width: 100%;
    }

    .select-button:hover {
        background-color: #0056b3;
    }
    .wokewoke {
justify-content: center;
align-items: center;

padding: 20px; /* Add padding for spacing around the content */

    }
    #loginPopup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 999;
        width: 300px; /* Adjust the width as needed */
        text-align: center;
    }

    #loginPopup p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    #loginPopup a {
        text-decoration: none;
        color: #007BFF;
        font-weight: bold;
        margin-right: 10px;
    }

    #loginPopup button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    #loginPopup button:hover {
        background-color: #0056b3;
    }
    
</style>

</head>

@extends('layout.header')
@section('content')
<body>

<body>
    <div class="wokewoke">
    <div class="containerr">
        <h1>Pendaftaran paket {{ $id_pesdik_login->id_produk }}</h1>
        <div class="step-containerr">
            <div class="step left">1</div>
            <div class="separator"></div>
            <div class="step center">2</div>
            <div class="separator"></div>
            <div class="step right">3</div>
        </div>
        {{-- <h2>Pilih Daftar Paket</h2> --}}
        {{-- <p>Pilih yang sesuai kebutuhan kamu</p> --}}
        <div class="package">
            <div class="package-details">
                <h3>Paket: {{ $id_pesdik_login->id_produk }} </h3>
                {{-- <p>Waktu: 75 Menit</p>
                <p>Metode: Via Voice Call/Chat</p> --}}
                <ul class="features">
                    <li>{!! $id_pesdik_login->isi !!}</li>
                   
                    {{-- <li>✔ Tes Minat Karier</li>
                    <li>✔ PDF Interpretasi Hasil Tes</li>
                    <li>✔ Lembar Kerja (Worksheet) yang didesain khusus untuk membantu permasalahanmu</li> --}}
                </ul>
                {{-- <p>*pilih  </p> --}}
            </div>
            <div class="price">
                <p><del style="color: #999;">Rp{{ $Produk->harga1 }}</del> <div style="font-size: 22px; color: #000;font-weight:bold">Rp{{ $Produk->harga }}</div></p>
                @auth
                <a id="paket-link" href="{{ route('pembayaran', [
                    'id_produk' => $id_pesdik_login->id_produk, 
                    'id' => auth()->id(),
                    'nama_voucher' => isset($response->voucher) ? $response->voucher->nama : ''
                ]) }}">
                    <button class="select-button">PILIH PAKET</button>
                </a>
            @else
                <a href="#" onclick="showLoginPopup()"><button class="select-button">PILIH PAKET</button></a>
            @endif
            </div>
           
        </div><br>
      
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <form method="post" action="{{ route('validateVoucher') }}" id="voucher-form">
            @csrf
            <input type="text" name="voucher_code" id="voucher_code" placeholder="Kode Voucher">
            <input type="submit" value="Submit">
        </form>
        <div id="voucher-result">
            <!-- Hasil validasi atau pesan kesalahan akan ditampilkan di sini -->
        </div>
        <div id="voucher-code-display">
            <!-- Kode voucher akan ditampilkan di sini setelah validasi -->
        </div>
       <!-- Kode JavaScript yang telah dimodifikasi -->
       <script>
        $(document).ready(function() {
            $('#voucher-form').on('submit', function(e) {
                e.preventDefault();
                var voucherCode = $('#voucher_code').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('validateVoucher') }}",
                    data: { _token: "{{ csrf_token() }}", voucher_code: voucherCode },
                    success: function(response) {
                        $('#voucher-result').html(response.message);
                        if (response.voucher) {
                            // Tampilkan informasi voucher jika ada
                            // $('#voucher-code-display').html('<p>Kode Voucher: ' + response.voucher.nama + '</p>');
                            // $('#voucher-code-display').append('<p>Deskripsi: ' + response.voucher.description + '</p>');

                            // Ubah atribut href dari elemen <a> dengan id "paket-link"
                            var newHref = "{{ route('pembayaran', [
                                'id_produk' => $id_pesdik_login->id_produk, 
                                'id' => auth()->id(),
                                'nama_voucher' => ''
                            ]) }}"; // Mulai dengan URL dasar

                            if (response.voucher.nama) {
                                // Jika ada nama voucher, tambahkan nama_voucher ke URL
                                newHref += '?nama_voucher=' + response.voucher.nama;
                            }

                            // Set atribut href dengan URL yang baru
                            $('#paket-link').attr('href', newHref);
                        } else {
                            $('#voucher-code-display').html(''); // Kosongkan jika tidak ada kode voucher
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });

        function showLoginPopup() {
            var popup = document.getElementById('loginPopup');
            popup.style.display = 'block';
        }

        function closeLoginPopup() {
            var popup = document.getElementById('loginPopup');
            popup.style.display = 'none';
        }
    </script>
</body>

@endsection
</html>

