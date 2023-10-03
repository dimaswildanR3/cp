      <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <div class="masbro">
              <a href="/index" ><img src="{{ asset('assets/img/logo/logo1.png') }}"class="logo" alt="Deskripsi Gambar"></a>
            </div>
            <form class="search-form" action="#" method="get">
              {{-- <label class="form-label" for="query">Masukkan kata kunci:</label> --}}
              <input class="search-input" type="text" id="query" name="query"placeholder="apa yang sedang kamu cari?">
              <button class="search-button" type="submit">CARI</button>
          </form>
            {{-- <a href="/tentang" class=""><i style="padding:10px;">Tentang</i>|</a>
            <a href="#" class="facebook"><i style="padding:10px;">FAQ</i> |</a>
            <a href="https://www.youtube.com/channel/UCjpX70gVQp0iUfHjrDxFhqQ" target='_blank'><i class="bi bi-youtube"style="padding:10px;"></i></a>
            <a href="https://www.instagram.com/classprogram.id/" target='_blank'><i class="bi bi-instagram"style="padding:10px;"></i></a>
            <a href="https://www.tiktok.com/@classprogram" target='_blank'><i class="bi bi-tiktok"style="padding:10px;"></i></i></a>
            <a href="mailto:classprogram.id@gmail.com" target='_blank'><i class="bi bi-envelope"style="padding:10px;"></i></i></a> --}}
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            @auth
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin-bottom:12px;margin-left:10px;">
                        {{ substr(auth()->user()->name, 0, 5) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="modal" href="javascript:void(0)" data-target="#lihatprofile">
                            <i class="fas fa-user mr-2"></i> Lihat Profil
                        </a>
                        <a class="dropdown-item" href="{{ route('auths.gantipassword', ['id' => auth()->user()->id]) }}">
                            <i class="fas fa-user-cog mr-2"></i> Ganti Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout" onclick="return confirm('Apakah anda yakin ingin keluar dari sistem ?')">
                            <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                        </a>
                    </div>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ml-auto">
                <li class="login-button">
                    <div class="login-btn"style="margin-bottom:12px;margin-left:10px;"><a href="/login">Masuk</a></div>
                </li>
            </ul>
            @endauth
            
            {{-- <div class="countdown">
              <span style="font-size: 15px;color: #e4dbdb; margin-right:15px;">Workshop Skripsi </span>
              <span id="days">00</span> :
              <span id="hours">00</span> :
              <span id="minutes">00</span> :
              <span id="seconds">00</span> 
          </div> --}}
          <script src="script.js"></script>
            <!-- <i class="bi bi-envelope d-flex align-items-center"style="margin-right:-35px;"><a href="https://mail.google.com/"></i>classprogram.id@gmail.com</a> -->
            <!-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i> -->
          </div>
        </div>
      </section>

      <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

        
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <img src="assets/img/logo/logo1.png"class="img-fluid" alt=""> -->
        
          {{-- <a href="index.php" ><img src="/public/assets/img/logo/logo1.png"class="logo" alt="Deskripsi Gambar"></a> --}}

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="/"style="margin-right:30px">Home</a></li>
              <li class="dropdown"><a style="cursor: pointer;"><span>Produk</span> <i class="bi bi-chevron-down nav-link scrollto active"style="margin-left:-10px;"></i></a>
                <ul style="border-radius: 15px;">
                  <li><a class="nav-link scrollto" href="Kelas-Tugas-Kuliah">Kelas Tugas Kuliah (KTK)</a></li>            
                  <li><a class="nav-link scrollto" href="bimbangan-mata-kuliah-jurusan">Bimbingan Mata Kuliah Jurusan (BMJ)</a></li>
                  <li><a class="nav-link scrollto" href="bimbingan-skripsi-online">Bimbingan Skripsi Online (BSO)</a></li>
                  <li><a class="nav-link scrollto" href="#">Kelas Persiapan Karir (KPK)</a></li>
                </ul>
              </li>
              <li class="dropdown"><a style="cursor: pointer;"><span>Workshop</span> <i class="bi bi-chevron-down nav-link scrollto active"style="margin-left:-10px;"></i></a>
                <ul style="border-radius: 15px;">
                  <li><a class="nav-link scrollto" href="kti">KTI</a></li>            
                  <li><a class="nav-link scrollto" href="skripsi">Skripsi</a></li>           
                </ul>
              </li>
              <li class="dropdown"><a style="cursor: pointer;"><span>Creative Class</span> <i class="bi bi-chevron-down nav-link scrollto active"style="margin-left:-10px;"></i></a>
                <ul style="border-radius: 15px;">
                  <li><a class="nav-link scrollto" href="nonaktif">Kelas Adobe Photoshop</a></li>                          
                </ul>
              </li>
              {{-- <li class="dropdown"><a style="cursor: pointer;"><span>Lainnya</span> <i class="bi bi-chevron-down nav-link scrollto active"></i></a>
                <ul style="border-radius: 15px;">
                  <li><a class="nav-link scrollto" href="/tentang">Tentang Kami</a></li>            
                  <li><a class="nav-link scrollto" href="/kontak">Kontak</a></li>
                  <li><a class="nav-link scrollto" href="#">FAQ</a></li>           
                </ul>
              </li>               --}}
             
              <li><a class="nav-link scrollto" href="/"style="margin-right:30px">Artikel</a></li>
                  <li><a class="nav-link scrollto" href="#konsultasi"style="margin-right:30px">Alur bimbingan</a></li>
               
                  <li><a class="nav-link scrollto" href="#testimonials"style="margin-right:30px">Mentor</a></li>
                  <li><a class="nav-link scrollto" href="#testibaru"style="margin-right:30px">Testimoni</a></li>
                  <li><a class="nav-link scrollto" href="#faq"style="margin-right:30px">FAQ</a></li>
                  {{-- <li><a class="nav-link scrollto" href="/"style="margin-right:30px">Artikel</a></li> --}}
                  {{-- <div class="search-container">
                    <button id="search-button" class="search-icon">
                      <img src="{{ asset('assets/img/logo/cari.png') }}" alt="Search">
                    </button>
                    <button id="close-button" class="close-icon">
                        <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Close">
                    </button>
                    <div id="search-dropdown" class="search-dropdown">
                        <div class="search-bar">
                            <input type="text" id="search-input" placeholder="Cari...">
                            <button id="search-submit" class="search-submit">
                                <img src="{{ asset('assets/img/logo/cari.png') }}" alt="Search" style="width: 20px;">
                            </button>
                        </div> --}}
                        <!--<ul id="search-results" class="search-results">
                            Hasil pencarian akan ditampilkan di sini
                        </ul>-->
                    </div>
                </div>
                </li>

                {{-- <li>
                  <div class="cart-container">
                    <button id="cart-button" class="cart-icon">
                        <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="keranjang">
                    </button>
                    <div id="cart-dropdown" class="cart-dropdown">
                      <ul id="cart-items" class="cart-items">
                        <li class="cart-item">
                          <div class="item-details">
                              <div class="item-image">
                                  <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="Item Image">
                              </div>
                              <div class="item-info">
                                <h3 style=" font-size: 15px;">BMJ PAKET BRONZE</h3>
                                <p class="item-price"><span>1X </span>$10</p>
                              </div>
                              <button class="remove-item-button">
                                <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Item Image">
                              </button>
                          </div>
                      </li>
            <li class="cart-item">
              <div class="item-details">
              <div class="item-image">
                  <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="Item Image">
              </div>
              <div class="item-info">
                <h3 style=" font-size: 15px;">BMJ PAKET BRONZE</h3>
                <p class="item-price"><span>1X </span>$10</p>
              </div>
              <button class="remove-item-button">
                <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Item Image">
              </button>
          </div>
        </li>
            <li class="cart-item">      <div class="item-details">
              <div class="item-image">
                  <img src="{{ asset('assets/img/logo/keranjang.png') }}" alt="Item Image">
              </div>
              <div class="item-info">
                <h3 style=" font-size: 15px;">BMJ PAKET BRONZE</h3>
                <p class="item-price"><span>1X </span>$10</p>
              </div>
              <button class="remove-item-button">
                <img src="{{ asset('assets/img/logo/xx.png') }}" alt="Item Image">
              </button>
          </div>
        </li>
                        </ul>
                        <hr>
                        <button id="checkout-button" class="checkout-button"style="margin-bottom:15px">Checkout</button>
                    </div>
                </div>
                </li> --}}
        
              
               <!--<ul style="border-radius: 2px;">
                <li><a class="nav-link scrollto" href="/tentang">Login</a></li>            
                  <li><a class="nav-link scrollto" href="/kontak">logout</a></li>
                </ul>      -->  
              </li>           
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          {{-- <div class="content">
        </div> --}}
        
      </header>
      <header id="marquee-container" >
        <div class="stop">
        <div class="ok">
          <div class="stopp">Testimoni:</div>
        </div>
      </div>
      <marquee id="marquee">
        <ul>
          <li>Magdalena Melisa: Dengan adanya Mentor, hal-hal yang tidak tersampaikan ke dosen pembimbing jadi ngalir gitu aja banyak ide muncul.</li>
          <li>Adinda Cahayani Supriyanto: Saya sangat berterima kasih pada BSO karena sudah menyediakan program bimbingan skripsi online yang berkualitas dan juga ramah dikantong.</li>
          <li>Napa Lestari: Dengan mengikuti BSO skripsi saya selesai lebih cepat.</li>
          <li>Hanifah Alya Mu'adzah: Mentornya baik-baik dan kalau jelasin materi rinci, bukan hanya mentor namun adminnya juga the best.</li>
          <li>Puji: Menambah ilmu baru, wawasan, santai, disiplin, manajemen waktu baik.</li>
        </ul>
      </marquee>
      
      </header>
    </div>
    
      <script>
     


      // document.addEventListener('DOMContentLoaded', function() {
      //   const searchIcon = document.getElementById('search-button');
      //   const closeIcon = document.getElementById('close-button');
      //   const searchDropdown = document.getElementById('search-dropdown');
      //   const searchInput = document.getElementById('search-input');
      //   const searchSubmit = document.getElementById('search-submit');
      //   const searchResults = document.getElementById('search-results');

      //   searchIcon.addEventListener('click', function() {
      //       toggleSearch();
      //   });

      //   closeIcon.addEventListener('click', function() {
      //       toggleSearch();
      //   });

      //   function toggleSearch() {
      //       if (searchDropdown.style.display === 'block') {
      //           searchDropdown.style.opacity = '0';
      //           searchDropdown.style.transform = 'translateY(-10px)';
      //           closeIcon.style.display = 'none';
      //           searchIcon.style.display = 'block';
      //           setTimeout(function() {
      //               searchDropdown.style.display = 'none';
      //           }, 300);
      //       } else {
      //           searchDropdown.style.display = 'block';
      //           closeIcon.style.display = 'block';
      //           searchIcon.style.display = 'none';
      //           setTimeout(function() {
      //               searchDropdown.style.opacity = '1';
      //               searchDropdown.style.transform = 'translateY(0)';
      //               searchInput.focus();
      //           }, 10);
      //       }
      //   }

      //   searchSubmit.addEventListener('click', function() {
      //       // Lakukan pencarian atau tindakan lainnya di sini
      //   });

      //   document.addEventListener('click', function(event) {
      //       if (!searchDropdown.contains(event.target) && !searchIcon.contains(event.target)) {
      //           searchDropdown.style.opacity = '0';
      //           searchDropdown.style.transform = 'translateY(-10px)';
      //           closeIcon.style.display = 'none';
      //           searchIcon.style.display = 'block';
      //           setTimeout(function() {
      //               searchDropdown.style.display = 'none';
      //           }, 300);
      //       }
      //   });
      // });



      document.addEventListener('DOMContentLoaded', function() {
      const cartItems = document.getElementById('cart-items');
      const cartButton = document.getElementById('cart-button');
        const cartDropdown = document.getElementById('cart-dropdown');

        cartButton.addEventListener('mouseover', function() {
            openCart();
        });

        cartDropdown.addEventListener('mouseover', function() {
            openCart();
        });

        cartDropdown.addEventListener('mouseleave', function(event) {
            if (!cartButton.contains(event.relatedTarget)) {
                closeCart();
            }
        });

        function openCart() {
            cartDropdown.style.display = 'block';
            setTimeout(function() {
                cartDropdown.style.opacity = '1';
                cartDropdown.style.transform = 'translateY(0)';
            }, 10);
        }

        function closeCart() {
            cartDropdown.style.opacity = '0';
            cartDropdown.style.transform = 'translateY(10px)';
            setTimeout(function() {
                cartDropdown.style.display = 'none';
            }, 300);
        }
        cartButton.addEventListener('click', function() {
            toggleCart();
        });

        function toggleCart() {
            if (cartDropdown.style.display === 'block') {
                cartDropdown.style.opacity = '0';
                cartDropdown.style.transform = 'translateY(10px)';
                setTimeout(function() {
                    cartDropdown.style.display = 'none';
                }, 300);
            } else {
                cartDropdown.style.display = 'block';
                setTimeout(function() {
                    cartDropdown.style.opacity = '1';
                    cartDropdown.style.transform = 'translateY(0)';
                }, 10);
            }
        }

        function addItemToCart(itemName) {
            const newItem = document.createElement('div');
            newItem.textContent = itemName;
            newItem.className = 'cart-item'; // Menambahkan kelas CSS
            cartItems.appendChild(newItem); // Menambahkan item di akhir daftar
        }

        // Contoh penggunaan
        const addButton = document.getElementById('add-to-cart-button');
        addButton.addEventListener('click', function() {
            const itemName = prompt('Masukkan nama item:');
            if (itemName) {
                addItemToCart(itemName);
            }
        });
      });




      var marquee = document.getElementById("marquee");
var marqueeContainer = document.getElementById("marquee-container");

function resetMarqueePosition() {
  marquee.style.transform = "translateX(100%)";
  setTimeout(function () {
    var transitionDuration = "10s"; // Ganti dengan durasi yang diinginkan (misalnya, "30s" untuk 30 detik)
    marquee.style.transition = "transform " + transitionDuration;
    marquee.style.transform = "translateX(0)";
    void marquee.offsetWidth; // Trigger reflow
    marquee.style.transition = "transform " + transitionDuration; // Remove the transition
  }, 1);
}


function handleScroll() {
  var header = document.getElementById("header");
  var headerHeight = header.offsetHeight;

  if (window.scrollY > headerHeight) {
    marqueeContainer.style.position = "fixed";
    marqueeContainer.style.top = "-20px";
  } else {
    marqueeContainer.style.position = "relative";
    marqueeContainer.style.top = "";
  }
}

// Panggil resetMarqueePosition() saat halaman dimuat
window.addEventListener("load", resetMarqueePosition);

// Panggil handleScroll() saat halaman dimuat (untuk menyesuaikan tampilan awal)
window.addEventListener("load", handleScroll);

// Panggil resetMarqueePosition() saat marquee selesai berjalan
marquee.addEventListener("animationiteration", resetMarqueePosition);

// Tambahkan event listener untuk memantau scroll
window.addEventListener("scroll", handleScroll);


      </script>


<main>
  @yield('content')
</main>

@include('layout.footer')