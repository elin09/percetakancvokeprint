<?php 
include '../../config.php';


if (isset($_POST["submit"])){
    if(tambah_produk($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil ditambah');
                document.location.href='../components.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal ditambah');
                document.location.href='../components.php';
            </script>
        ";
    }
}


?>

<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <title>Document</title>
</head>
<body>
<div class="container mt-5">
      <a href="../components.php">
        <button class="btn btn-primary">Kembali</button>
      </a>
    </div>
<div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-4">
                <h3>Form Produk</h3>
                <form name="" action="" method="post">
                <div class="input-group">
                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
                  </div>
                  <div class="input-group flex-nowrap">
                    <input type="number" name="harga_produk" class="form-control" placeholder="Harga Produk" >
                  </div>
                  <div class="input-group flex-nowrap">
                    <input type="number" name="jumlah_produk" class="form-control" placeholder="Jumlah Produk" >
                  </div>
                  <div>
                  <button type="submit" class="btn btn-primary" name="submit">Simpan Data</button> 
                  </div>
            </form>
              </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>