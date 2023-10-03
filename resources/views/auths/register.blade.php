<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/img/logo/logo2.png" rel="icon">
    <link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            background-color: #f1f1f1;
        }

        .login-container {
            /* background-color: #d0d0d0; */
            padding: 40px;
            max-height: 100vh;
            overflow: hidden;
        }

        .login-container h1 {
            font-family: "Times New Roman", Times, serif;
            margin-top: 7%;
            margin-bottom: 20px;
            color: #4A4847;
            font-size: 30px;
            margin-right: 10%;
            margin-left: 10%;
        }

        .login-container h4 {
            font-family: Georgia, serif;
            margin-bottom: 30px;
            font-size: 17px;
            color: #696969;
            margin-right: 10%;
            margin-left: 10%;
        }

        .form-group {
            margin-right: 10%;
            margin-left: 10%;
            padding: 1%;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            font-family: Garamond, serif;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-groupz button {
            padding: 5px 20px;
            background-color: #DCDCDC;
            color: black;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 0px;
        }

        .form-groupz img {
            width: 25px;
            height: auto;
            margin-right: 2px;
            margin-bottom: 5px;
        }

        .form-groupz button:hover {
            background-color: Gray;
        }

        .login-terbaru {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #4169E1;
        }

        .form-groupsi {
            text-align: center;
        }

        .form-groupsi img {
            width: 30%;
            height: auto;
            margin: 15px;
        }

        .clear {
            clear: both;
        }

        .back-to-home {
            position: absolute;
            top: 15px;
            right: 10px;
        }

        .input-icon {
            position: relative;
        }

        
        .custom-alert {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    border-radius: 8px;
    /* padding: 10px; */
    margin-top: -30px;
}

.custom-alert ul {
    list-style-type: disc;
    margin-left: 10px;
}

.custom-alert ul li {
    margin-bottom: 5px;
    color: #721c24;
}

.custom-alert h4 {
    font-weight: bold;
    margin-top: 0;
    color: #721c24;
}

.custom-alert .close {
    position: absolute;
    top: 5px;
    right: 10px;
    font-size: 18px;
    color: #721c24;
    cursor: pointer;
}

        
.modal-content {
            border-radius: 10px; /* Tambahkan sudut bulat */
        }
        .modal-header {
            background-color: #f8d7da; /* Warna latar belakang header */
            color: #721c24; /* Warna teks header */
            border-bottom: none; /* Hapus border bawah header */
            border-radius: 10px 10px 0 0; /* Tambahkan sudut bulat hanya di bagian atas */
        }
        .modal-footer {
            border-top: none; /* Hapus border atas footer */
            border-radius: 0 0 10px 10px; /* Tambahkan sudut bulat hanya di bagian bawah */
        }
        
    </style>
</head>

<body>
    <div class="login-container col-lg-6 col-md-12">
        @if(session('sukses'))
        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-check"></i> Sukses :</h5>
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session('error'))
        <div class="callout callout-danger alert alert-danger alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-info"></i> Peringatan :</h5>
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="error-container">
                            <h2 class="error-title">Pesan Error</h2>
                            <div class="error-message">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="registration-form" method="POST" action="{{ route('registration.submit') }}">
        <h1><strong> Daftar <br> Akun Class Program</strong></h1>
      
        <h4>Sudah punya akun?<a href="login">Masuk, yuk!</a>  </h4>
        <center>
        <div class="form-groupz">
        <button type="submit">
                <span><img src="assets/img/logo/gogle.png"></span>  Masuk dengan Google
            </button>
            </div>
            </center>
            <hr style="margin-right:10%;margin-left:10%; border: 1px solid grey;">
        @csrf
        <div class="form-group">
            <label for="email-step-1">Email:</label>
            <input name="email" type="email" class="form-control bg-light" id="email-step-1" placeholder="email" required oninvalid="this.setCustomValidity('Pastikan anda sudah mengisikan email dengan format yang benar !')" oninput="setCustomValidity('')">

        </div>
        <div class="form-group"> 
            <label for="name">Nama:</label>
            <input name="name" type="text" class="form-control bg-light" id="name" placeholder="Nama" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
         </div> 
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
                <input name="password" type="password" class="form-control bg-light" id="password" placeholder="Password">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="background-color:#4169E1;height:38px;">
                        <i class="fas fa-eye" id="password-toggle-icon"></i>
                    </button>
                </div>
            </div>
        </div>
       
        
        
        <!-- Tambahkan ID next-button-step-1 pada tombol Selanjutnya berikut -->
        <button type="button" id="next-button-step-1" style="border-radius: 50px; background-color: #007bff; color: #ffffff; padding: 10px 20px; font-size: 16px; cursor: pointer;">></button>
    </form>

    <!-- Step 2: Name Input (Initially hidden) -->
    <div id="step-2" style="display: none;">
        <form id="registration-form-2" method="POST" action="{{ route('registration.submit') }}" novalidate>
            @csrf
            
      
         {{-- <div class="form-group"> --}}
            <label for="ttl">Tanggal Lahir:</label>
            <input name="ttl" type="date" class="form-control bg-light" id="ttl"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
        {{-- </div> --}}
        {{-- <div class="form-group">  --}}
            <label for="asal">Alamat:</label>
            <input name="asal" type="text" class="form-control bg-light" id="asal" placeholder="Alamat" required>
        {{-- </div>  --}}
         {{-- <div class="form-group">  --}}
            <label for="nomer">Nomor HP:</label>
            <input name="nomer" type="number" class="form-control bg-light" id="nomer" placeholder="Nomor HP"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
         {{-- </div>                --}}
         {{-- <div class="form-group">  --}}
             <label for="jeniskelamin">jeniskelamin:</label>
             {{-- <input name="jeniskelamin" type="text" class="form-control bg-light" id="jeniskelamin" placeholder="Alamat"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')"> --}}
             
             <select name="jeniskelamin" id="jeniskelamin" class="form-control bg-light" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                <option value="laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select> 
        {{-- </div>  --}}
        {{-- <div class="form-group">  --}}
           <label for="kampus">Kampus</label>
           <input name="kampus" type="text" class="form-control bg-light" id="kampus" placeholder="Kampus"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
        {{-- </div>                --}}
        {{-- <div class="form-group">  --}}
           <label for="jurusan">Jurusan</label>
           <input name="jurusan" type="text" class="form-control bg-light" id="jurusan" placeholder="jurusan"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
        {{-- </div>                --}}
        {{-- <div class="form-group">  --}}
           <label for="semester">Semester</label>
           <input name="semester" type="number" class="form-control bg-light" id="semester" placeholder="Semester"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
        {{-- </div>                --}}
        
            <input type="hidden" name="email" id="email-step-2">
            <input type="hidden" name="password" id="password-step-2">
            <input type="hidden" name="name" id="name-step-2">
            {{-- <button type="button" id="prev-button-step-2">
                <
            </button> --}}
            <button type="submit" style="margin-top: 10px;border-radius: 50px; background-color: #007bff; color: #ffffff; padding: 10px 20px; font-size: 16px; cursor: pointer;">Daftar</button>

        </form>
    </div>
    </div>
    

    <!-- Step 3: Address Input (Initially hidden) -->
  
    <div class="login-terbaru col-lg-6 col-md-0">
        <div class="back-to-home"><a href="/" style="color:white;">Kembali ke Homepage</a></div>
        <p></p>
        <center>
            <div class="form-groupsi">
                <img src="assets/img/about.jpg" alt="">
                <img src="assets/img/about.jpg" alt="">
            </div>
        </center>
        <center>
            <div class="form-groupsi">
                <img src="assets/img/about.jpg" alt="">
                <img src="assets/img/about.jpg" alt="">
            </div>
        </center>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        @if ($errors->any())
            $('#errorModal').modal('show');
        @endif

        // Menambahkan event listener untuk tombol close
        $('#errorModal .btn btn-danger').click(function() {
            $('#errorModal').modal('hide');
        });
    });
</script>
    <script>
        // Mendapatkan referensi elemen-elemen yang dibutuhkan
        const emailInputStep1 = document.getElementById('email-step-1');
        const password = document.getElementById('password');
        const nameInput = document.getElementById('name');
        const nextButtonStep1 = document.getElementById('next-button-step-1');
        const step2 = document.getElementById('step-2');
        const ttlInput = document.getElementById('ttl');
        const asalInput = document.getElementById('asal');
        const nomerInput = document.getElementById('nomer');
        const jeniskelaminInput = document.getElementById('jeniskelamin');
        // const semesterInput = document.getElementById('semester');
        const prevButtonStep2 = document.getElementById('prev-button-step-2');
        const nextButtonStep2 = document.getElementById('next-button-step-2');
        const step3 = document.getElementById('step-3');
        
        
        // Menambahkan event listener ke tombol selanjutnya pada langkah 1
        nextButtonStep1.addEventListener('click', () => {
            // Validasi email (Anda dapat menambahkan validasi lainnya di sini)
            if (emailInputStep1.checkValidity()&&
            password.checkValidity()
            ) {
                // Sembunyikan langkah 1 dan tampilkan langkah 2
                document.getElementById('registration-form').style.display = 'none';
                step2.style.display = 'block';
                // Transfer nilai email ke langkah berikutnya
                document.getElementById('email-step-2').value = emailInputStep1.value;
                document.getElementById('password-step-2').value = password.value;
                document.getElementById('name-step-2').value = nameInput.value;
            } else {
                // Tampilkan pesan kesalahan jika email tidak valid
                alert('Email tidak valid. Mohon periksa kembali.');
            }
        });
    
        // Menambahkan event listener ke tombol selanjutnya pada langkah 2
        nextButtonStep2.addEventListener('click', () => {
    // Validasi semua bidang sebelum beralih ke langkah berikutnya
    // nextButtonStep2.addEventListener('click', () => {
    // Validasi semua bidang sebelum beralih ke langkah berikutnya
    if (
        nameInput.checkValidity() &&
        ttlInput.checkValidity() &&
        asalInput.checkValidity() &&
        nomerInput.checkValidity() &&
        jeniskelaminInput.checkValidity()
    ) {
        // Semua bidang telah valid, lanjutkan ke langkah berikutnya
        step2.style.display = 'none';
        step3.style.display = 'block';
        // Transfer email input value ke langkah berikutnya
        document.getElementById('email-step-3').value = emailInputStep1.value;
        // Transfer nilai password input ke langkah berikutnya
        document.getElementById('password-step-3').value = password.value;
        document.getElementById('name-step-3').value = nameInput.value;
    }
});

    
        // Menambahkan event listener ke tombol kembali pada langkah 2
        prevButtonStep2.addEventListener('click', () => {
            // Sembunyikan langkah 2 dan tampilkan langkah 1
            step2.style.display = 'none';
            document.getElementById('registration-form').style.display = 'block';
        });
    
        // ... tambahkan event listener lainnya untuk langkah-langkah lainnya ...
    </script>
    
    
    <script>
         // Menggunakan nama variabel yang berbeda untuk password input
    var passwordInputToggle = document.getElementById("password");
    var togglePasswordButton = document.getElementById("togglePassword");

    togglePasswordButton.addEventListener("click", function () {
        if (passwordInputToggle.type === "password") {
            passwordInputToggle.type = "text";
            togglePasswordButton.classList.add("show-password");
        } else {
            passwordInputToggle.type = "password";
            togglePasswordButton.classList.remove("show-password");
        }
    });
    </script>
</body>
</html>