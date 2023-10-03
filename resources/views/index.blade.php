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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Include Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slenco:wght@400&display=swap">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
</head>
@extends('layout.header')
@section('content')

{{-- @section('/index') --}}
<body>
{{-- <audio id="myAudio" autoplay >
    <source src="https://github.com/petanikode/belajar-html/raw/master/audio/Ngoni.mp3" type="audio/mpeg">
    Browsermu tidak mendukung tag audio, upgrade donk!
</audio> --}}

<script>
    // Mengambil elemen audio
    var audio = document.getElementById("myAudio");

    // Mengatur volume audio menjadi 20%
    audio.volume = 0.2;

    // Mengikat peristiwa "loadedmetadata" untuk memutar audio saat siap
    audio.addEventListener("loadedmetadata", function() {
        audio.play();
    });
</script>


  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      
        <a href="#" class="facebook"><i style="padding:10px;">Tentang</i>|</a>
        <a href="#" class="facebook"><i style="padding:10px;">FAQ</i>|</a>
        <a href="#" class="facebook"><i class="bi bi-youtube"style="padding:10px;"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"style="padding:10px;"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-tiktok"style="padding:10px;"></i></i></a>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"style="margin-right:-35px;"><a href="https://mail.google.com/"></i>classprogram.id@gmail.com</a>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <!-- <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">sip Program<span>.</span></a></h1>
      Uncomment below if you prefer to use an image logo
      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Program Kelas</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>            
              <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
              <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
              <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Workshop</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>            
              <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
              <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
              <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Creatif Class</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>            
              <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
              <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
              <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#">Kelas Tugas Kuliah (KTK)</a></li>            
              <li><a class="nav-link scrollto" href="#">Bimbingan Mata Kuliah Jurusan(BMJ)</a></li>
              <li><a class="nav-link scrollto" href="#">Bimbingan Skripsi Online(BSO)</a></li>
              <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir(KPK)</a></li>
            </ul>
          </li>
        
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      .navbar

    </div>
  </header> -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <span><img src="assets/img/logo/p.jpeg" class="foto" style="float:right;width:50%" alt=""></span>
        {{-- <h1 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 30px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 31.4px;">Sukses & Bertalenta</h1><br> --}}
        
        {{-- <h2 style="font-family: Cambria, Georgia, serif; font-size: 15px; font-style: italic; font-weight: bold; line-height: 30px; color: black; padding: 10px 40px; border-radius: 5px;">"Bersama class program semua bisa lulus kuliah"</h2> --}}

        <div class="judulawal">
        <h3>Bersama Class Program</h3>
      </div> 
      <div class="judulkedua">
        <h3>Semua Bisa </h3>
        <h3 style="margin-top: 10px">Lulus Kuliah</h3>
      </div> <br>
      
        <h2 style="font-size:17px;line-height: 1.7;  font-family: 'Rosa Sans', sans-serif;">Bimbingan belajar online perkuliahan dan persiapan karir dengan sistem kenaikan pertama di Indonesia yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh Mentor yang ahli di bidangnya.</h2>
        

        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto" style="border-radius: 40px;margin-top:5px;  font-family:  Cambria, Georgia, serif;;"><strong>Daftar Sekarang</strong> </a>
        </div>
    
        <div id="counts" class="counts">
          <div class="container">
            <div class="count-boxes">
              <div class="count-box">
                <div class="left-content">
                  <span style="color:#2B65EC;style: color: #2B65EC; /* Warna teks */
                  font-family: 'Rosa Sans', sans-serif; /* Contoh penggunaan Times New Roman yang sering dianggap mewah */
                  font-size: 28px; /* Sesuaikan ukuran font dengan preferensi Anda */
                  font-weight: bold; /* Atur ketebalan teks jika perlu */">2979+</span>
                </div>
                <div class="right-content">
                  <p style="color:#2B65EC;  font-family:'Rosa Sans', sans-serif;font-size:15px">Sobat Insans</p>
                </div>
              </div>
              
              <div class="count-separator"></div> <!-- Garis vertikal -->
      <div class="count-box">
        <div class="left-content">
          <span style="color:#2B65EC;style: color: #2B65EC; /* Warna teks */
          font-family: 'Rosa Sans', sans-serif; /* Contoh penggunaan Times New Roman yang sering dianggap mewah */
          font-size: 28px; /* Sesuaikan ukuran font dengan preferensi Anda */
          font-weight: bold; /* Atur ketebalan teks jika perlu */">101+</span>
        </div>
        <div class="right-content">
          <p style="color:#2B65EC;font-family:'Rosa Sans', sans-serif;;font-size:15px">Mentor Class Program</p>
        </div>
      </div>

      <div class="count-separator"></div>
      <div class="count-box">
        <div class="left-content">
            <span style="color:#2B65EC;style: color: #2B65EC; /* Warna teks */
          font-family: 'Rosa Sans', sans-serif; /* Contoh penggunaan Times New Roman yang sering dianggap mewah */
          font-size: 28px; /* Sesuaikan ukuran font dengan preferensi Anda */
          font-weight: bold; /* Atur ketebalan teks jika perlu */">23+</span>
        </div>
        <div class="right-content s">
          <p style="color:#2B65EC;   font-family: 'Slenco', sans-serif;font-size:15px">Kampus</p>
        </div>
      </div>

      <div class="count-separator"></div>
      <div class="count-box">
        <div class="left-content">
            <span style="color:#2B65EC;style: color: #2B65EC; /* Warna teks */
          font-family: 'Rosa Sans', sans-serif; /* Contoh penggunaan Times New Roman yang sering dianggap mewah */
          font-size: 28px; /* Sesuaikan ukuran font dengan preferensi Anda */
          font-weight: bold; /* Atur ketebalan teks jika perlu */">23+</span>
        </div>
        <div class="right-content">
          <p style="color:#2B65EC;   font-family: 'Slenco', sans-serif;font-size:15px">jurusan</p>
        </div>
      </div>
      <div class="count-separator"></div>
      <div class="count-box">
        <div class="left-content">
            <span style="color:#2B65EC;style: color: #2B65EC; /* Warna teks */
          font-family: 'Rosa Sans', sans-serif; /* Contoh penggunaan Times New Roman yang sering dianggap mewah */
          font-size: 28px; /* Sesuaikan ukuran font dengan preferensi Anda */
          font-weight: bold; /* Atur ketebalan teks jika perlu */">23+</span>
        </div>
        <div class="right-content">
          <p style="color:#2B65EC;   font-family: 'Slenco', sans-serif;font-size:15px">Total Program</p>
        </div>
      </div>
            </div>
          </div>
        </div>
        
        <div class=""style="margin-bottom:100px;"></div>
      </div>
    </section>
<!-- <audio hidden autoplay loop>
    <source src="https://github.com/petanikode/belajar-html/raw/master/audio/Ngoni.mp3" type="audio/mpeg">
    Browsermu tidak mendukung tag audio, upgrade donk!
</audio> -->
  <!-- <main id="main">
  <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        
      <div class="section-title">
          
          <h3>Terimakasih Telah Mempercayai Kami</h3>
          
        </div>

        <div class="row justify-content-center"> -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengikut di Sosial Media</p>
            </div>
          </div> -->
<!-- 
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="2979" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sobat Insans</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="101" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mentor Class Program</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
              <p>Program Kelas</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->
  

       <!-- ======= Featured Services Section ======= -->
       <section id="featured-services" class="featured-services">      
      <div class="container" data-aos="fade-up"style="">
 <div class="section-title judul">      
        </div>
        <div class="row justify-content-center">      


          
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">    
              {{-- <div class="label">
                <span class="label-text">Label</span>
              </div>          --}}
              <h4 class="title"><a href="">Bimbingan online dan privat secara intensif</a></h4>
              {{-- <p class="description">Sobat Insans akan mendapatkan fasilitas menarik berupa materi pembelajaran, modul, sertifikat, dan masih banyak lagi fasilitas lainnya.</p> --}}
             <div class="icon">
              </div>
              <img src="assets/img/about.jpg" alt="Deskripsi Gambar">
            </div>
          

          
          
          
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">     
              {{-- <div class="label">
                <span class="label-text">Label</span>
              </div>                  --}}
              <h4 class="title"><a href="">Durasi bimbingan hingga 4 jam</a></h4>
              {{-- <p class="description">Sobat Insans akan mendapatkan fasilitas menarik berupa materi pembelajaran, modul, sertifikat, dan masih banyak lagi fasilitas lainnya.</p> --}}
             <div class="icon">
              </div>
              <img src="assets/img/about.jpg" alt="Deskripsi Gambar">
            </div>
         

          
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">     
              {{-- <div class="label">
                <span class="label-text">Label</span>
              </div>                  --}}
              <h4 class="title"><a href=""> Mendapat kesempatan 24 kali pertemuan</a></h4>
              {{-- <p class="description">Sobat Insans akan mendapatkan fasilitas menarik berupa materi pembelajaran, modul, sertifikat, dan masih banyak lagi fasilitas lainnya.</p> --}}
             <div class="icon">
              </div>
              <img src="assets/img/about.jpg" alt="Deskripsi Gambar">
            </div>
        


         
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">        
              {{-- <div class="label"style="500px">
                <span class="label-text">Label</span>
              </div>        --}}
              <h4 class="title"><a href="">Fasilitas materi pembelajaran, sertifikat, dll </a></h4>
              {{-- <p class="description">Sobat Insans akan mendapatkan fasilitas menarik berupa materi pembelajaran, modul, sertifikat, dan masih banyak lagi fasilitas lainnya.</p> --}}
             <div class="icon">
              </div>
              <img src="assets/img/about.jpg" alt="Deskripsi Gambar">
            </div>
        



         
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">       
              {{-- <div class="label">
                <span class="label-text">Label</span>
              </div>              --}}
              <h4 class="title"><a href="">Harga aman di kantong mahasiswa</a></h4>
              {{-- <p class="description">Sobat Insans akanarik berupa materi pembelajaran, modul, sertifikat, dan masih banyak lagi fasilitas lainnya.</p> --}}
             <div class="icon">
              </div>
              <img src="assets/img/about.jpg" alt="Deskripsi Gambar">
            </div>
          


        </div>

      </div>
    </section>

    <section id="popup" class="popup">
      <div class="button-container">
        <span style="float: left; margin-left: 6%;"><img src="assets/img/logo/bintang.png" alt="bintang" style="width: 30px;margin-top:11px;margin-right:5px"></span>
        <h1 class="custom-text" style="font-family: 'Slenco', sans-serif; font-size: 25px; font-style: normal; font-weight: bold; margin-left: 5px;">Paket populer untuk kamu</h1>
        <button type="button" class="custom-button" data-toggle="modal" data-target="#tulis" aria-hidden="true" style="margin-top: 2px;">Tombol</button>
      </div>
      
  
  <div class="modal fade" id="tulis" tabindex="-1" role="dialog" aria-labelledby="tulisTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Selamat datang di Class Program Ingin cari produk untuk semester berapa?</h5>
                  <!-- <p>Ingin cari produk untuk semester berapa?</p> -->
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <div class="btn-group">
          <button type="button" class="btn btn-primary" style="border-radius: 50px;">1 dan 2</button>
          <button type="button" class="btn btn-primary" style="border-radius: 50px;">3 dan 4</button>
          <button type="button" class="btn btn-primary" style="border-radius: 50px;">5 dan 6</button>
          <!-- Tambahkan tombol-tombol produk lainnya sesuai kebutuhan -->
      </div>
      <!-- <hr> Garis pemisah -->
                  <p>Pilihan paket bimbingan skripsi</p>
                  <div class="btn-group">
                      <button type="button" class="btn btn-primary"style="  border-radius: 50px;">Pembuatan judul skripsi</button>
                      <button type="button" class="btn btn-primary"style="  border-radius: 50px;">Bab 1 sampai bab 3</button>
                  </div>
                  <div class="btn-group">
                      <button type="button" class="btn btn-primary"style="  border-radius: 50px;">Bab 4 sampai bab 5</button>
                      <button type="button" class="btn btn-primary"style="  border-radius: 50px;">Persiapan materi sempro dan sidang</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</section>


<section id="paketmentor" class="paketmentor">
  <div class="paketmentorbg">
  <h2 class="judul-tengah"style="margin-top:20px;">Paket Bimbingan Skripsi Per Sesi</h2>
  <div class="container">
      <div class="kotak">
          <div class="segitiga">
              <div class="kiri-atas">
                  <h3><span style="color:#000000">paket</span> <br> Super  </h3>
              </div>
              <div class="kanan-atas">
                  <p style="color:#0539b1">Harga: <span style="color:#0539b1"> Rp 18.000</span> per sesi</p>
              </div>
          </div>
          <div class="keterangan">
              <div class="teks-kiri"><span style="color:#0539b1">Konstultasi </span> Judul Skripsi</div>
              {{-- <div class="teks-kanan">Teks di kanan</div> --}}
              <div class="clear"></div>
          </div>
          <div class="deskripsi">
            <p>Materi: <br>              
              1. Bimbingan instensif pembuatan <br> &nbsp; &nbsp; judul skripsi.<br>
              2. Bimbingan pembuatan <br> &nbsp;  &nbsp; rumusan  masalah.  <br>
              3. Penentuan dasar teori <br> &nbsp; &nbsp; berdasarkan variabel.  <br>
              4. Waktu bimbingan 12x pertemuan  <br>
              5. Durasi bimbingan minimal 2 jam <br> &nbsp; &nbsp; maksimal 4 jam.</p>
            {{-- <p>Ini adalah kelas yang cocok untuk mereka yang ingin menikmati ketenangan dan kenyamanan selama menginap. Kelas 1A menyediakan fasilitas lengkap dan kenyamanan tingkat tinggi.</p> --}}
          </div>
      </div>

      <div class="kotak">
          <div class="segitiga">
            <div class="kiri-atas">
              <h3><span style="color:#000000"> paket </span> <br>Super</h3>
          </div>
          <div class="kanan-atas">
              <p style="color:#0539b1">Harga: <span style="color:#0539b1"> Rp20.000</span> per sesi</p>
          </div>
          </div>
          <div class="keterangan">
            <div class="teks-kiri"> <span style="color:#0539b1">Konsultasi </span> Proposal Skripsi</div>
              {{-- <div class="teks-kanan">Teks di kanan</div> --}}
              <div class="clear"></div>
          </div>
          <div class="deskripsi">
            <p>Materi: <br>              
              1. Bimbingan intensif pembuatan bab 4 <br> &nbsp;  &nbsp; sampai selesai.<br>
              2. Bimbingan hasil dan pembahasan penelitian.<br>
              3. Bimbingan pembuatan abstrak<br>
              4. Waktu bimbingan 24x pertemuan.<br>
              5. Durasi bimbingan per pertemuan <br> &nbsp;  &nbsp; minimal 2 jam maksimal 4 jam</p>
          </div>
      </div>

      <div class="kotak">
          <div class="segitiga">
            <div class="kiri-atas">
              <h3><span style="color:#000000">paket </span><br> Super</h3>
          </div>
          <div class="kanan-atas">
              <p style="color:#0539b1">Harga:<span style="color:#0539b1"> Rp 33.000 </span> per sesi</p>
          </div>
          </div>
          <div class="keterangan">
            <div class="teks-kiri"><span style="color:#0539b1">Konsultasi </span> Hasil dan Pembahasan</div>
              {{-- <div class="teks-kanan">Teks di kanan</div> --}}
              <div class="clear"></div>
          </div>
          <div class="deskripsi">
            <p>Materi: <br>
              1. Bimbingan intensif pembuatan bab 1-3.  <br>
              2. Bimbingan dalam pembuatan outline.   <br>
              3. Bimbingan Metode Penelitian.    <br>
              4. Waktu bimbingan 24x pertemuan.  <br>
              5. Durasi bimbingan per pertemuan <br> &nbsp;  &nbsp; minimal 2 jam maksimal 4 jam.</p>
          </div>
      </div>
  </div>
  <div class="tombol-pesan"style="margin-bottom:20px;">
    <button>Pesan Sekarang</button>
  </div>
</div>
</section>


<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing" >
  <div class="container" data-aos="fade-up">

    <div class="section-title judul">
      <!-- <h2>Produk</h2> -->
      <h3>Program</h3>
      <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
      
    </div>
    <div class="row">
        <!-- <img src="assets/img/garis.jpg" class="img-fluid" alt=""> -->
        
      <div class="pricingan col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
          <!-- <h3>Kelas Tugas Kuliah <br>(KTK)</h3> -->
          <h4><img src="assets/img/about.jpg" class="img-fluid" alt=""style=""></h4>
          <ul>
            <li><strong style="">Bimbingan Skripsi Online (BSO)</strong></li>
            <li style="">Program yang disediakan secara khusus untuk membantu mahasiswa dalam memahami langkah-langkah penyusunan dan pengerjaan skripsi dengan sistem mentoring atau pendampingan secara intensif dan privat.</li>
          </ul>
          <div class="btn-wrap">
            <a href="Kelas-Tugas-Kuliah" class="btn-buy ">Full Program</a>
          </div>
        </div>
      </div>

      <div class="pricingan col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="box featured">
          <!-- <h3>Bimbingan Mata Kuliah Jurusan (BMJ)</h3> -->
          <h4><img src="assets/img/about.jpg" class="img-fluid" alt=""style=""></h4>
          <ul>
            <li><strong style="">Bimbingan Mata Kuliah Jurusan (BMJ)</strong></li>
            <li style="">Program yang disediakan secara khusus untuk membantu mahasiswa dalam memahami materi matakuliah jurusan dengan sistem mentoring atau pendampingan secara intensif dan privat.</li>
          </ul>
          <div class="btn-wrap">
            <a href="bimbingan-skripsi-online" class="btn-buy">Full Program</a>
          </div>
        </div>
      </div>

      <div class="pricingan col-lg-2 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <!-- <h3>Bimbingan Skripsi Online <br> (BSO)</h3> -->
          <h4><img src="assets/img/about.jpg" class="img-fluid" alt=""style=""></h4>
          <ul>
          <li><strong style=""> Kelas Tugas Kuliah (KTK)</strong></li>
            <li style=""> Program yang disediakan secara khusus untuk membantu mahasiswa dalam langkah-langkah penyusunan tugas kuliah dengan sistem mentoring atau pendampingan secara intens dan kenaikan kelas.</li>
          </ul>
          <div class="btn-wrap">
            <a href="bimbangan-mata-kuliah-jurusan" class="btn-buy">Full Program</a>
          </div>
        </div>
      </div>

      <div class="pricingan col-lg-2 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <!-- <span class="advanced">Advanced</span> -->
          <!-- <h3>Kelas Persiapan Karir <br> (KPK)</h3> -->
          <h4><img src="assets/img/about.jpg" class="img-fluid" alt=""style=""></h4>
          <ul>
            <li><strong style="">Kelas Persiapan Karir (KPK)</strong></li>
            <li style="">Program yang disediakan secara khusus untuk membantu mahasiswa dalam mengasah softskill dan hardskill untuk terjun ke dunia kerja.</li>
            <!-- <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li>Massa ultricies mi</li> -->
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Full Program</a>
          </div>
        </div>
      </div>
      
      <div class="pricingan col-lg-2 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="500">
        <div class="box">
          <!-- <span class="advanced">Advanced</span> -->
          <!-- <h3>Kelas Persiapan Karir <br> (KPK)</h3> -->
          <h4><img src="assets/img/about.jpg" class="img-fluid" alt=""style=""></h4>
          <ul>
            <li><strong style="">Creative Class</strong></li>
            <li style="">program yang disediakan secara khusus untuk membantu mahasiswa dalam melatih kemampuan design grafis dengan sistem kenaikan kelas.</li>
            <!-- <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li>Massa ultricies mi</li> -->
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Full Program</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section ><!-- End Pricing Section -->

  
   
   <!-- HTML -->
   <section id="youtube" class="youtube">
    <div class="section-title judul">
      <!-- <h2>Produk</h2> -->
      <h3>Coba gratis Kelas Tugas Kuliah (KTK) sekarang!</h3>
      <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
      
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row skills-content">
            <div class="col-md-7 mx-auto">
                <div class="video-container">
                    <div class="video-wrapper">
                        <iframe width="500" height="280" src="https://www.youtube.com/embed/Az6oaKyQZt8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="video-description">
                        <p>Dapatkan Materi Menarik Lainnya</p>
                        <a href="#" class="join-button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section id="foto" class="foto">
<div class="section-title judul">

          <h3>Rekomendasi untuk anda</h3>
                   
        </div>
<div class="container">

    <div class="row">
      <div class="boxz">
        <div class="content">
          <img src="assets/img/about.jpg" alt="Gambar 1">
          <div class="text">
            <h2>Judul 1</h2>
            <p>Deskripsi 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      
      <div class="boxz">
        <div class="content">
          <img src="assets/img/about.jpg" alt="Gambar 2">
          <div class="text">
            <h2>Judul 2</h2>
            <p>Deskripsi 2 Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="boxz">
        <div class="content">
          <img src="assets/img/about.jpg" alt="Gambar 3">
          <div class="text">
            <h2>Judul 3</h2>
            <p>Deskripsi 3 Consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>
      </div>
      
      <div class="boxz">
        <div class="content">
          <img src="assets/img/about.jpg" alt="Gambar 4">
          <div class="text">
            <h2>Judul 4</h2>
            <p>Deskripsi 4 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
          </div>
        </div>
      </div>
      </div>
      
      
    <div class="row">
      <div class="boxz">
        <div class="content">
          <img src="assets/img/about.jpg" alt="Gambar 3">
          <div class="text">
            <h2>Judul 3</h2>
            <p>Deskripsi 3 Consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
        </div>
      </div>
      
      <div class="boxz">
        <div class="content">
          <img src="assets/img/about.jpg" alt="Gambar 4">
          <div class="text">
            <h2>Judul 4</h2>
            <p>Deskripsi 4 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
          </div>
        </div>
      </div>
      </div>            
    </div>
  </div>

</section> --}}
<section id="menu" class="menu">
  <div class="container" style="margin-top: -30px">
      <div class="content" id="content1">
          <div class="row">             
              <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                  <h3>WORKSHOP CLASS PROGRAM</h3>
                  <div class="content-selector  mb-4" style="margin-top: 10px;">
                      <button id="content1Btn" class="btn btn-primary active">Skripsi</button>
                      <button id="content2Btn" class="btn btn-primary">KTI</button>
                  </div>
                  <p class="fst-italic">
                    Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan skripsi dengan sistematika yang baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
                  </p>
                  <ul>
                    <li>
                      <span class="circle">
                        <span class="check">&#x2713;</span>
                      </span>
                      Mendapatkan pelatihan dalam penyusunan dan pembuatan skripsi oleh mentor yang ahli di bidangnya.
                    </li>
                    <li>
                      <span class="circle">
                        <span class="check">&#x2713;</span>
                      </span>
                      Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan e-sertifikat.
                    </li>
                </ul>
                  <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-primary btn-get-started scrollto">Lihat Selengkapnya</button>
                  </div>
              </div>
              <div class="gambare col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="" style="width: 100%;">
            </div>
          </div>
      </div>

      <div class="content" id="content2">
          <div class="row">             
              <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                  <h3>WORKSHOP CLASS PROGRAM</h3>
                  <div class="content-selector  mb-4" style="margin-top: 10px;">
                      <button id="content3Btn" class="btn btn-primary">Skripsi</button>
                      <button id="content4Btn" class="btn btn-primary">KTI</button>
                  </div>
                  <p class="fst-italic">
                    Workshop yang bertujuan untuk mendalami materi penyusunan serta pembuatan Karya Tulis Ilmiah (KTI) dengan baik dan benar. Berikut keuntungan yang bisa Sobat Insans dapatkan:
                  </p>
                  <ul>
                    <li>
                      <span class="circle">
                        <span class="check">&#x2713;</span>
                      </span>Mendapatkan pelatihan dalam penyusunan dan pembuatan Karya Tulis Ilmiah (KTI) oleh mentor yang ahli di bidangnya.</li>
                      <li>
                        <span class="circle">
                          <span class="check">&#x2713;</span>
                        </span>Mendapatkan fasilitas menarik berupa materi pembelajaran, video materi, dan e-sertifikat.</li>
                </ul>
                  <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-primary btn-get-started scrollto">Lihat Selengkapnya</button>
                  </div>
              </div>
              <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="" style="width: 100%;">
            </div>
          </div>
      </div>
  </div>

  <script src="script.js"></script>
</section>

  <!-- ======= Pricing Section ======= -->
 
   
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials"style="margin-top:10px;margin-bottom:30px;border-radius:5%; ">
    <div class="container" data-aos="zoom-in">
      <div class="section-title">
        {{-- <h2>Team</h2> --}}
        <h3>Mentor Profesional Class Program</h3>
        {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
      </div>
      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="centered-content">
              <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                    <img src="assets/img/test.png" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4 class="name">Sarah Jhonson</h4>
                    <span class="position">Product Manager</span>
                    <div class="line"></div>
                    <p class="achievement">3 Prestasi:</p>
                    <ul>
                      <li>Prestasi 1</li>
                      <li>Prestasi 2</li>
                      <li>Prestasi 3</li>
                    </ul>
                  </div>
                </div>
              </div>
          
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                    <img src="assets/img/test.png" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4 class="name">Sarah Jhonson</h4>
                    <span class="position">Product Manager</span>
                    <div class="line"></div>
                    <p class="achievement">3 Prestasi:</p>
                    <ul>
                      <li>Prestasi 1</li>
                      <li>Prestasi 2</li>
                      <li>Prestasi 3</li>
                    </ul>
                  </div>
                </div>
              </div>
          
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                    <img src="assets/img/test.png" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4 class="name">Sarah Jhonson</h4>
                    <span class="position">Product Manager</span>
                    <div class="line"></div>
                    <p class="achievement">3 Prestasi:</p>
                    <ul>
                      <li>Prestasi 1</li>
                      <li>Prestasi 2</li>
                      <li>Prestasi 3</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          <div class="swiper-slide">
            <div class="centered-content">
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                    <img src="assets/img/test.png" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4 class="name">Sarah Jhonson</h4>
                    <span class="position">Product Manager</span>
                    <div class="line"></div>
                    <p class="achievement">3 Prestasi:</p>
                    <ul>
                      <li>Prestasi 1</li>
                      <li>Prestasi 2</li>
                      <li>Prestasi 3</li>
                    </ul>
                  </div>
                </div>
              </div>
          
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                    <img src="assets/img/test.png" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4 class="name">Sarah Jhonson</h4>
                    <span class="position">Product Manager</span>
                    <div class="line"></div>
                    <p class="achievement">3 Prestasi:</p>
                    <ul>
                      <li>Prestasi 1</li>
                      <li>Prestasi 2</li>
                      <li>Prestasi 3</li>
                    </ul>
                  </div>
                </div>
              </div>
          
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <div class="member-img">
                    <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                    <img src="assets/img/test.png" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4 class="name">Sarah Jhonson</h4>
                    <span class="position">Product Manager</span>
                    <div class="line"></div>
                    <p class="achievement">3 Prestasi:</p>
                    <ul>
                      <li>Prestasi 1</li>
                      <li>Prestasi 2</li>
                      <li>Prestasi 3</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          {{-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item --> --}}

          {{-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item --> --}}

          {{-- <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item --> --}}

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->


  <!-- Tautkan ke file JavaScript Anda di sini -->

<section id="blockx" class="blockx">
  <div class="box">
    <h2>Batch 5 Telah Dibuka</h2>
    <!-- <p>Silakan masuk untuk melanjutkan.</p> -->
    <button class="button">
      <i class="bx bxl-youtube"></i> 
    </button>
    
  </div>
  <div class="background-box" ></div> <!-- Ini adalah kotak latar belakang -->
</section>

  </section>

    <section id="galeri" class="galeri">
      <div class="section-title "style=" font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  font-size: 48px;
  
  position: relative;
  letter-spacing: 2px;
  padding-bottom: 10px;
  text-shadow: 1px 2px 2px rgba(0, 0, 0, 0.1);">
          <!-- <h2>About</h2> -->
          <div class="left-align"style=" text-align: left;margin-left:50px">
            <h3>Janji Mentor <br> Untuk Sobat Insans</h3>
            <!-- Isi konten lainnya dapat ditambahkan di sini -->
          </div> 
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

    <div class="galeri-container">
    <div class="image-container">
    <img src="assets/img/clients/client-1.png" alt="Gambar 1" id="gambar" class="gambar-ukuran-tetap">
    
    </div>
    <div class="caption-container">
      <ul>
        <li><div class="caption caption-1" onclick="changeImage(0)">Menjadi pendengar setiamu</div></li>
        <li><div class="caption caption-1" onclick="changeImage(1)">Mendampingi kamu berproses</div></li>
        <li><div class="caption caption-1" onclick="changeImage(2)">Mengerti keluh kesahmu</div></li>
          <li><div class="caption caption-1" onclick="changeImage(3)">Menjaga Privasi</div></li>
            <li><div class="caption caption-1" onclick="changeImage(4)">Memotivasi kamu untuk lebih bahagia</div>        </li>
              <li><div class="caption caption-1" onclick="changeImage(5)"> Memudahkanmu di waktu sulit</div>       </li>
      </ul> 
    </div>
</div>

  </section>
  <!-- End Featured Services Section -->
    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about   section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div> -->
    <!-- </section> -->
<!-- End About Section -->
    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div> -->
    <!-- </section> -->
<!-- End Skills Section -->
    <!-- ======= Counts Section ======= -->
   

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div> -->
    <!-- </section> -->
<!-- End Clients Section -->
    <!-- ======= Services Section ======= -->
    


     <section id="konsultasi" class="konsultasi section-bg">
       <div class="container" data-aos="fade-up">
      <div class="section-title">
        {{-- <h2>Team</h2> --}}
        <h3> Alur bimbingan</h3>
        {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
      </div>
      
      <div class="team-slider">
        <div class="row" id="team-members">
          <!-- Anggota Tim 1 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="konsultasi-content">
              <div class="member-img">
                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>1. Pilih produk</h4>
                <br>
                {{-- <span>Chief Executive Officer</span> --}}
                <p>Memilih paket bimbingan sesuai dengan kebutuhanmu</p><br>
                {{-- <ul>
                  <li>Prestasi 1</li>
                  <li>Prestasi 2</li>
                  <li>Prestasi 3</li>
                </ul> --}}
              </div>
            </div>
          </div>
  
          <!-- Anggota Tim 2 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="konsultasi-content">
              <div class="member-img">
                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>2. Lakukan pendaftaran</h4>
                <br>
                {{-- <span>Product Manager</span> --}}
                <p>Mengisi formulir pendaftaran sesuai dengan data diri yang <br> lengkap dan benar</p>
                {{-- <ul>
                  <li>Prestasi 1</li>
                  <li>Prestasi 2</li>
                  <li>Prestasi 3</li>
                </ul> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="konsultasi-content">
              <div class="member-img">
                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>3. Selesaikan Pembayaran</h4>
                <br>
                {{-- <span>Product Manager</span> --}}
                <p>Mengirim bukti pembayaran dan menunggu verifikasi</p><br>
                {{-- <ul>
                  <li>Prestasi 1</li>
                  <li>Prestasi 2</li>
                  <li>Prestasi 3</li>
                </ul> --}}
              </div>
            </div>
          </div>
  
          <!-- Anggota Tim 3 -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="konsultasi-content">
              <div class="member-img">
                <!-- Ganti sumber gambar dengan gambar PNG yang memiliki latar belakang transparan -->
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>4. Mulai bimbingan</h4>
                <br>
                {{-- <span>CTO</span> --}}
                <p>Kamu siap melakukan bimbingan bersama mentor</p><br>
                {{-- <ul>
                  <li>Prestasi 1</li>
                  <li>Prestasi 2</li>
                  <li>Prestasi 3</li>
                </ul> --}}
              </div>
            </div>
          </div>           
        </div>
      </div>     
    </div>
  </section>
  
  {{-- <section id="faq" class="faq">
    <div class="faq-container">
      <div class="faq-text">
          <h2>Pertanyaan 1</h2>
          <p>Ini adalah jawaban dari pertanyaan pertama dalam FAQ Anda. Anda dapat menambahkan lebih banyak teks di sini sesuai kebutuhan.</p>
      </div>
      <div class="faq-image">
          <img src="gambar-pertanyaan-1.jpg" alt="Gambar Pertanyaan 1">
      </div>
  </div>

  <div class="faq-container">
      <div class="faq-text">
          <h2>Pertanyaan 2</h2>
          <p>Ini adalah jawaban dari pertanyaan kedua dalam FAQ Anda. Anda dapat menambahkan lebih banyak teks di sini sesuai kebutuhan.</p>
      </div>
      <div class="faq-image">
          <img src="gambar-pertanyaan-2.jpg" alt="Gambar Pertanyaan 2">
      </div>
  </div>


  </section> --}}
    <!-- ======= Team Section ======= -->
    <!-- <div class="horizontal-scroll-container"> -->

 
  

    <!-- End Team Section -->
   
    <section id="testibaru" class="testibaru section-bg">
      <div class="profile">
        <div class="comment">
            <div class="triangle"></div>
            <p>Ini adalah komentar yang akan Anda tambahkan di sini.</p>
        </div>
        <div class="gabung">
        <img class="profile-image" src="assets/img/kampus/3.png" alt="Gambar Profil"> <!-- Ganti dengan path gambar profil Anda -->
        <div class="profile-info">
            <h1>Nama Anda</h1>
            <p>Jurusan Anda</p>
          </div>
        </div>
    </div>
      </section>







      
    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
          <div class="row">
              <div class="col-xl-6">
                  <div class="section-title">
                      <h3>Paling Sering Ditanyakan</h3>
                  </div>
                  <ul class="faq-list" id="faq-list">
                      <li>
                          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1"> Apa itu Class Program?</div>
                          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Class Program adalah platform belajar online perkuliahan dan persiapan karir dengan sistem kenaikan kelas pertama di indonesia yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh mentor yang ahli di bidangnya.
                              </p>
                          </div>
                      </li>
  
                      <li>
                          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question"> Siapa saja yang bisa belajar di Class Program? </div>
                          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                   Class Program terbuka untuk umum, baik mahasiswa ataupun non-mahasiswa yang ingin belajar seputar perkuliahan dan persiapan karir.
                              </p>
                          </div>
                      </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"> Apa saja jenis program kelas yang tersedia di Class Program?</div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Program kelas terdiri atas 4 jenis yaitu Kelas Tugas Kuliah (KTK), Bimbingan Matakuliah Jurusan (BMJ), Bimbingan Skripsi Online (BSO), dan Kelas Persiapan Karir (KPK).
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Bagaimana cara memilih program kelas yang sesuai di Class Program?</div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Kelas Tugas Kuliah (KTK) diperuntukkan bagi sobat yang memerlukan bimbingan seputar tugas umum perkuliahan dengan sistem kenaikan kelas. Paket basic cocok untuk sobat yang ingin memahami tugas seputar penyusunan makalah, footnote dan endnote, jurnal, esai hingga materi karya tulis ilmiah yang umumnya ditemui pada semester 1-4. Sedangkan paket excellent diperuntukkan bagi sobat yang ingin memahami materi seputar metodologi penelitian dan skripsi yang umumnya ditemui pada semester 5 keatas. <br>

Bimbingan Mata Kuliah Jurusan (BMJ) cocok untuk sobat yang ingin mendalami materi mata kuliah yang ada di jurusan masing-masing dengan sistem pendampingan. Paket Bronze untuk semester 1-2, Paket emerald untuk semester 3-4 dan paket diamond untuk semester 5-6. <br>

Bimbingan Skripsi Online (BSO) diperuntukkan bagi sobat yang sedang menyusun tugas akhir atau skripsi dengan sistem mentoring. Paket Silver membimbing dalam pembuatan judul skripsi, paket gold membimbing dalam pembuatan proposal skripsi, paket platinum membimbing hasil dan pembahasan skripsi, dan paket diamond membimbing simulasi sempro atau sidang skripsi. <br>

Kelas Persiapan Karir (KPK) diperuntukkan bagi sobat yang ingin mengasah soft skill dan hard skill untuk terjun di dunia kerja. <br>

                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana cara bimbingan di Class Program?</div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sobat Insan perlu melakukan registrasi terlebih dahulu. Lengkapi data diri, kemudian login menggunakan akun yang telah terdaftar. Setelah itu memilih program yang tersedia sesuai dengan kebutuhan sobat insan. Lalu lakukan pembayaran sesuai pesanan dan Sobat insan akan diarahkan ke Minma untuk mendapatkan mentor. Setelah semua proses selesai, Sobat Insans siap untuk belajar di Class Program.

                  </p>
                </div>
              </li>

              {{-- <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Bagaimana sistem belajar di Class Program?</div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sistem belajar Class Program menggunakan sistem pendampingan yang sepenuhnya dilaksanakan secara online dengan metode Live teaching dan group sharing. Proses belajar turut dilengkapi  berbagai fasilitas pendukung pembelajaran seperti flash card, Video Pembelajaran, dan lainnya.
                  </p>
                </div>
              </li> --}}
            </ul>
            <button id="showMoreBtn" class="btn ">Baca Selengkapnya</button>
        </div>
        <div class="col-xl-6">
            <div class="image-container">
                <img src="assets/img/g.png" alt="Deskripsi gambar" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</section>
<!-- End Frequently Asked Questions Section -->
    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div> -->
    <!-- </section> -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
         All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer> --> 
  <!-- End Footer -->
  <section id="gambarkampus" class="gambarkampus">
    <div class="section-title">
      {{-- <h2>Team</h2> --}}
      <h3> Kami telah membibing <br> mahasiswa dari berbagai kampus</h3>
      {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
    </div>
  <div class="container">
    <div class="row">
        <img src="assets/img/kampus/13.png" alt="Gambar 1" class="image">
        <img src="assets/img/kampus/20.png" alt="Gambar 2" class="image">
        <img src="assets/img/kampus/27.png" alt="Gambar 3" class="image">
    </div>
    <div class="row">
        <img src="assets/img/kampus/3.png" alt="Gambar 4" class="image">
        <img src="assets/img/kampus/24.png" alt="Gambar 5" class="image">
        <img src="assets/img/kampus/26.png" alt="Gambar 6" class="image">
    </div>
    <div class="row">
        <img src="assets/img/kampus/21.png" alt="Gambar 4" class="image">
        <img src="assets/img/kampus/29.png" alt="Gambar 5" class="image">
        <img src="assets/img/kampus/28.png" alt="Gambar 6" class="image">
    </div>
    <div class="row">
        <img src="assets/img/kampus/17.png" alt="Gambar 4" class="image">
        <img src="assets/img/kampus/25.png" alt="Gambar 5" class="image">
        <img src="assets/img/kampus/14.png" alt="Gambar 6" class="image">
    </div>
    <div class="row">
        <img src="assets/img/kampus/15.png" alt="Gambar 4" class="image">
        <img src="assets/img/kampus/16.png" alt="Gambar 5" class="image">
        <img src="assets/img/kampus/27.png" alt="Gambar 6" class="image">
    </div>
</div>
</section>
  {{-- <div id="preloader"></div> --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
<script>
const captions = [
    "Menjadi pendengar setiamu",
    "Mendampingi kamu berproses",
    "Mengerti keluh kesahmu",
    "Menjaga Privasi",
    "Memotivasi kamu untuk lebih bahagia",
    "Memudahkanmu di waktu sulit",
];

const images = [
    "assets/img/clients/client-1.png",
    "assets/img/clients/client-2.png",
    "assets/img/clients/client-3.png",
    "assets/img/clients/client-4.png",
    "assets/img/clients/client-3.png",
    "assets/img/clients/client-3.png",
];

let currentImageIndex = 0;
const captionElements = document.getElementsByClassName("caption");
const imageElement = document.getElementById("gambar");

function changeImage(index) {
  if (currentImageIndex !== index) {
    imageElement.classList.add("fadeOut");
    setTimeout(() => {
      currentImageIndex = index;
      imageElement.src = images[index];
      imageElement.classList.remove("fadeOut");
      imageElement.classList.add("fadeIn");
      updateCaptionStyle(); // Update style tulisan sesuai dengan gambar yang dipilih
    }, 500); // Sesuaikan durasi transisi di CSS dengan timeout di sini (500ms)
  }
}
function autoChangeImage() {
    const nextIndex = (currentImageIndex + 1) % images.length;
    changeImage(nextIndex);
}

let intervalId = setInterval(autoChangeImage, 7000); // Ganti gambar setiap 5 detik

// Hentikan interval saat di klik dan lanjutkan setelah 5 detik
function stopAutoChangeImage() {
    clearInterval(intervalId);
    setTimeout(() => {
        intervalId = setInterval(autoChangeImage, 3000);
    }, 3000);
}

// Inisialisasi gambar dan teks pertama
changeImage(0);
function updateCaptionStyle() {
  for (let i = 0; i < captionElements.length; i++) {
    if (i === currentImageIndex) {
      captionElements[i].classList.add("caption-bold");
    } else {
      captionElements[i].classList.remove("caption-bold");
    }
  }

  // Reset efek transisi gambar setelah 500ms (durasi transisi)
  setTimeout(() => {
    imageElement.classList.remove("fadeIn");
  }, 500);
}




const content1Btn = document.getElementById('content1Btn');
const content2Btn = document.getElementById('content2Btn');
const content3Btn = document.getElementById('content3Btn');
const content4Btn = document.getElementById('content4Btn');
const content1 = document.getElementById('content1');
const content2 = document.getElementById('content2');

// Initialize the active state on page load
let activeButton = content1Btn;

function showContent(index) {
    if (index === 0) {
        content1.style.display = 'block';
        content2.style.display = 'none';
    } else if (index === 1) {
        content1.style.display = 'none';
        content2.style.display = 'block';
    }

    // Remove "active" class from the previously active button
    activeButton.classList.remove('active');

    // Determine the active button based on the index
    if (index === 0) {
        content1Btn.classList.add('active');
        activeButton = content1Btn;
    } else if (index === 1) {
        content4Btn.classList.add('active');
        activeButton = content4Btn;
    }
}

content1Btn.addEventListener('click', () => {
    showContent(0);
});

content2Btn.addEventListener('click', () => {
    showContent(1);
});

content3Btn.addEventListener('click', () => {
    showContent(0);
    activeButton = content3Btn; // Update activeButton when content3Btn is clicked
});

content4Btn.addEventListener('click', () => {
    showContent(1);
    activeButton = content4Btn; // Update activeButton when content4Btn is clicked
});

// Initialize active state when the page loads
showContent(0);





const faqData = [
    {
        question: "Apa itu Class Program?",
        answer: "Class Program adalah platform belajar online perkuliahan dan persiapan karir dengan sistem kenaikan kelas pertama di indonesia yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh mentor yang ahli di bidangnya."
    },
    {
        question: "Siapa saja yang bisa belajar di Class Program?",
        answer: " Class Program terbuka untuk umum, baik mahasiswa ataupun non-mahasiswa yang ingin belajar seputar perkuliahan dan persiapan karir."
    },
    {
        question: "Apa saja jenis program kelas yang tersedia di Class Program?",
        answer: "Program kelas terdiri atas 4 jenis yaitu Kelas Tugas Kuliah (KTK), Bimbingan Matakuliah Jurusan (BMJ), Bimbingan Skripsi Online (BSO), dan Kelas Persiapan Karir (KPK)."
    },
    {
        question: "Bagaimana cara memilih program kelas yang sesuai di Class Program?",
        answer: "Kelas Tugas Kuliah (KTK) diperuntukkan bagi sobat yang memerlukan bimbingan seputar tugas umum perkuliahan dengan sistem kenaikan kelas. Paket basic cocok untuk sobat yang ingin memahami tugas seputar penyusunan makalah, footnote dan endnote, jurnal, esai hingga materi karya tulis ilmiah yang umumnya ditemui pada semester 1-4. Sedangkan paket excellent diperuntukkan bagi sobat yang ingin memahami materi seputar metodologi penelitian dan skripsi yang umumnya ditemui pada semester 5 keatas. Bimbingan Mata Kuliah Jurusan (BMJ) cocok untuk sobat yang ingin mendalami materi mata kuliah yang ada di jurusan masing-masing dengan sistem pendampingan. Paket Bronze untuk semester 1-2, Paket emerald untuk semester 3-4 dan paket diamond untuk semester 5-6.Bimbingan Skripsi Online (BSO) diperuntukkan bagi sobat yang sedang menyusun tugas akhir atau skripsi dengan sistem mentoring. Paket Silver membimbing dalam pembuatan judul skripsi, paket gold membimbing dalam pembuatan proposal skripsi, paket platinum membimbing hasil dan pembahasan skripsi, dan paket diamond membimbing simulasi sempro atau sidang skripsi.Kelas Persiapan Karir (KPK) diperuntukkan bagi sobat yang ingin mengasah soft skill dan hard skill untuk terjun di dunia kerja."
    },
    {
        question: "Bagaimana cara bimbingan di Class Program?",
        answer: "MSobat Insan perlu melakukan registrasi terlebih dahulu. Lengkapi data diri, kemudian login menggunakan akun yang telah terdaftar. Setelah itu memilih program yang tersedia sesuai dengan kebutuhan sobat insan. Lalu lakukan pembayaran sesuai pesanan dan Sobat insan akan diarahkan ke Minma untuk mendapatkan mentor. Setelah semua proses selesai, Sobat Insans siap untuk belajar di Class Program."
    },
    {
        question: "Siapa mentor yang ada di Class Program?.",
        answer: "Mentor di Class Program berasal dari lulusan-lulusan top kampus yang berpengalaman dan ahli di bidangnya."
    },
    {
        question: "Bagaimana sistem belajar di Class Program?",
        answer: "Sistem belajar Class Program menggunakan sistem pendampingan yang sepenuhnya dilaksanakan secara online dengan metode Live teaching dan group sharing. Proses belajar turut dilengkapi  berbagai fasilitas pendukung pembelajaran seperti flash card, Video Pembelajaran, dan lainnya."
    },
    // {
    //     question: "FAQ 8",
    //     answer: "Jawaban untuk FAQ 8."
    // }
];

const faqList = document.getElementById('faq-list');
const showMoreBtn = document.getElementById('showMoreBtn');
let displayAll = false;

function displayFAQ() {
    faqList.innerHTML = ''; // Menghapus FAQ yang sebelumnya ditampilkan

    const maxFAQsToShow = displayAll ? faqData.length : 5;

    faqData.slice(0, maxFAQsToShow).forEach((faq, index) => {
        const listItem = document.createElement('li');
        listItem.innerHTML = `
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq${index + 1}">${faq.question}</div>
            <div id="faq${index + 1}" class="collapse" data-bs-parent=".faq-list">
                <p>${faq.answer}</p>
            </div>
        `;
        faqList.appendChild(listItem);
    });

    // Menyembunyikan tombol "Baca Selengkapnya" jika semua FAQ ditampilkan
    if (faqData.length <= 5) {
        showMoreBtn.style.display = 'none';
    } else if (displayAll) {
        showMoreBtn.textContent = 'Tampilkan Lebih Sedikit';
    } else {
        showMoreBtn.textContent = 'Baca Selengkapnya';
    }
}

showMoreBtn.addEventListener('click', () => {
    displayAll = !displayAll;
    displayFAQ();
});

// Memuat FAQ awal saat halaman dimuat
displayFAQ();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

@endsection