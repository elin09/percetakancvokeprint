<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "okeprintfix";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

//query data 
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows  = [];
	
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	};
	return $rows;
}


    // function format harga
    function format_rupiah($angka){
        $rupiah = "Rp. " .number_format($angka,2, ',','.'); 
        return $rupiah;
    }
function tambah_produk($data){
    global $conn;
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga_produk = htmlspecialchars($data["harga_produk"]);
    $jumlah_produk = htmlspecialchars($data ["jumlah_produk"]);

    $query = "INSERT INTO produk VALUES
            (
                '','$nama_produk', '$harga_produk', '$jumlah_produk'
            )";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function tambah_pemesanan($data){
    global $conn;
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $jumlah_pesanan = htmlspecialchars($data["jumlah_pesanan"]);
    $nama_pemesan = htmlspecialchars($data ["nama_pemesan"]);
    $alamat_pemesan = htmlspecialchars($data ["alamat_pemesan"]);
    $nomor_telpon = htmlspecialchars($data ["nomor_telpon"]);

    $stokBarang = mysqli_query($conn,"SELECT * FROM produk WHERE id_produk = '$nama_produk'");
    $stk = mysqli_fetch_array($stokBarang);
    $stok = $stk['jumlah_produk'];
    $sisa = $stok - $jumlah_pesanan;
    if ($stok < $jumlah_pesanan) {

        echo"<script>
        alert('Maaf, stok tidak cukup');
        document.location.href='data_transaksi.php';
        </script>";

    }
    else{
    $query = "INSERT INTO `pemesanan` (`id_pemesanan`, `id_produk`, `jumlah_pesanan`, `nama_pemesan`, `alamat_pemesan`, `nomor_telpon`) 
                VALUES (NULL, '$nama_produk', '$jumlah_pesanan', '$nama_pemesan', '$alamat_pemesan', '$nomor_telpon')";
    }
    mysqli_query($conn, $query);
    if($query){
        $upstok = mysqli_query($conn,"UPDATE produk SET jumlah_produk='$sisa' WHERE id_produk='$nama_produk'");
    }
    return mysqli_affected_rows($conn);

}
 
?>