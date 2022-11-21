<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="biru" src="img/biru.svg">
	<img class="logo" src="img/icon.svg">

	<h3 class="txt-logo">Absent Website</h3>
    <div class="btn-box">
        <div id="btns"></div>
        <button type="button" class="toogle-btn1">DAFTAR</button>
        <button type="button" class="toogle-btn">MASUK</button>
    </div>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
        <div class="h2">
          <h2>Masuk</h2>
        </div>
        <div class="h3">
          <h3>Masuk untuk kembali ke absen</h3>
        </div>
          <div class="input-div envelope">
           	<div class="div">
           		<h5>Email</h5>
           		<input type="email class="input">
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
            <input type="submit" class="btn1" value="Masuk">
      </form>
    </div>
  </div>
  <a class="forgot" href="#">Forgot Password?</a>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>