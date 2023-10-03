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
  <style>
     .checkmark {
          display: inline-block;
          width: 20px;
          height: 20px;
          /* background-color: #2ecc71; Warna latar belakang centang */
          border-style:solid;
          
	border-width: 1px;
          color: rgb(255, 0, 0); /* Warna centang */
          border-radius: 50%;
          text-align: center;
          line-height: 18px;
          margin-right: 10px;
      }
      
      .feature-text {
          font-size: 16px;
      }
  </style>
</head>
@extends('layout.header')
@section('content')
<body>
<!-- <audio id="myAudio" hidden autoplay loop >
    <source src="https://github.com/petanikode/belajar-html/raw/master/audio/Ngoni.mp3" type="audio/mpeg">
    Browsermu tidak mendukung tag audio, upgrade donk!
</audio> -->
<script>
    // Mengambil elemen audio
    var audio = document.getElementById("myAudio");

    // Mengatur volume audio menjadi 20% saat halaman dimuat
    audio.volume = 0.2;
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
    <span><img src="assets/img/fotos.png" class="foto" style="float:left;width:50%"alt=""></span>
      <h1 style="margin-top:10% ">Selesaikan permasalahan tugas kuliahmu hanya di Kelas Tugas Kuliah (KTK)</h1>
      <h2 style="margin-top:20px "> Belajar online via video materi yang interaktif, modul pembelajaran, dan sharing section bersama Mentor yang ahli di bidangnya.  </h2>

      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto"style="border-radius: 40px;">ganti pilihan paket</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
   
      <!-- <img src="assets/img/fotos.png" class="foto" alt=""> -->
      <!-- <img src="assets/img/fotos.jpg" class="fotos" alt=""> -->

    </div>
</section><!-- section -->

  <main id="main">
     <!-- ======= About Section ======= -->
     <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>About</h2> -->
          <h3>keunggulan Kelas Tugas Kuliah <span>KTK</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row align-items-center justify-content-between">
  <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
    <div class="content-box">
      <div class="circle-number">1</div>
      <div class="content-text">
        <h5>Terdapat Pilihan Kelas sesuai Kebutuhan</h5>
        <p style=" font-family: Cambria, Georgia, serif; 
        font-size: 20px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 25px;    ">Sobat Insans dapat memilih kelas berdasarkan semester  melalui pilihan Paket Basic dan Paket Excellent.</p>
      </div>
    </div>
    <div class="content-box">
      <div class="circle-number">2</div>
      <div class="content-text">
        <h5>Mendapatkan Materi dalam Pembuatan dan Penyusunan Tugas Kuliah</h5>
        <p>Sobat Insans dapat memilih kelas berdasarkan semester perkuliahan melalui pilihan Paket Basic dan Paket Excellent.</p>
      </div>
    </div>
    <div class="content-box">
      <div class="circle-number">3</div>
      <div class="content-text">
        <h5>Pendampingan oleh Mentor dan Wali Kelas</h5>
        <p>Sobat Insans akan dibimbing oleh Mentor yang berpengalaman serta didampingi Wali Kelas selama pembelajaran berlangsung.</p>
      </div>
    </div>
    <div class="content-box">
      <div class="circle-number">4</div>
      <div class="content-text">
        <h5>Teknik Penyampaian Materi yang Mudah Dipahami</h5>
        <p>Mendapatkan video materi yang diberikan secara bertahap dengan menggunakan Sistem Kenaikan Kelas.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 text-centerr">
    <img src="assets/img/about.jpg" class="img-fluid" alt="">
  </div>
</div>
    </section><!-- End About Section -->

  <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        
      <div class="section-title">
          
          <h3>Terimakasih Telah Mempercayai Kami</h3>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengikut di Sosial Media</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->


    <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
        <div class="text-center mt-4 mb-4">
            <a href="#" class="btn btn-primary change-content" data-target="all">Semua Paket</a>
            <a href="#" class="btn btn-primary change-content" data-target="ktk">Paket KTK Basic</a>
            <a href="#" class="btn btn-primary change-content" data-target="bso">Paket KTK Excellent</a>
            <!-- <a href="#" class="btn btn-primary change-content" data-target="kpk">Paket Diamond</a> -->
        </div>

        

        <div class="content" id="all-content">
        <div class="row justify-content-center">

            <div class="col-md-7 col-lg-4 d-flex align-items-stretch mb-9 mb-lg-1">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                    <h4 class="title"><a href="#">Paket KTK Basic</a></h4>
                    <p class="description">Program kelas yang disediakan untuk Sobat Insans dari semester 1-4 dengan materi penyusunan makalah beserta endnote dan footnote, esai, jurnal ilmiah, PPT dan KTI.</p>
                    <a href="#" class="btn btn-secondary change-content" data-target="ktk" style="position: absolute; bottom: 10px; right: 10px;">Selengkapnya</a>
                </div>
            </div>
            

            <div class="col-md-7 col-lg-4 d-flex align-items-stretch mb-9 mb-lg-1">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300" >
                <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
                <h4 class="title"><a href="">
  Paket KTK Excellent</a></h4>
                <p class="description">Program kelas yang disediakan untuk Sobat Insans dari semester 5-selesai dengan materi cara mencari topik skripsi sampai materi cara penyusunan skripsi.</p>
                <a href="#" class="btn btn-secondary change-content" data-target="bso" style="position: absolute; bottom: 10px; right: 10px;">Selengkapnya</a>
             <br>
              </div>
            </div>

          
        </div>
        </div>
        <div class="content" id="ktk-content" style="display: none;">
       
        <div class="col-md-9 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 ">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                    <h4 class="title"><a href="#">Paket KTK Basic</a></h4>
                    <p class="description">Program kelas yang disediakan untuk Sobat Insans dari semester 1-4 dengan materi penyusunan makalah beserta endnote dan footnote, esai, jurnal ilmiah, PPT dan KTI.</p>
                    <br>
                    <ul>
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Mendapatkan materi seputar pembuatan dan penyusunan makalah, endnote dan footnote, membuat sitasi dan daftar pustaka, esai, jurnal ilmiah, PowerPoint dan karya tulis ilmiah.</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Memiliki kemampuan dan keterampilan dalam mengerjakan tugas kuliah.</span>
            </li>
       
                    
            <!-- <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Soal Kuis dan kisi-kisi materi untuk bahan UAS</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Konsultasi bersama Mentor terkait konsentrasi jurusan</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Review materi dari Mentor</span>
            </li> -->
        </ul>
                </div>
            </div>
         
        </div>
        <div class="content" id="bso-content" style="display: none;">
        <div class="col-md-9 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
                <h4 class="title"><a href="">
  Paket KTK Excellent</a></h4>
                <p class="description">Program kelas yang disediakan untuk Sobat Insans dari semester 5-selesai dengan materi cara mencari topik skripsi sampai materi cara penyusunan skripsi.</p>
                <br>    
                <ul>
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Mendapatkan materi seputar topik skripsi sampai penyusunan skripsi</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Memiliki kemampuan dan keterampilan dalam mencari topik skripsi dan menyusun skripsi yang baik dan benar.</span>
            </li>
       
<!--                     
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Soal Kuis dan kisi-kisi materi untuk bahan UAS</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Konsultasi bersama Mentor terkait konsentrasi jurusan</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Review materi dari Mentor</span>
            </li> -->
        </ul>
              </div>
            </div>
        </div>
        <div class="content" id="kpk-content" style="display: none;">
        <div class="col-md-9 col-lg-6 d-flex align-items-center mb-5 mb-lg-0 ">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
                <h4 class="title"><a href="">Paket Diamond</a></h4>
                <p class="description">Membantu permasalahan mahasiswa dan non mahasiswa untuk mempersiapkan diri terjun ke dunia kerja.</p>
                <br>    
                <ul>
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Sertifikat resmi dari Class Program</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Terdapat praktik dalam setiap bimbingan</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Soal Kuis dan kisi-kisi materi untuk bahan UAS</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Konsultasi bersama Mentor terkait konsentrasi jurusan</span>
            </li>
       
                    
            <li class="left-aligned">
                <span class="checkmark">&#10003;</span>
                <span class="feature-text">Review materi dari Mentor</span>
            </li>
        </ul>
             
              </div>
            </div>
        </div>
        </div>
    </div>

    <script>
        const changeContentButtons = document.querySelectorAll('.change-content');
        const contentContainers = document.querySelectorAll('.content');

        contentContainers.forEach(container => {
            container.style.display = 'none';
        });

        document.getElementById('all-content').style.display = 'block';

        changeContentButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const target = this.getAttribute('data-target');

                contentContainers.forEach(container => {
                    container.style.display = 'none';
                });

                const contentContainer = document.getElementById(`${target}-content`);
                if (contentContainer) {
                    contentContainer.style.display = 'block';
                }
            });
        });
    </script>
      </section>


     <!-- ======= Pricing Section ======= -->
     <section id="pricing" class="pricing" style="margin-bottom:50px;">
  <div class="container" data-aos="fade-up">
    <div class="section-title judul">
      <h3>Pilihan Paket Kelas Tugas Kuliah (KTK)</h3>
    </div>
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="custom-box">
          <h4 class="custom-package">Paket Basic</h4>
          <h4 class="custom-package" style="font-size: 20px;">3 Bulan</h4>
          <div class="custom-price"><strong>Rp 135.000</strong></div>
          <ul>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan mentoring materi tugas perkuliahan semester 1-4.</span>
            </li>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Pendampingan langsung oleh Mentor dan Wali Kelas.</span>

            <!-- </li  class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan review materi pembelajaran berupa flashcard. <br> </span>
            </li> -->
            </li>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan berbagai fasilitas penunjang.</span>
            </li>
            <li class="left-aligned"style="margin-bottom:70px;">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan berbagai fasilitas penunjang.</span>
            </li>
          </ul>
          <div class="custom-btn-wrap">
            <a href="#" class="custom-btn-buy">Daftar Sekarang</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="custom-box">
          <h4 class="custom-package">Paket Excellent</h4>
          <h4 class="custom-package" style="font-size: 20px;">3 Bulan</h4>
          <div class="custom-price"><strong>Rp 135.000</strong></div>
          <ul>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan mentoring materi cara menentukan topik sampai dengan materi penyusunan skripsi.</span>
            </li>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text"> Grup WhatsApp untuk pendampingan langsung bersama Mentor dan Wali Kelas.</span>
            </li>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan review materi pembelajaran berupa flashcard.</span>
            </li>
            <li class="left-aligned">
              <span class="checkmark">&#10003;</span>
              <span class="text">Mendapatkan berbagai macam fasilitas penunjang.</span>
            </li>
          </ul>
          <div class="custom-btn-wrap">
            <a href="{{ route('pembelian', ['id_produk' => 'bso']) }}" class="custom-btn-buy">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services"> -->
      <!-- <div class="container" data-aos="fade-up">

       
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Kelas Tugas Kuliah (KTK)</a></h4>
              <p class="description">Program kelas yang dikhususkan untuk membantu mahasiswa dalam proses serta langkah-langkah penyelesaian permasalahan tugas-tugas di dunia perkuliahan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">
Bimbingan Skripsi Online (BSO)</a></h4>
              <p class="description">Program Bimbingan Privat Online yang disediakan secara khusus untuk membantu mahasiswa dalam memahami langkah-langkah penyusunan dan pengerjaan skripsi dengan sistem mentoring/pendampingan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">
Bimbingan Mata Kuliah Jurusan (BMJ)</a></h4>
              <p class="description">Program Bimbingan Privat Online yang khusus disediakan untuk membantu mahasiswa dalam memahami materi-materi mata kuliah yang ada di jurusan dengan sistem mentoring/pendampingan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Kelas Persiapan Karir (KPK)</a></h4>
              <p class="description">Membantu permasalahan mahasiswa dan non mahasiswa untuk mempersiapkan diri terjun ke dunia kerja.</p>
            </div>
          </div>

      
      </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Kelas Tugas Kuliah (KTK)</a></h4>
              <p class="description">Program kelas yang dikhususkan untuk membantu mahasiswa dalam proses serta langkah-langkah penyelesaian permasalahan tugas-tugas di dunia perkuliahan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">
Bimbingan Skripsi Online (BSO)</a></h4>
              <p class="description">Program Bimbingan Privat Online yang disediakan secara khusus untuk membantu mahasiswa dalam memahami langkah-langkah penyusunan dan pengerjaan skripsi dengan sistem mentoring/pendampingan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">
Bimbingan Mata Kuliah Jurusan (BMJ)</a></h4>
              <p class="description">Program Bimbingan Privat Online yang khusus disediakan untuk membantu mahasiswa dalam memahami materi-materi mata kuliah yang ada di jurusan dengan sistem mentoring/pendampingan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Kelas Persiapan Karir (KPK)</a></h4>
              <p class="description">Membantu permasalahan mahasiswa dan non mahasiswa untuk mempersiapkan diri terjun ke dunia kerja.</p>
            </div>
          </div>

      
      </div> -->
    <!-- </section>End Featured Services Section -->

     <!-- ======= Team Section ======= -->
     <!-- <section id="team" class="team section-bg"> -->
      <!-- <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div> -->
    <!-- </section>End Team Section -->

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

      </div>
    </section>End Skills Section -->

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

      </div>
    </section>End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services"> -->
      <!-- <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Kenapa Harus Join   <span>ClassProgram</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
       
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>
          <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>
        </div>

      </div> -->
    <!-- </section>End Services Section -->
    



   

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg"> -->
      <!-- <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div> -->
    <!-- </section>End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact"> -->
      <!-- <div class="container" data-aos="fade-up">

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
    <!-- </section>End Contact Section -->

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

  <div id="preloader"></div>
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

</body>

</html>@endsection