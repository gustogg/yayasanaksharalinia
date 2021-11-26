<?php
require 'koneksi.php';

session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["hapus_data"];
$cek = "SELECT * FROM kerjakami WHERE id = '$id'";
$cek2 = mysqli_query($conn, $cek);
$cek3 = mysqli_fetch_assoc($cek2);
$hapus_data = "DELETE FROM kerjakami WHERE id = '$id'";
$hapus_berhasil = mysqli_query($conn, $hapus_data);

// Cek berhasil dihapus
if ($hapus_berhasil) {
    if ($cek3["kategori"] == "sd") {
        echo "<script> 
    alert('Data berhasil dihapus');
    document.location='kerjakami-sd.php';
    </script>";
    }
    else {
        echo "<script> 
    alert('Data berhasil dihapus');
    document.location='kerjakami-tk.php';
    </script>";
    }
    exit;
} else {
    if ($cek3["kategori"] == "sd") {
        echo "<script> 
    alert('Data gagal dihapus');
    document.location='kerjakami-sd.php';
    </script>";
    }
    else {
        echo "<script> 
    alert('Data gagal dihapus');
    document.location='kerjakami-tk.php';
    </script>";
    }
    exit;
}
