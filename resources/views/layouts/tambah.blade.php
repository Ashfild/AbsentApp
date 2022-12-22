<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="{{ asset('css/tambah.css') }}" rel="stylesheet" type="text/css" >
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Karyawan</title>
</head>
<body>
  <header>
          <div class="container-header">
              <div class="left">
                  <h1>Dashboard</h1>
              </div>
          <div class="container-header">
              <div class="right">
                  <div align="right" class="container-nav-item">
                      <div class="nav1 ">
                          <a href="#" class="navbar-item navbar-active">BERANDA</a>
                      </div>
                      <div class="nav2 ">
                          <a href="#" class="navbar-item">FITUR</a>
                      </div>
                      <div class="nav-profile">
                          <img src="{{asset('img/profile.png')}}" alt="">
                      </div>
                      <div class="nav3">
                        <a href="#" class="navbar-item">></a>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <main>
      <div class="container-main">
        <div class="title">
            <h2>Tambahkan Data Karyawan</h2>
        </div>
        <div class="form">
            <div class="div">
                <h5>Nama</h5>
                <input type="name" class="input">
            </div>
            <div class="div">
                <h5>Divisi</h5>
                <input type="divisi" class="input">
            </div>
            <div class="div">
                <h5>Nomor Induk Pegawai</h5>
                <input type="nip" class="input">
            </div>
            <div class="div">
                <h5>Alamat Email</h5>
                <input type="email" class="input">
            </div>
        </div>
        <div class="upload">
            <img src="{{asset('img/upload.png')}}" alt="">
            <label for="file-ip-1">Upload Photo Karyawan</label>
            <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
        </div>
        <div class="btn">
            <input type="submit" class="btn" value="Tambah +">
        </div>
      </div>
      <script type="text/javascript" src="{{ asset('js/upload.js') }}"></script>
      </main>
</body>
</html>