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
</head>
@extends('layout.header')
@section('content')
<body>

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
    <span><img src="assets/img/fotos.png" class="foto" style="float:right;width:50%"alt=""></span>
      <h1 style="margin-top:10%;">Kenalan dengan kami, yuk!</h1>
      <h2>Temukan sensasi belajar yang unik <br> dan wujudkan harapan baru disetiap langkah <br> proses belajarmu bersama Class Program <br> 
Yuk gabung menjadi bagian dari Class <br> Program bersama Sobat Insans lainnya. </h2>

      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto"style="border-radius: 40px;">Daftar Sekarang</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
   
      <!-- <img src="assets/img/fotos.png" class="foto" alt=""> -->
      <!-- <img src="assets/img/fotos.jpg" class="fotos" alt=""> -->

    </div>
</section>

<div class="row">        
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>About</h2> -->
          <h3>Tentang <span>Class Program</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <!-- <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div> -->
       
          <!-- <div class="container"> -->
          <div style="text-align: justify;">
  <div style="width: 50%; margin: 0 auto;">
    <hr class="text-secondary" style="text-align:left;text-align:right">
    <p>
    Banyaknya permasalahan dalam dunia perkuliahan menuntut mahasiswa untuk terus meningkatkan kualitas diri dengan baik. Terbatasanya kesempatan untuk belajar hal-hal dasar menjadi salah satu kendala terbesar mahasiswa. Salah satunya lemahanya mahasiswa dalam memahami berbagai teknik dalam penyususnan dan pembuatan tugas-tugas pekuliahan, belum lagi mereka harus berhadap dengan materi perkuliahan yang tidak mudah untuk dipelajari tanpa adanya keseriusan yang mendalam.
    </p>
    <p>
    Selain permasalahan dalam dunia perkuliahan, banyak mahasiswa juga merasa khawatir untuk terjun dalam dunia realita, yaitu dunia kerja. Sehingga salah satu faktor dari penyebab banyaknya pengangguran di Indonesia disumbang oleh para fresh graduate.
    </p>
    <p>
    Class Program hadir sebagai jawaban dan solusi yang tepat untuk menjawab semua permasalahan mahasiswa.  Di mana Class Program merupakan media belajar online pertama di Indonesia dengan sistem kenaikan kelas yang didesain khusus untuk mahasiswa dan non-mahasiswa sebagai jawaban dan solusi dari berbagai permasalahan tugas kuliah serta persiapan karir.
    </p>
    <p>
    Kini Class Program memiliki produk Kelas Tugas Kuliah (KTK), Kelas Materi Jurusan (KMJ), Creative Class, Bimbingan Skripsi Online (BSO), Kelas Persiapan Karir (KPK), dan Persiapan Masuk Kampus/UTBK (PMK) yang dapat Sobat Insans pilih sesuai dengan kebutuhannya masing-masing.
    </p>
    <p style="text-align:center;">
     Class Program<br>
      “Semua Bisa Lulus Kuliah”
    </p>
    <hr class="text-secondary">
  </div>
</div>
<!-- </div> -->
    
    </section><!-- End About Section -->


   


    
    <!-- ======= Skills Section ======= -->

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

      </div>
    </section>End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi Produk</h2>
          <!-- <h3>Check our <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row justify-content-center">
       
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Kelas Tugas Kuliah (KTK)</a></h4>
              <p>program kelas online interaktif yang khusus membantu Mahasiswa dalam proses serta langkah-langkah penyelesaian tugas-tugas di dunia perkuliahan. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Bimbingan Skripsi Online (BSO)</a></h4>
              <p>bimbingan privat online yang khusus membantu Mahasiswa dalam memahami langkah-langkah penyusunan dan pengerjaan skripsi dengan sistem mentoring/pendampingan.</p>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div> -->

          <center></center>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">
              Bimbingan Mata Kuliah Jurusan (BMJ)</a></h4>
              <p>program bimbingan privat onine yang khusus membantu Mahasiswa dalam memahami Materi mata kuliah yang ada di jurusan dengan sistem mentoring/pendampingan.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Kelas Persiapan Karir (KPK)</a></h4>
              <p>Membantu permasalahan mahasiswa dan non mahasiswa untuk mempersiapkan diri terjun ke dunia kerja.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    

    <!-- ======= Testimonials Section ======= -->
    

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

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
    </section><!-- End Team Section -->

   

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Tanya Jawab</p>
        </div>
        
        <div class="row justify-content-center">
      <div class="col-md-6">
        <ul class="faq-list">
          <li>
            <div class="question" data-bs-toggle="collapse" href="#faq1" data-bs-icon="chevron-down">
              <span class="question-text">Apa itu Class Program?</span> 
              <i class="bi bi-chevron-down icon-show"></i> <i class="bi bi-chevron-up icon-close" style="display: none;"></i>
            </div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Media belajar online perkuliahan dan persiapan karir dengan sistem kenaikan kelas pertama di indonesia yang menyediakan berbagai macam program kelas serta akan dibimbing langsung oleh mentor yang ahli di bidangnya.
              </p>
            </div>
          </li>

            

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Siapa saja yang bisa menggunakan Class Program?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Class Program dapat digunakan oleh seluruh kalangan baik mahasiswa ataupun non mahasiswa.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Class Program bisa diakses dari mana saja?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Sobat Insans dapat mengakses semua layanan Class Program dari mana saja dan kapan saja.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">Berapa biaya untuk bergabung dengan program yang ada di Class Program?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Layanan Class Program dapat diakses oleh Sobat Insans secara GRATIS!, namun untuk layanan program kelas dan workshop akan dikenakan biaya sebagaimana yang ditentukan. Dapatkan harga spesial dengan memasukan Kode Promo yang berlaku, jika kuota masih ada.
                  </p>
                </div>
              </li>

            </ul>
            </div>

            
        <div class="col-md-6">
        <ul class="faq-list">
  <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana cara mendaftar di Class Program?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Sobat Insans bisa mendaftarkan diri atau masuk ke akun yang sudah dibuat sebelumnya. Setelah itu, Sobat Insans dapat mengakses fitur dari Class Program dan melakukan registrasi untuk bergabung dengan layanan program kelas atau kegiatan workshop yang tersedia.
                  </p>
                </div>  
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apa saja yang bisa dilakukan di Class Program?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Dengan Class Program, Sobat Insans dapat:
<br>
1. Membuat akun dan melakukan pendaftaran di Class Program <br>
2. Dapat memilih paket program kelas atau workshop sesuai keinginan Sobat Insans <br>
3. Mendapatkan materi pelatihan, fasilitas pelatihan, dan berbagai keuntungan yang dipersiapkan untuk Sobat Insans
                  </p>
                </div>
              </li>

        

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Apa saja fasilitas yang diberikan Class Program?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Apa saja fasilitas yang diberikan Class Program? Class Program memiliki berbagai pilihan program kelas dan juga kegiatan workshop yang bisa dimanfaatkan oleh Sobat Insans, berikut fasilitas di Class Program:
<br>
1. Materi dari Mentor dan pendampingan oleh Wali Kelas <br>
2. Sistem pembelajaran berjenjang dengan sistem kenaikan kelas <br>
3. Live teaching dan group sharing <br>
4. Modul/buku saku <br>
5. Materi PPT <br>
6. Video materi, dan masih banyak fasilitas lainnya.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Bagaimana sistem Class Program?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Sistem dari layanan Class Program menggunakan video materi dan terdapat jenjang kenaikan kelas yang bisa diakses oleh Sobat Insans. Mulai dari materi yang paling dasar sampai materi yang paling kompleks. Serta Sobat Insans dapat melakukan sharing session secara langsung dengan mentor melalui group WhatsApp.
                  </p>
                </div>
              </li>
              <li>
                <div data-bs-toggle="collapse" href="#faq9" class="collapsed question">Jika saya butuh bantuan, kemana harus menghubungi?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Jika Sobat Insans masih bingung dan butuh bantuan, silahkan menghubungi layanan Class Program melalui e-mail classprogram.id@gmail.com atau melalui official WhatsApp 0813-3137-3372.
                  </p>
                </div>
              </li>

              </ul>
      </div>
    </div>
  </div>
    </section><!-- End Frequently Asked Questions Section -->

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    
  $(document).ready(function () {
    $(".question").on("click", function () {
      // Cari elemen collapse terkait
      var targetCollapse = $(this).attr("href");

      // Tutup semua collapse kecuali yang terkait dengan pertanyaan saat ini
      $(".collapse").not(targetCollapse).collapse("hide");

      // Atur ikon saat collapse dibuka atau ditutup
      $(this).find(".bi").toggleClass("icon-show icon-close");
    });
  });

  
  
  
  $(document).ready(function() {
    $(".question").on("click", function() {
      // Mengambil elemen .answer terkait dengan pertanyaan yang diklik
      var answer = $(this).next(".answer");
      // Menghapus atribut style dari elemen .answer sebelumnya (jika ada)
      $(".answer").not(answer).removeAttr("style");

      // Jika elemen .answer sedang terbuka, maka tutup (hapus tinggi maksimum)
      if (answer.hasClass("open")) {
        answer.removeClass("open");
      } else { // Jika elemen .answer sedang tertutup, maka buka (atur tinggi maksimum)
        answer.addClass("open");
      }
    });
  });


  
</script>
<script>
  const questions = document.querySelectorAll(".question");

  questions.forEach((question) => {
    question.addEventListener("click", () => {
      const iconShow = question.querySelector(".icon-show");
      const iconClose = question.querySelector(".icon-close");
      const otherQuestions = document.querySelectorAll(".question:not(.collapsed)");

      // Tutup semua pertanyaan kecuali yang aktif saat ini
      otherQuestions.forEach((otherQuestion) => {
        if (otherQuestion !== question) {
          otherQuestion.classList.add("collapsed");
          const otherIconShow = otherQuestion.querySelector(".icon-show");
          const otherIconClose = otherQuestion.querySelector(".icon-close");
          otherIconShow.style.display = "inline-block";
          otherIconClose.style.display = "none";
        }
      });

      // Atur tombol panah sesuai keadaan
      if (question.classList.contains("collapsed")) {
        question.classList.remove("collapsed");
        iconShow.style.display = "none";
        iconClose.style.display = "inline-block";
      } else {
        question.classList.add("collapsed");
        iconShow.style.display = "inline-block";
        iconClose.style.display = "none";
      }
    });
  });
</script>
</body>

</html>
@endsection