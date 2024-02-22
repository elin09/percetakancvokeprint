<?php 
include '../config.php';

$pemesanan = query("SELECT  produk.nama_produk, produk.harga_produk, jumlah_pesanan, nama_pemesan,  alamat_pemesan, nomor_telpon
                                             FROM pemesanan
                                             JOIN produk ON pemesanan.id_produk = produk.id_produk");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="description" name="description" />
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png" />
    <link href="./assets/favicon.ico" rel="icon" />
    
    <title>Daftar Pemesan</title>
    
    <link href="./main.3da94fde.css" rel="stylesheet" />
  </head>
  
  <body class="bg-info">
    
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
          
          <nav class="navbar-fullscreen" id="navbar-middle">
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul class="navbar-fullscreen-links">
              <li><a href="home.php" title="">Home</a></li>
              <li><a href="project.php" title="">Contoh Design</a></li>
              <li><a href="daftar_pemesan.php" title="">Daftar Pemesan</a></li>
              <li><a href="components.php" title="">Cek List Harga</a></li>
              <li><a href="pemesanan.php" title="">Pemesanan</a></li>
              <li><a href="../logout.php" title="">Logout</a></li>
            </ul>
            
            <div class="footer-container">
              <p>
                <small>© SerasiOffset | Abadikan Momentmu di <a href="https://www.instagram.com/serasioffset_pku/">Serasi Offset</a></small>
              </p>
              <p class="footer-share-icons">
                <a href="https://www.instagram.com/serasioffset_pku/" class="fa-icon" title="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </p>
            </div>
          </nav>
        </div>
      </nav>
    </header>
    <br>
    <br>
     <br>
    <div class="container mt-5" >
      <div class="row">
        <div class="col-8">
        <table id="example" class="table table-striped" style="width:100%">
        <thead class="align-center">
            <tr>
                <th>Name Pemesan</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Pesanan</th>
                <th>Alamat Pemesan</th>
                <th>Nomor Telpon Pemesan</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($pemesanan as $row): ?>
            <tr>
                <td><?= $row['nama_pemesan']; ?></td>
                <td><?= $row['nama_produk']; ?></td>
                <td><?= format_rupiah($row['harga_produk']); ?></td>
                <td><?= $row['jumlah_pesanan']; ?></td>
                <td><?= $row['alamat_pemesan']; ?></td>
                <td><?= $row['nomor_telpon']; ?></td>
            </tr>
            <?php endforeach ?>
            </tbody>
    </table>
        </div>
      </div>
    </div>
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function (event) {
        navbarToggleSidebar();
        closeMenuBeforeGoingToPage();
        navActivePage();
      });
      </script>
    <script type="text/javascript" src="./main.4c6e144e.js"></script>
    
  </body>
  </div>
  </html>
  