<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="{{ asset('css/beranda-admin.css') }}" rel="stylesheet" type="text/css" >
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
          <div class="container-block">
              <div class="b1 block">
                <img class="img-block" src="{{asset('img/karyawan.png')}}" alt="">
                <h2 class="total">Total Karyawan</h2>
                <h2 class="angka-total">573</h2>
                <img class="line-block" src="{{asset('img/garis-block.svg')}}" alt="">
                <a class="tambah" href="#">+tambah karyawan</a>
              </div>
              <div class="b2 block">
              <img class="img-block" src="{{asset('img/check-in.png')}}" alt="">
                <h2 class="total">Total Check-In</h2>
                <h2 class="angka-total">35</h2>
                <img class="line-block" src="{{asset('img/garis-block.svg')}}" alt="">
              </div>
              <div class="b3 block">
              <img class="img-block" src="{{asset('img/check-out.png')}}" alt="">
                <h2 class="total">Total Check-Out</h2>
                <h2 class="angka-total">0</h2>
                <img class="line-block" src="{{asset('img/garis-block.svg')}}" alt="">
              </div>
          </div>
          <div class="container-table">
              <table>
                  <tr>
                      <th>No</th>
                      <th></th>
                      <th>Tugas Terselesaikan</th>
                      <th>Status</th>
                      <th>Jam</th>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td><img src="{{asset('img/kartini.png')}}" alt=""></td>
                      <td>Desain Konten Hari Kartini</td>
                      <td>Terselesaikan</td>
                      <td>12.02</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td><img src="{{asset('img/administrasi.png')}}" alt=""></td>
                      <td>Administrasi Karyawan</td>
                      <td>Tidak Selesai</td>
                      <td>11.59</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td><img src="{{asset('img/jadwal.png')}}" alt=""></td>
                      <td>Jadwal Konten</td>
                      <td>Tidak Selesai</td>
                      <td>11.07</td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td><img src="{{asset('img/instastory.png')}}" alt=""></td>
                      <td>Desain Instastory Makanan </td>
                      <td>Tidak Selesai</td>
                      <td>10.44</td>
                  </tr>
              </table>
          </div>
      </main>
</body>
</html>