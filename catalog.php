<?php
include 'config/config.php';

$produk = query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Offset & Printing</title>

  <link href="./main.3da94fde.css" rel="stylesheet">

  <style>
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .card {
      border: 1px solid #dee2e6;
      border-radius: 8px;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    footer {
      background-color: #e9ecef;
    }
  </style>
</head>

<body class="bg-info">

  <!-- Add your content of header -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">OkePrinting</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./project.php">Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./customer.php">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./catalog.php">Price List</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="./pemesanan.php">Contact Us</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="./dashboard/" target="_blank">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">

  </div>
  <div class="container mt-5">
    <div class="section-container">
      <h2 class="text-center mt-5 p-5 text-white font-weight-bold">Katalog</h2>
      <!-- Tambahkan kelas "row" untuk mengatur produk ke dalam baris -->
      <div class="row">
        <?php foreach ($produk as $item) : ?>
          <div class="col-md-4 mb-4">
            <div class="card">
              <?php if ($item['gambar_produk']) : ?>
                <img src="storage/img/produk/<?= $item['gambar_produk']; ?>" class="card-img-top" alt="...">
              <?php else : ?>
                <img src="storage/img/produk/defaultProductImage.png" class="card-img-top" alt="...">
              <?php endif; ?>
              <div class="card-body">
                <h5 class="card-title"><?= $item['nama_produk']; ?></h5>
                <p class="card-text">Harga: Rp.<?= number_format($item['harga_produk']); ?></p>
                <p class="card-text">Ketersediaan Stok: <?= $item['jumlah_produk']; ?></p>
                <p class="card-text"><?= htmlspecialchars_decode($item['deskripsi']); ?></p>
                <?php
                // Membuat link WhatsApp dengan pesan teks dan gambar
                $pesan = "Haloo!! Apakah saya bisa memesan " . $item['nama_produk'];
                $pesan = rawurlencode($pesan);
                $linkWhatsApp = "https://wa.me/+6289528580866?text={$pesan}%0A%0A(Disertakan gambar dibawah)%0Ahttp://localhost/storage/img/produk/{$item['gambar_produk']}";
                ?>
                <a href="<?= $linkWhatsApp; ?>" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>
  </div>


  <footer class="footer mt-auto py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h6>Tentang Kami</h6>
          <p>OkePrint
            <br>
            Solusi cetak terbaik dengan teknologi terkini dan hasil berkualitas.</p>
        </div>
        <div class="col-md-4">
          <h6>Kontak Kami</h6>
          <p>Email: percetakan.chintami@gmail.com
            <br>
            Telepon : 0823-8457-2222
            <br>
            WhatsApp : 0823-8457-2222
            <br>
            Alamat Kantor : Jl. Dahlia No.15A-B, Sukajadi, Kec. Sukajadi, Kota Pekanbaru, Riau 28121
          </p>
        </div>
        <div class="col-md-4">
          <!-- Ikon media sosial menggunakan Font Awesome -->
          <h6>Follow Kami</h6>
          <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i> Percetakan Chintami</a>
          <br>
          <a href="https://www.instagram.com/percetakan.chintami/" target="_blank"><i class="fa-brands fa-instagram"></i> Percetakan Chintami</a>
          <br>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <!-- Hak cipta -->
      <span class="text-muted">© 2024 OkePrinting. All rights reserved.</span>
    </div>
  </footer>
  <!-- Bootstrap JS dan script lainnya -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-y5vFBh5DM4PcYz0eBT6StDjE+o3fuCvX5GYu9eWXFzpKlkZ1kR5oF04Jw1W8p4l" crossorigin="anonymous"></script>
  <script src="./main.4c6e144e.js"></script>
</body>

</html>