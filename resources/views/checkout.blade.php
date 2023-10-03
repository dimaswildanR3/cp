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
  <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  
  <!-- Vendor CSS Files -->
   <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
    <style>
       /* Gaya untuk header, footer, dan body */
/* Gaya untuk header, footer, dan body */
/* Gaya untuk header, footer, dan body */
.hallobeli {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Gaya untuk container checkout */
.checkout-container {
    max-width: 800px;
    width: 100%;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* Gaya untuk header checkout */
.checkout-header {
    background-color: #170197;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.checkout-header h1 {
    margin: 0;
    padding: 0;
    font-size: 24px;
}

/* Gaya untuk body checkout */
.checkout-body {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

/* Gaya untuk rincian produk */
.product-summary {
    flex: 1;
    padding: 10px;
}

.product-summary h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.product-item {
    display: flex;
    margin-bottom: 20px;
}

.product-item img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 20px;
}

.product-details h3 {
    font-size: 18px;
    margin: 0;
    color: #333;
}

.product-details p {
    margin: 5px 0;
    color: #777;
}

/* Gaya untuk informasi pembeli */
.customer-info {
    flex: 1;
    padding: 10px;
}

.customer-info h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

label {
    font-size: 16px;
    margin-bottom: 5px;
    display: block;
}

input[type="text"],
input[type="email"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #170197;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

/* Gaya tambahan sesuai kebutuhan */

/* Gaya tambahan sesuai kebutuhan */

    </style>
    <title></title>
</head>
@extends('layout.header')
@section('content')
<body>
    <div class="hallobeli">
    <div class="checkout-container">
        <div class="checkout-header">
            <h1>Checkout</h1>
        </div>
        <div class="checkout-body">
            <div class="product-summary">
                <h2>Rincian Produk</h2>
                <ul>
                    <li class="product-item">
                        <img src="produk1.jpg" alt="Produk 1">
                        <div class="product-details">
                            <h3>Produk 1</h3>
                            <p>Rp 100.000</p>
                            <p>Jumlah: 1</p>
                        </div>
                    </li>
                    <li class="product-item">
                        <img src="produk2.jpg" alt="Produk 2">
                        <div class="product-details">
                            <h3>Produk 2</h3>
                            <p>Rp 50.000</p>
                            <p>Jumlah: 2</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="customer-info">
                <h2>Informasi Pembeli</h2>
                <form action="proses_checkout.php" method="POST">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="alamat">Alamat Pengiriman:</label>
                    <textarea id="alamat" name="alamat" rows="4" required></textarea>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="metode_pembayaran">Metode Pembayaran:</label>
                    <select id="metode_pembayaran" name="metode_pembayaran">
                        <option value="transfer_bank">Transfer Bank</option>
                        <option value="kartu_kredit">Kartu Kredit</option>
                    </select>

                    <input type="submit" value="Proses Pembayaran">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection