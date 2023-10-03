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
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        } */

        .luar {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* background-color: #fff; */
            /* border: 1px solid #ddd; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            border-radius: 5px;
        }
        .pembayaran {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* background-color: #fff; */
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1, h2 {
            text-align: center;
            color: #007bff;
        }

        .step-pembayaran {
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

        /* Styling for the registration form */
        .registration-form {
            /* background-color: #f9f9f9; */
            /* border: 1px solid #ddd; */
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .registration-form h3 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .registration-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .registration-form select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath d='M4.293 3.293a1 1 0 0 0 1.414 1.414L6 4.414l.793.793a1 1 0 0 0 1.414-1.414l-2-2a1 1 0 0 0-1.414 0l-2 2a1 1 0 1 0 1.414 1.414L6 4.414l.793.793a1 1 0 0 0 1.414-1.414l-2-2a1 1 0 0 0-1.414 0L2.293 3.293a1 1 0 0 0 0 1.414z' fill='%23999'%3E%3C/path%3E%3C/svg%3E");
            background-position: right center;
            background-repeat: no-repeat;
            background-size: 12px;
        }

        .registration-form button {
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
            margin-top: 20px;
        }

        .registration-form button:hover {
            background-color: #0056b3;
        }

        /* Styling for additional info */
        .info {
            color: red;
            margin-top: -10px;
            /* text-align: center; */
            font-size: 12px;
        }
        .wokewoke {
    justify-content: center;
    align-items: center;
 
    padding: 20px; /* Add padding for spacing around the content */

        }

        /* Styles untuk popup */
        .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Latar belakang semi-transparan */
    z-index: 9999; /* Indeks z yang tinggi untuk menutup elemen lain */
}

/* Styles untuk popup */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    z-index: 10000; /* Indeks z yang lebih tinggi dari overlay */
}

/* Styles untuk tombol tutup */
.close-button {
    background-color: #ff0000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    margin-top: 10px;
}


.pesanan-checkout {
            /* border: 1px solid #ddd; */
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 5px;
            margin-top: 20px;
        }

        .pesanan-checkout h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .order-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .order-details {
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .order-details .item {
            margin-bottom: 10px;
        }

        .order-details .item span {
            font-size: 16px;
            color: #333;
            display: block;
        }

        .order-details .item span:first-child {
            font-weight: bold;
        }

        .order-details .total {
            font-size: 18px;
            font-weight: bold;
            color: #e74c3c;
        }

        .order-total {
            text-align: right;
        }

        .order-total span {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            display: block;
            margin-top: 10px;
        }

        #checkoutButton {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #checkoutButton:hover {
            background-color: #c0392b;
        }
        #checkoutButton1 {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #checkoutButton1:hover {
            background-color: #c0392b;
        }

        @media (max-width: 768px) {
    /* Style untuk popup pada perangkat seluler */
    #bankAccountPopup {
        width: 90%;
        max-width: 320px;
        margin: 0 auto;
        padding: 20px;
    }
    
    /* Style untuk teks dan tombol pada perangkat seluler */
    #bankAccountPopup h3 {
        font-size: 1.5rem;
    }
    
    #bankAccountPopup p {
        font-size: 1rem;
    }
    
    #uploadProofButton {
        font-size: 1rem;
        padding: 10px 20px;
    }
}
    </style>
    <title>Pendaftaran paket 1</title>
</head>
@extends('layout.header')
@section('content')
<body>
  <div class="luar">
    <div class="pembayaran">
        <div class="step-pembayaran">
            <div class="step left">1</div>
            <div class="separator"style=" border: 1px solid #007bff;     background-color: #007bff; "></div>
            <div class="step center">2</div>
            <div class="separator"></div>
            <div class="step right">3</div>
        </div>

        <!-- Registration Form -->
        <div class="registration-form">
            <h3>Checkout</h3>
            <form>
                <label for="name">Nama Lengkap</label>
                <input value="{{$Users->name}}"class="form-control" name="name" type="text" id="name" placeholder="Nama" >

                <label for="email">Email</label>
                <input value="{{$Users->email}}" type="email" id="email" name="email" placeholder="Email">
                <div class="info">*Pastikan email kamu sudah benar</div>
              
                {{-- <label for="ttl">Tanggal Lahir</label>
                <input  value="{{$Users->ttl}}"type="text" id="ttl" name="ttl" placeholder="Tanggal Lahir"> --}}

                {{-- <label for="asal">Alamat</label>
                <input type="text"value="{{$Users->asal}}" id="asal" name="asal" placeholder="Asal"> --}}

                <label for="nomer">Nomor Telepon</label>
                <input type="text"value="{{$Users->nomer}}" id="nomer" name="nomer" placeholder="Nomor Telepon">

                <label for="kampus">Kampus</label>
                <input type="text"value="{{$Users->kampus}}" id="kampus" name="kampus" placeholder="Kampus">

                {{-- <label for="jurusan">Jurusan</label>
                <input type="text"value="{{$Users->jurusan}}" id="jurusan" name="jurusan" placeholder="Jurusan"> --}}

                <label for="semester">Semester</label>
                <input type="text" value="{{$Users->semester}}"id="semester" name="semester" placeholder="Semester">
             
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskelamin">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <label for="semester">Judul skripsi</label>
                <input type="text" value="{{$Users->semester}}"id="semester" name="semester" placeholder="Semester">
                <label for="semester">Problem Selama bimbingan (Dosen)</label>
                <input type="text" value="{{$Users->semester}}"id="semester" name="semester" placeholder="Semester">


                <label for="id_jurusan">Jurasan yang akan di pilih</label>
                <select id="jurasanSelect">
                    <option value="">-- Pilih Jurasan --</option>
                    @foreach($datas as $ibui)
                    <option value="{{$ibui->id}}" data-publish="{{$ibui->publish}}" data-nama="{{$ibui->nama}}">{{$ibui->nama}}</option>
                    @endforeach
                </select>
                <button type="submit"  style="display: none;">Lanjut</button>            
                
            </form>
            {{-- <div class="info">Registrasi akun Satu Persen diperlukan untuk memilih jadwal mentoring.</div> --}}
        </div>
        <div id="popup" class="popup">
            <!-- Konten popup di sini -->
            <p>Ini adalah popup yang muncul ketika 'Publish' adalah 'Tidak'.</p>
            <button id="chatButton">Chat via WhatsApp</button>
            <button id="closePopup" class="close-button">Tutup</button>
        </div>
      
        <!-- Inside your existing HTML structure -->
        <div class="pesanan-checkout" style="display: none;">
   <div class="order-header">
            <h3>Detail Pesanan</h3>
        </div>
        <div class="order-details">
            <div class="item">
                <span>Program: {{$Produk->produk}}</span>
                <span>Paket: {{$Produk->produk}}</span>
                <span>Harga: ${{ number_format($Produk->harga, 2) }}</span>
                <div class="order-summary">
                    @if ($voucher->discount ??'')
                        <span>Discount: {{ $voucher->discount }}%</span>
                        <span class="total">Total: ${{ number_format($Produk->harga - ($Produk->harga * ($voucher->discount / 100)), 2) }}</span>
                    </div>
                </div>
                <div class="order-total">
                    <span>Total Harga: ${{ number_format($Produk->harga - ($Produk->harga * ($voucher->discount / 100)), 2) }}</span>
                    <button id="checkoutButton">Checkout</button>
                </div>
                @else
                <span class="total">Total: ${{ number_format($Produk->harga, 2) }}</span>
                </div>
                </div>
                <div class="order-total">
                    <span>Total Harga: ${{ number_format($Produk->harga, 2) }}</span>
                    <button id="checkoutButton">Checkout</button> <!-- Ubah ID ini -->
                </div>
                @endif
                
</div>

<div id="bankAccountPopup" class="popup" style="display: none;">
    <h3>Informasi Rekening Bank</h3>
    <p>Silakan transfer total harga ke rekening berikut:</p>
    <p>Nama Bank: Bank ABC</p>
    <p>Nomor Rekening: 1234567890</p>
    {{-- <button id="closeBankAccountPopup" class="close-button">Tutup</button> --}}
    <button id="uploadProofButton">Upload Bukti Pembayaran</button>
</div>

<!-- Add the payment proof upload popup -->
<div id="paymentProofPopup" class="popup" style="display: none;">
    <h3>Upload Bukti Pembayaran</h3>
    <p>Silakan unggah bukti pembayaran Anda di sini:</p>
    <input type="file" id="paymentProofFile" accept="image/*">
    <button id="submitPaymentButton">Kirim</button>
</div>
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
</div>
</body>
<script>
       $(document).ready(function() {
            // Fungsi untuk menampilkan popup
            function showPopup() {
                $("#overlay").show();
                $("#popup").show();
                // Mencegah scroll pada halaman
                $("body").css("overflow", "hidden");
            }

            // Fungsi untuk menyembunyikan overlay dan popup
            function hidePopup() {
                $("#overlay").hide();
                $("#popup").hide();
                // Mengembalikan scroll pada halaman
                $("body").css("overflow", "auto");
            }

            // Ketika tombol "Tutup" di popup diklik
            $("#closePopup").click(function() {
                // Sembunyikan overlay dan popup
                hidePopup();
            });

            // Ketika tombol "Chat via WhatsApp" diklik
            $("#chatButton").click(function() {
                // Ambil data-publish dari opsi yang dipilih
                var selectedOption = $("#jurasanSelect").find(":selected");
                var publishValues = selectedOption.data("nama");

                // Ganti nomor WhatsApp di bawah ini sesuai dengan nomor yang Anda inginkan
                var phoneNumber = "6285156416448"; // Ganti dengan nomor WhatsApp yang sesuai

                // Pesan yang ingin Anda kirimkan
                var message = "Halo, saya ingin berbicara tentang " + publishValues + ".";

                // Buat URL WhatsApp dengan nomor dan pesan yang diinginkan
                var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

                // Buka jendela WhatsApp baru dengan pesan yang sudah diisi
                window.open(whatsappURL);
            });

            function checkInputs() {
    var allInputsFilled = true;

    // Periksa semua input teks yang memiliki atribut "required" apakah sudah diisi
    $("form input[required]").each(function() {
        if ($(this).val() === "") {
            allInputsFilled = false;
            return false; // Hentikan perulangan jika ada satu input yang kosong
        }
    });

    // Periksa apakah pilihan jurusan telah dipilih
    var selectedJurusan = $("#jurasanSelect").val();
    if (selectedJurusan === "") {
        allInputsFilled = false;
    }

    // Aktifkan tombol "Lanjut" jika semua input dan pilihan jurusan telah diisi
    if (allInputsFilled) {
        $("button[type='submit']").show();
    } else {
        $("button[type='submit']").hide();
    }
}

// Panggil fungsi checkInputs saat input berubah atau halaman dimuat
$("form input[required], #jurasanSelect").on("input change", checkInputs);
checkInputs(); // Panggil saat halaman dimuat


    // Panggil fungsi checkInputs saat input berubah atau halaman dimuat
    $("form input[required]").on("input", checkInputs);
    checkInputs(); // Panggil saat halaman dimuat

            // Ketika nilai select berubah
            $("#jurasanSelect").change(function() {
                // Ambil data-publish dari opsi yang dipilih
                var selectedOption = $(this).find(":selected");
                var publishValue = selectedOption.data("publish");

                // Cek apakah publish adalah "tidak" atau tidak ada nilai
                if (publishValue === "tidak") {
                    // Tampilkan popup jika publish adalah "tidak"
                    showPopup();
                } else {
                    // Sembunyikan popup jika publish tidak ada
                    hidePopup();
                }
            });
            $(document).ready(function() {
    // ...






    
    // Ketika tombol "Lanjut" di form diklik
    $("form").submit(function(e) {
        e.preventDefault(); // Mencegah pengiriman form standar
        
        // Tampilkan elemen "Pesanan Anda"
        $(".pesanan-checkout").show();

        // Sembunyikan tombol "Lanjut"
        $("button[type='submit']").hide();

        // Lakukan tindakan lain yang Anda butuhkan, seperti mengambil dan menampilkan detail pesanan
    });

    // ...
});



$("#checkoutButton").click(function() {
        // Display the bank account information popup
        $("#bankAccountPopup").show();
    });

    // When the "Upload Bukti Pembayaran" button is clicked within the bank account popup
    $("#uploadProofButton").click(function() {
        // Hide the bank account information popup
        $("#bankAccountPopup").hide();

        // Display the payment proof upload popup
        $("#paymentProofPopup").show();
    });

    // When the "Kirim" button in the payment proof upload popup is clicked
    $("#submitPaymentButton").click(function() {
        // You can add your logic here to handle the submission of the payment proof.
        // For example, you can send the uploaded file to the server for processing.

        // After handling the submission, you can hide the payment proof upload popup.
        $("#paymentProofPopup").hide();
    });

        });
  </script>
</html>
@endsection