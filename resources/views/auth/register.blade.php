<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="{{ asset('css/auth.css') }}" rel="stylesheet" type="text/css" >
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
</head>
<body>
    <div class="grid-container">
        <div class="grid-container-row">
            <div class="zonk1"></div>
            <div class="zonk2"></div>
            <div class="logo">
                <img src="img/logo.png" alt="" srcset="">
                <h1>Absent Website</h1>
            </div>
            <div class="auth">
                <div class="toggle-register">
                    <a href="#">DAFTAR</a>
                </div>
                <div class="toggle-login">
                    <a href="#">MASUK</a>
                </div>
            </div>
            <div class="form">
                <div class="login-content">
                    <form action="index.html">
                        <div class="h2">
                        <h2>DAFTAR</h2>
                        </div>
                        <div class="h3">
                        <h3>Buat akun untuk absen kamu</h3>
                        </div>
                        <div class="input-div user">
                            <div class="div">
                            <h5>Username</h5>
                            <input type="name" class="input">
                            </div>
                            <div class="i">
                            <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="input-div envelope">
                            <div class="div">
                                <h5>Email</h5>
                                <input type="email" class="input" >
                            </div>
                            <div class="i"> 
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="input-div pass">
                            <div class="div">
                                <h5>Password</h5>
                                <input type="password" class="input">
                            </div>
                            <div class="i"> 
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                            <input type="submit" class="btn" value="Daftar">
                    </form>
                </div>
            </div>
        </div>
          <div class="hp">
            <img src="img/hp.png">
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
