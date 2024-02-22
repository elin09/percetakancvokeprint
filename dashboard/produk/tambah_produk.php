<?php
session_start();

if (!isset($_SESSION["login"])) {
 header("Location: ../../auth/index.php");
 exit;
}
include '../../config/config.php';
if (isset($_POST["submit"])) {
 if (tambah_produk($_POST) > 0) {
  echo "
         <script>
             alert('Data berhasil ditambah');
             document.location.href='../produk/index.php';
         </script>
     ";
 } else {
  // var_dump($_POST['submit']);
  echo "
         <script>
             alert('Data gagal ditambah');
             document.location.href='../produk/index.php';
         </script>
     ";
 }
}

?>

<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Oke Print | Dashboard</title>


 <!-- Bootstrap core CSS -->
 <link href="../../assets/style/dashboard/bootstrap.min.css" rel="stylesheet">
 </style>


 <!-- Custom styles for this template -->
 <link href="../../assets/style/dashboard/dashboard.css" rel="stylesheet">


 <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
 <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<style>
 trix-toolbar [data-trix-button-group='file-tools'] {
  display: none
 }
</style>

<body>

 <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 mb-2 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Oke Print</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-primary w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav bg-danger">
   <div class="nav-item text-nowrap">
    <form action="../../auth/logout.php" method="post">
     <button type="submit" class="nav-link px-3 py-3 bg-danger border-0">Logout <span data-feather="log-out"></span>
     </button>
    </form>
   </div>
  </div>
 </header>


 <div class="container-fluid">
  <div class="row">
   <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link " href="../index.php">
        <span data-feather="home"></span>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link active" aria-current="page" href="../produk/index.php">
        <span data-feather="file-text"></span>
        My Products
       </a>
      </li>
     </ul>
    </div>
   </nav>

   <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Produk</h1>
    </div>
    <a href="../produk/index.php" class="btn btn-success"> <span data-feather="arrow-left"></span>Back</a>
    <div class="col-lg-8">
     <form method="post" action="" class="mb-5" enctype="multipart/form-data">

      <div class="mb-3">
       <label for="nama_produk" class="form-label">Nama produk</label>
       <input type="text" class="form-control" id="nama_produk" name="nama_produk" required autofocus">

      </div>

      <div class="mb-3">
       <label for="harga_produk" class="form-label">Harga</label>
       <input type="number" class="form-control " id="harga_produk" name="harga_produk" required">
      </div>
      <div class="mb-3">
       <label for="jumlah_produk" class="form-label">Harga</label>
       <input type="number" class="form-control " id="jumlah_produk" name="jumlah_produk" required">
      </div>
      <div class="mb-3">
       <label for="gambar_produk" class="form-label">Gambar produk</label>
       <?php if (!empty($produk['gambar_produk'])) : ?>
        <img src="../../storage/img/produk/<?= $produk['gambar_produk'] ?>" id="img-preview" width="80px" alt="Preview Gambar">
       <?php else : ?>
        <img id="img-preview" width="80px" alt="Preview Gambar" style="display: none;">
       <?php endif; ?>
       <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" onchange="previewImage()">
      </div>
      <div class="mb-3">
       <label for="deskripsi" class="form-label">Deskripsi</label>
       <input id="body" type="hidden" name="deskripsi">
       <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Save</button>
     </form>
    </div>
   </main>

  </div>

 </div>
 <?php

 ?>


 <script src="../../assets/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
 </script>
 <script src="../../assets/js/dashboard.js"></script>
 <script>
  function previewImage() {
   var input = document.getElementById('gambar_produk');
   var imgPreview = document.getElementById('img-preview');

   if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
     imgPreview.src = e.target.result;
     imgPreview.style.display = 'block';
    }

    reader.readAsDataURL(input.files[0]);
   } else {
    imgPreview.style.display = 'none';
   }
  }
 </script>

</body>

</html>



<a href="../auth/logout.php">hello</a>