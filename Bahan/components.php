<?php 
include '../config.php';

$produk = query("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Offset & Printing</title>  

<link href="./main.3da94fde.css" rel="stylesheet"></head>


<body>

 <!-- Add your content of header -->

<header>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">OkePrinting</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link"href="../Bahan/home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Bahan/project.php">Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Bahan/components.php">Price List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<body class="bg-info">
<!-- Add your site or app content here -->
<div class="container">
  
  <div class="section-container">
    <a href="produk/tambah_produk.php">
      <button type="button" class="btn btn-primary">Tambah Produk</button>
    </a>
    <div class="template-example">
          <h2 class="template-title-example text-center">Katalog</h2>
          <div class="album py-5 bg-body-tertiary">
    <div class="container">
<!-- Gambar Kolom -->
    <div class="card" style="width: 30rem;">
      <img src="../images/brosure.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brosur</h5>
        <p class="card-text">
            Ukuran    : A4<br>
            Bahan     : Art Paper 120gr<br>
            Pemesanan : Min 1 Rim A4 (500lbr)
        </p>
        <a href="https://wa.me/082384572222?text=Haloo!!%20Apakah%20saya%20bisa%20memesan%20brosur.%0A%0A(Disertakan%20gambar%20dibawah)" target="../images/brosure.jpg" class="btn btn-primary">Pesan Sekarang</a>
      </div>
    </div>
    <div class="card" style="width: 30rem;">
      <img src="../images/nota.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brosur</h5>
        <p class="card-text">
            Ukuran    : 1/4 Folio<br>
            Bahan     : NCR<br>
            Pemesanan : Min 1 Rim (40buku)
        </p>
        <a href="https://wa.me/082384572222?text=Haloo!!%20Apakah%20saya%20bisa%20memesan%20faktur%20ukuran%201/4%20folio.%0A%0A(Disertakan%20gambar%20dibawah)" target="../images/nota.jpg" class="btn btn-primary">Pesan Sekarang</a>
      </div>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
 <script type="text/javascript" src="./main.4c6e144e.js"></script>
</body>

</html>