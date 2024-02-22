<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Offset Printing</title>
  <link href="./main.3da94fde.css" rel="stylesheet" />
  <style>
    footer {
      background-color: #e9ecef;
    }
  </style>
</head>

<body>
  <header>
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
              <a class="nav-link active" aria-current="page" href="./project.php">Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./customer.php">Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./catalog.php">Price List</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link" href="./dashboard/" target="_blank">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="hero-full-container background-image-container white-text-container" style="background-image: url('./assets/images/img-1.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero-full-wrapper">
            <div class="text-content text-center"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="text-center section-container-spacer">
            <h2 class="with-project-number"><span class="project-number">01</span>Design Spanduk</h2>
          </div>

          <!-- Card pertama -->
          <div class="card mb-3">
            <img src="./assets/images/img-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Undangan Pernikahan</p>
            </div>
          </div>

          <!-- Kutipan -->
          <blockquote class="text-center large-spacing">
            <p>"Kilauan di cincin pertunangan ini tidak hanya melambangkan momen indah yang kita miliki, tetapi juga momen yang terbentang di depan. Will You Marry Me ?"</p>
            <small class="pull-right">Serasi Offset</small>
          </blockquote>

          <!-- Baris kedua (dua gambar) -->
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-3">
                <img src="./assets/images/krtunama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Kartu Nama</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3">
                <img src="./assets/images/xbanner1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Standing Banner Wedding</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Card terakhir -->
          <div class="card mb-3">
            <img src="./assets/images/mesin.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Mesin Digital Printing</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Navbar di bagian bawah -->
  <!-- <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <p class="h5 navbar-text">More Picture <i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>
        </div>
      </div>
    </div>
  </div> -->
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

  <!-- Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', function(event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
  </script>
  <script type="text/javascript" src="./main.4c6e144e.js"></script>

  <!-- Bootstrap JS dan script khusus lainnya di sini jika diperlukan -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-o3Fu2kqg9dB7v5LOeWt8eVPhKG3fb9Aq5byGpHhDz3IHpBpiGQQG2vA5r9Q0D2P" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2nUWqwo/uZd5qAy2HWxJ7gZfW8NBQb4Q" crossorigin="anonymous"></script>
</body>

</html>