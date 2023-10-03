<!-- col-lg-6 col-md-6 mt-5 mt-md-0 -->
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

 

    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            /* justify-content: center; */
            align-items: center;
            /* min-height: 100vh; */
            background-color: #f1f1f1;
            
        }

        .login-container {
            background-color: #d0d0d0;
            /* border-radius: 10px; */
            /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); */
            /* height: 100% !important; */
            padding: 40px;
            
            /* width: 50%; */
            /* height: 100%;
            text-align: center; */
            /* text-align: center; */
    max-height: 100vh; /* Tambahkan baris ini */
   overflow: hidden;
        }

        .login-container h1 {
            font-family: "Times New Roman", Times, serif;
            margin-top: 7%;
            margin-bottom: 20px;
            /* margin-top: 5%; */
            color: 	#4A4847;
            /* padding:10%; */
            font-size:30px;
            margin-right:10%;
                margin-left:10%;
        }
        .login-container h4 {
            font-family: Georgia, serif;
            margin-bottom: 30px;
            font-size:17px;
            color: 	#696969;
            margin-right:10%;
                margin-left:10%;
           
        }

        .form-group {
            /* margin-bottom: 20px; */
                margin-right:10%;
                margin-left:10%;
                padding:1%;
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
            background-color:Gray;
        }


        /* .login-terbaru {
            background-color:red;
           
            padding: 40px;
             justify-content: center;
             align-items: center;
          
            text-align: center;
    max-height: 100vh;
   overflow: hidden;
        }
        .form-groupsi {
            
               width: 5px;
        }
        .form-groupsi img {
            justify-content: center;
             align-items: center;
            width: 100px;
            height: auto;
            margin-right: 2px;
            margin-bottom: 5px; 
        } */
        .login-terbaru {
            /* height:; */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
            background-color:#4169E1	 ;
            /* text-align: center;
            margin-top: 20px;  */
        }

        .form-groupsi {
            text-align: center;
        }

        .form-groupsi img {
            width: 30%; /* Sesuaikan ukuran gambar */
            height: auto;
            margin: 15px; /* Sesuaikan jarak antara gambar */
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


.dropdown-item {
    text-decoration: none; /* Menghapus garis bawah default pada tautan */
    color: #000; /* Warna teks saat tautan normal */
  }

  /* Gaya saat kursor berada di atas tautan */
  .dropdown-item:hover {
    background-color: transparent; /* Latar belakang saat kursor berada di atas tautan */
  }
/*  */
    </style>
</head>

<body>
   
<!-- <div class=""> -->
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
        <h1><strong> Selamat datang <br> di Class Program</strong></h1>
      
        <h4>Belum punya akun? <a href="register">Daftar yuk!</a>  </h4>
        <center>
        <div class="form-groupz">
        <button type="submit">
                <span><img src="assets/img/logo/gogle.png"></span> <a href="{{ url('auth/google') }}">  @csrf Masuk dengan Google</a>
            </button>
            </div>
            </center>
            <hr style="  margin-right:10%;
                margin-left:10%; border: 1px solid grey;">
      <form action="postlogin" method="POST">
        @csrf
        <div class="form-group">
    <label for="username"style="font-size:13px">Email:</label>
    <div class="input-icon">
        {{-- <input type="text" id="username" name="username" placeholder="Masukkan Email" required> --}}
        <input type="email" name="email" class="form_login" placeholder="email" required email oninvalid="this.setCustomValidity('Pastikan anda sudah mengisikan email dengan benar !')" oninput="setCustomValidity('')">
        <span class="input-icon__icon">
            <i class="fa fa-envelope"></i>
        </span>
    </div>
</div>
<div class="form-group">
    <label for="password"style="font-size:13px">Password:</label>
    <div class="input-icon">
        {{-- <input type="password" id="password" name="password" placeholder="Masukkan password" required> --}}
        <input id="password" type="password" name="password" class="form_login" placeholder="password" required oninvalid="this.setCustomValidity('Harap masukkan password !')" oninput="setCustomValidity('')">
        <span class="input-icon__icon">
            <i class="fa fa-lock"></i>
        </span>
    </div>
</div>
            <center>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <a href="/forgot-password" class="dropdown-item">Lupa password </a>  
            </center>
            <p>   </p>
            <br>
        </form>
    <!-- </div> -->
    </div>


    <div class="login-terbaru col-lg-6 col-md-0">
       
    <div class="back-to-home"><a href="/"style="color:white;">Kembali ke Homepage</a></div>
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
</body>

</html>