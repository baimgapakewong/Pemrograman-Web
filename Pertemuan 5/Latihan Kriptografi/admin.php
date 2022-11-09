<?php
session_start();
// cek apakah ada username
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Wonkk Apparel Store Indo</title>
  </head>
  <body>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/icon.jpg" alt="" width="50" height="50" class="me-2">
                Whonk <strong>Store</strong>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-4">
                <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search">
                <button class="btn btn-light" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Bantuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->
    
      <!-- Awal Carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/slide1.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/slide2.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/slide3.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Akhir Carousel -->

      <!-- AWal Dagangan -->
<div class="container" id="fasilitas">
    <div class="row">
        <div class="col text-center mb-3">
            <h3>Barang - Barang</h3>
        </div>
    </div>
  
    <div class="row">
        <!-- start gambar fasilitas 1 baris 1 -->
        <div class="col-md">
          <div class="card">
              <img src="assets/kaos t shirt.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">T-Shirt</h5>
                <p class="card-text">Cocok Untuk Dipakai Sehari Hari</p>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 1 baris 1 -->
        <!-- start gambar fasilitas 2 baris 1 -->
        <div class="col-md">
            <div class="card">
                <img src="assets/daster.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Daster</h5>
                  <p class="card-text">Nyaman Bergerak Dimanapun</p>
                </div>
              </div>
        </div>
        <!-- end gambar fasilitas 2 baris 1 -->
        <!-- start gambar fasilitas 3 baris 1 -->
        <div class="col-md">
            <div class="card">
                <img src="assets/gelang.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gelang</h5>
                  <p class="card-text">Tidak Mudah Berkarat dab Tahan Lama</p>
                </div>
              </div>
        </div>
        <!-- end gambar fasilitas 3 baris 1 -->
  
    </div>
    <div class="row">
        <!-- start gambar fasilitas 1 baris 1 -->
        <div class="col-md">
            <div class="card">
                <img src="assets/jaket.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jaket</h5>
                  <p class="card-text">Bisa Menyesuaikan Dengan Cuaca Sekitar</p>
                </div>
              </div>
        </div>
        <!-- end gambar fasilitas 1 baris 1 -->
        <!-- start gambar fasilitas 2 baris 1 -->
        <div class="col-md">
            <div class="card">
                <img src="assets/sweater.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sweater</h5>
                  <p class="card-text">Hanya di khusus kan untuk orang dewasa</p>
                </div>
              </div>
        </div>
        <!-- end gambar fasilitas 2 baris 1 -->
        <!-- start gambar fasilitas 3 baris 1 -->
        <div class="col-md">
          <div class="card">
              <img src="assets/cincin.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Cincin</h5>
                <p class="card-text">Nyaman dijari dan tak mudah berkarat</p>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 3 baris 1 -->
    
  </div>
        <!-- Akhir Dagangan-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>