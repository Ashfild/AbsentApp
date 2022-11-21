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
	<object data="img/biru.svg" type="img/svg+xml">	<img class="biru" src="img/biru.svg"></object>
	<img class="logo" src="img/icon.svg">

	<h3 class="txt-logo">Absent Website</h3>
    <div class="btn-box">
        <div id="btns"></div>
        <button type="button" class="toogle-btn">DAFTAR</button>
        <button type="button" class="toogle-btn1">MASUK</button>
    </div>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
                <div class="h2">
                    <h2>Daftar</h2>
                </div>
                <div class="h3">
                    <h3>Buat akun untuk absen kamu</h3>
                </div>
           		<div class="input-div one">
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
                    <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
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
            	<input type="submit" class="btn" value="Daftar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>