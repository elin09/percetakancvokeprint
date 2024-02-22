<?php
session_start();

if (!isset($_SESSION["login"])) {
 header("Location: ../../auth/index.php");
 exit;
}

include '../../config/config.php';
$produk = query("SELECT * FROM produk");
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


 <div class="container-fluid ">
  <div class="row">
   <nav id="sidebarMenu" class="col-md-3  col-lg-2 d-md-block bg-light sidebar collapse">
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
     <h1 class="h2">My Products</h1>
    </div>
    <div class="table-responsive col-lg-8">
     <a href="../produk/tambah_produk.php" class="btn btn-primary mb-3">Tambah Produk</a>
     <table class="table table-striped table-sm">
      <thead>
       <tr>
        <th scope="col">No. </th>
        <th scope="col" style="text-align: center; vertical-align: middle;">Gambar Produk</th>
        <th scope="col" style="text-align: center; vertical-align: middle;">Nama Produk</th>
        <th scope="col" style="text-align: center; vertical-align: middle;">Stok</th>
        <th scope="col" style="text-align: center; vertical-align: middle;">Harga</th>
        <th scope="col" style="text-align: center; vertical-align: middle;">Aksi</th>
       </tr>
      </thead>
      <tbody>
       <?php
       $per_page = 5; // Jumlah data per halaman
       $page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman saat ini
       // echo "Current Page: " . $page;
       $offset = ($page - 1) * $per_page; // Menghitung offset
       $query = "SELECT * FROM produk LIMIT $per_page OFFSET $offset";
       $produk = query($query);
       // echo "SQL Query: " . $query;

       // Menghitung total jumlah data dengan mengganti count query
       $total_rows = count(query("SELECT id_produk FROM produk")); // Menghitung total jumlah data
       $total_pages = ceil($total_rows / $per_page); // Total jumlah halaman
       // echo "Total Pages : " . $total_pages;
       ?>

       <?php $i = 1; ?>
       <?php foreach ($produk as $row) : ?>
        <tr>
         <td><?= $i ?></td>
         <td style="text-align: center; vertical-align: middle;">
          <?php if (isset($row["gambar_produk"]) && !empty($row["gambar_produk"])) : ?>
           <img src="../../storage/img/produk/<?= $row["gambar_produk"]; ?>" width="100px" alt="">
          <?php else : ?>
           <img src="../../storage/img/produk/defaultProductImage.png" width="100px" alt="Default Image">
          <?php endif; ?>
         </td>
         <td style="text-align: center; vertical-align: middle;"><?= $row["nama_produk"] ?></td>
         <td style="text-align: center; vertical-align: middle;"><?= $row["jumlah_produk"] ?></td>
         <td style="text-align: center; vertical-align: middle;"><?= rupiah($row["harga_produk"]) ?></td>
         <td style="text-align: center; vertical-align: middle;">
          <a href="edit_produk.php?id_produk=<?= $row["id_produk"]; ?>" class="badge bg-warning"><span data-feather="edit"></span></a>
          <a class="hapus badge bg-danger" href="hapus_produk.php?id_produk=<?= $row["id_produk"]; ?>" onclick="return confirm('yakin?');"><span data-feather="x-circle"></span></a>
         </td>
        </tr>
        <?php $i++ ?>
       <?php endforeach; ?>
      </tbody>
     </table>
    </div>

    <nav aria-label="Page navigation">
     <ul class="pagination">
      <?php if ($page > 1) : ?>
       <li class="page-item">
        <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
         <span aria-hidden="true">&laquo;</span>
        </a>
       </li>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
       <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
       </li>
      <?php endfor; ?>

      <?php if ($page < $total_pages) : ?>
       <li class="page-item">
        <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
         <span aria-hidden="true">&raquo;</span>
        </a>
       </li>
      <?php endif; ?>
     </ul>
    </nav>


   </main>
  </div>
 </div>


 <script src="../../assets/js/bootstrap.bundle.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
 </script>
 <script src="../../assets/js/dashboard.js"></script>
</body>

</html>



<a href="../auth/logout.php">hello</a>