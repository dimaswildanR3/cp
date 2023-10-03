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
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #d0d0d0;
        margin: 0;
        padding: 0;
    }

    .login-container {
        background-color: #d0d0d0;
        padding: 40px;
        max-height: 100vh;
        overflow: hidden;
        /* text-align: center; */
        border-radius: 10px;
    }

    .forgot-password {
        font-size: 24px;
        margin-bottom: 30px;
        text-align: center;
    }

    .input-label {
        font-size: 16px;
        margin-top: 10px;
        /* margin-bottom: 30px; */
        text-align: left;
        color: #555;
        /* margin-right:12%; */
                margin-left:11%;
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
            width: 50%; /* Adjust the width as needed */
            padding: 12px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 50px; /* Apply border radius 50px */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            margin-bottom: 0; /* Remove margin-bottom */
        }
    .form-group button:hover {
        background-color: #45a049;
    }

    .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
         
        }


        .message {
            font-size: 16px;
            width: 70%;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .success-message {
            background-color: #4CAF50;
            color: #ffffff;
        }

        .error-message {
            background-color: #ff0000;
            color: #ffffff;
        }
        .back-to-home {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .back-to-home a {
            text-decoration: none;
            color: #007bff;
        }
</style>
</head>

<body>
    <a class="back-to-home" href="">Kembali ke Homepage</a>
<div class="login-container col-lg-6 col-md-12">
    <div class="message-container"style=" text-align: center;">
        @if(session('sukses'))
        <div class="message success-message">
            <i class="fas fa-check"></i> {{ session('sukses') }}
        </div>
        @endif
        @if(session('error'))
        <div class="message error-message">
            <i class="fas fa-info"></i> {{ session('error') }}
        </div>
        @endif
    </div>
    <h4 class="forgot-password">Lupa Password?</h4>
    <div class="input-label">Masukkan email yang terdaftar di akunmu</div>
    <form action="{{ route('proses-kirim-email') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-icon">
                <input type="email" id="email" name="email" class="form_login" placeholder="Email"
                    required email
                    oninvalid="this.setCustomValidity('Pastikan anda sudah mengisikan email dengan benar !')"
                    oninput="setCustomValidity('')">
                <span class="input-icon__icon">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
        </div>
        <div class="form-group"style="text-align: center;">
            <button type="submit">Kirim</button>
        </div>
    </form>
    
</body>


</html>