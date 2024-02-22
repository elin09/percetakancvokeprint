<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    footer {
      background-color: #e9ecef;
    }

    .icon-container {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      margin-bottom: 20px;
    }

    .icon-container i {
      font-size: 2em;
      /* Ubah ukuran ikon sesuai kebutuhan */
      color: #B82A44;
      /* Ubah warna ikon sesuai kebutuhan */
      margin-bottom: 10px;
    }

    .icon-container p {
      font-size: 1.2em;
      /* Ubah ukuran teks sesuai kebutuhan */
      color: #555;
      /* Ubah warna teks sesuai kebutuhan */
    }
  </style>
  <title>Home Page</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">OkePrinting</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./project.php">Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./customer.php">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./catalog.php">Price List</a>
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

  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="assets/images/logo/logo.png" width="500">
      <h1 class="display-4">DIGITAL PRINTING</h1>
      <p class="lead">Solusi cetak terbaik dengan teknologi terkini dan hasil berkualitas.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>About</h1>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col text-center icon-container">
        <i class="fas fa-thumbs-up"></i>
        <p>Hasil cetak yang kami berikan berkualitas dan didukung dengan mesin-mesin berteknologi terkini, hal ini bentuk keseriusan kami.</p>
      </div>
      <div class="col text-center icon-container">
        <i class="fas fa fa-clock"></i>
        <p>Dengan menggunakan mesin printing terkini membantu kami menyelesaikan pekerjaan cetak anda dengan jauh lebih cepat.</p>
      </div>
      <div class="col text-center icon-container">
        <i class="fas fa fa-heart"></i>
        <p>Selama kami mulai dari tahun 2015, kami dikenal selalu memberikan pelayan terbaik kami demi tercapainya kepuasan pelanggan.</p>
      </div>
      <div class="col text-center icon-container">
        <i class="fas fa fa-tag"></i>
        <p>Selain memberikan pelayanan terbaik kami kami juga selalu memberikan harga terbaik untuk anda, Murah tapi tetap Mewah.</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Partnership</h1>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <img src="assets/images/portfolio/bnn.png" width="100">
        <img src="assets/images/portfolio/hki.png" width="100">
        <img src="assets/images/portfolio/janjijiwa.png" width="100">
        <img src="assets/images/portfolio/kangaroo.jpg" width="100">
      </div>
    </div>
  </div>
  <br>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-rGgoNf5FZm9Pe2c7nc1us3fJZfGOO6RX1ElDjAu+sMHoTv3B9ACD1qTKO2D1qcb" crossorigin="anonymous"></script>
</body>

</html>