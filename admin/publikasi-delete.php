<?php 
require 'koneksi.php';

$id = $_POST["hapus_data"];

$hapus_data = "DELETE FROM publikasi WHERE id = '$id'";
$hapus_berhasil = mysqli_query($conn, $hapus_data);

// Cek berhasil dihapus
if($hapus_berhasil){
    echo"<script> 
    alert('Data berhasil dihapus');
    document.location='publikasi.php';
    </script>";
} else {
    echo"<script> 
    alert('Data gagal dihapus');
    document.location='publikasi.php';
    </script>";
}
?>