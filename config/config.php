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
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows  = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}


// function format harga
function rupiah($angka)
{
    $rupiah = "Rp. " . number_format($angka, 2, ',', '.');
    return $rupiah;
}

//pemesanan
function tambah_pemesanan($data)
{
    global $conn;
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $jumlah_pesanan = htmlspecialchars($data["jumlah_pesanan"]);
    $nama_pemesan = htmlspecialchars($data["nama_pemesan"]);
    $alamat_pemesan = htmlspecialchars($data["alamat_pemesan"]);
    $nomor_telpon = htmlspecialchars($data["nomor_telpon"]);

    $stokBarang = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$nama_produk'");
    $stk = mysqli_fetch_array($stokBarang);
    $stok = $stk['jumlah_produk'];
    $sisa = $stok - $jumlah_pesanan;
    if ($stok < $jumlah_pesanan) {

        echo "<script>
        alert('Maaf, stok tidak cukup');
        document.location.href='data_transaksi.php';
        </script>";
    } else {
        $query = "INSERT INTO `pemesanan` (`id_pemesanan`, `id_produk`, `jumlah_pesanan`, `nama_pemesan`, `alamat_pemesan`, `nomor_telpon`) 
                VALUES (NULL, '$nama_produk', '$jumlah_pesanan', '$nama_pemesan', '$alamat_pemesan', '$nomor_telpon')";
    }
    mysqli_query($conn, $query);
    if ($query) {
        $upstok = mysqli_query($conn, "UPDATE produk SET jumlah_produk='$sisa' WHERE id_produk='$nama_produk'");
    }
    return mysqli_affected_rows($conn);
}

//product
function tambah_produk($data)
{
    global $conn;
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga_produk = htmlspecialchars($data["harga_produk"]);
    $jumlah_produk = htmlspecialchars($data["jumlah_produk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $gambar_produk = upload();
    if (!$gambar_produk) {
        return false;
    }

    $query = "INSERT INTO produk (nama_produk, harga_produk, jumlah_produk, gambar_produk, deskripsi) VALUES
    ('$nama_produk', '$harga_produk','$jumlah_produk','$gambar_produk','$deskripsi')";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// upload foto
function upload()
{

    $nama_file = $_FILES['gambar_produk']['name'];
    $ukuran_file = $_FILES['gambar_produk']['size'];
    $error = $_FILES['gambar_produk']['error'];
    $tmp = $_FILES['gambar_produk']['tmp_name'];

    // cek gambar di upload apa tidak
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar dulu dong..')
    </script>";
        return false;
    }

    // cek jenis gambar yang di upload
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $nama_file);
    $ekstensiGambar = strtolower(end($ekstensiGambarValid));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Ekstensi gambar tidak sesuai..')
        </script>";
        return false;
    }

    // cek ukuran terlalu besar
    if ($ukuran_file > 6000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar..')
        </script>";
        return false;
    }

    //jika lolos upload
    // generate nama random untuk file foto agar tidak bentrok ada yang sama
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmp, '../../storage/img/produk/' . $namaFileBaru);

    return $namaFileBaru;
}

// hapus produk
function hapus_produk($id_produk)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id_produk");

    return mysqli_affected_rows($conn);
}

// ubah data produk
function ubah_produk($data)
{
    global $conn;
    $id_produk = $data["id_produk"];
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga_produk = htmlspecialchars($data["harga_produk"]);
    $gambar_lama = htmlspecialchars($data["gambar_lama"]);
    $jumlah_produk = htmlspecialchars($data["jumlah_produk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // cek gambar diubah apa tidak
    if ($_FILES["gambar_produk"]["error"] === 4) {
        $gambar_produk = $gambar_lama;
    } else {
        $gambar_produk = upload();
    }

    $query = "UPDATE produk SET
            nama_produk = '$nama_produk',
            harga_produk = '$harga_produk',
            jumlah_produk = '$jumlah_produk',
            gambar_produk = '$gambar_produk',
            deskripsi = '$deskripsi'
            WHERE id_produk = '$id_produk'
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



// auth
function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek usernamet sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {

        echo "<script>
        alert('username yang dipilih sudah terdaftar!')
        </script>";
        return false;
    }

    //cek konfirmasi password

    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
        </scrip>";
        return false;
    }

    //enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahka user baru ke database
    mysqli_query($conn, "INSERT INTO users (`username`, `password`) VALUES('$username', '$password')");

    return mysqli_affected_rows($conn);
}
