<?php


session_start();

if (!isset($_SESSION["login"])) {
 header("Location: ../../auth/index.php");
 exit;
}
include "../../config/config.php";

$id_produk = $_GET["id_produk"];

if (hapus_produk($id_produk) > 0) {

 echo "
    <script>
        alert('Data berhasil di hapus');
        document.location.href='../produk/index.php';
    </script>";
} else {
 echo "
    <script>
        alert('Data berhasil di hapus');
        document.location.href='../produk/index.php';
    </script>";
}
