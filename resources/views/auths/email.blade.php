<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
     body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            padding: 40px;
            width: 100%;
            max-width: 500px;
            background-color: transparent;
            border-radius: 10px;
            /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); */
        }


        .forgot-password {
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }

        .message-container {
            text-align: center;
            margin-top: 20px;
        }

        .message {
            font-size: 18px;
            width: 70%;
            padding: 10px;
            border-radius: 10px;
            margin: 10px auto;
            color: #fff;
            text-align: center;
        }

        .success-message {
            background-color: #4CAF50;
        }

        .error-message {
            background-color: #ff0000;
        }

        .input-label {
            font-size: 16px;
            margin-top: 15px;
            text-align: left;
            color: #333;
        }

        .form-group {
            margin-top: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
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
    <a class="back-to-home" href="/ ">Kembali ke Homepage</a>
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
        <p>Periksa Inbox email kamu, karena kami telah mengirimkan link untuk mengganti password akun-mu.</p>

        <p>Belum mendapatkan email?</p>
     <form action="{{ route('proses-kirim-ulang-email') }}" method="POST">
        @csrf
        <input type="hidden" name="email" value="{{ $emailSebelumnya }}">
        <div class="form-group" style="text-align: center;">
            <button type="submit">Kirim Ulang Email</button>
        </div>
    </form>
    
</body>


</html>