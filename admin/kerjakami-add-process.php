<?php 
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$kategori = $_POST['kategori'];
$lokasi_kegiatan = $_POST['lokasi_kegiatan'];
$sub_kegiatan1 = $_POST['sub_kegiatan1'];
$nama_foto1 = $_FILES['nama_foto1']['name'];
$nama_foto2 = $_FILES['nama_foto2']['name'];
$sub_kegiatan2 = $_POST['sub_kegiatan2'];
$nama_foto3 = $_FILES['nama_foto3']['name'];
$nama_foto4 = $_FILES['nama_foto4']['name'];
$sub_kegiatan3 = $_POST['sub_kegiatan3'];
$nama_foto5 = $_FILES['nama_foto5']['name'];
$nama_foto6 = $_FILES['nama_foto6']['name'];


if($nama_foto1 != ""){
    $ekstensi_diperbolehkan = array ('png', 'jpg','jpeg');
    // Foto 1 - 2 (sub kegiatan 1)
    $x1 = explode('.',$nama_foto1);
    $ekstensi1 = strtolower(end($x1));
    $file_tmp1 = $_FILES['nama_foto1']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_foto_baru1 = $angka_acak.'-'.$nama_foto1;

    $x2 = explode('.',$nama_foto2);
    $ekstensi2 = strtolower(end($x2));
    $file_tmp2 = $_FILES['nama_foto2']['tmp_name'];
    if ($nama_foto2 != NULL){
        $nama_foto_baru2 = $angka_acak.'-'.$nama_foto2;
        } else {
            $nama_foto_baru2 = NULL ;
        }

    // Foto 3 - 4 (sub kegiatan 1)
    $x3 = explode('.',$nama_foto3);
    $ekstensi3 = strtolower(end($x3));
    $file_tmp3 = $_FILES['nama_foto3']['tmp_name'];
    $angka_acak = rand(1, 999);
    if ($nama_foto3 != NULL){
    $nama_foto_baru3 = $angka_acak.'-'.$nama_foto3;
    } else {
        $nama_foto_baru3 = NULL ;
    }

    $x4 = explode('.',$nama_foto4);
    $ekstensi4 = strtolower(end($x4));
    $file_tmp4 = $_FILES['nama_foto4']['tmp_name'];
    if ($nama_foto4 != NULL){
        $nama_foto_baru4 = $angka_acak.'-'.$nama_foto4;
        } else {
            $nama_foto_baru4 = NULL ;
        }

    // Foto 5 - 6 (sub kegiatan 1)
    $x5 = explode('.',$nama_foto5);
    $ekstensi5 = strtolower(end($x5));
    $file_tmp5 = $_FILES['nama_foto5']['tmp_name'];
    $angka_acak = rand(1, 999);
    if ($nama_foto5 != NULL){
    $nama_foto_baru5 = $angka_acak.'-'.$nama_foto5;
    } else {
        $nama_foto_baru5 = NULL ;
    }

    $x6 = explode('.',$nama_foto6);
    $ekstensi6 = strtolower(end($x6));
    $file_tmp6 = $_FILES['nama_foto6']['tmp_name'];
    if ($nama_foto6 != NULL){
        $nama_foto_baru6 = $angka_acak.'-'.$nama_foto6;
        } else {
            $nama_foto_baru6 = NULL ;
        }

    if(in_array($ekstensi1, $ekstensi_diperbolehkan) === true){
        move_uploaded_file($file_tmp1, '../public/'.$kategori.'/'.$nama_foto_baru1);
        move_uploaded_file($file_tmp2, '../public/'.$kategori.'/'.$nama_foto_baru2);
        if ($nama_foto5 != NULL){
        move_uploaded_file($file_tmp3, '../public/'.$kategori.'/'.$nama_foto_baru3);
        }
        move_uploaded_file($file_tmp4, '../public/'.$kategori.'/'.$nama_foto_baru4);
        if ($nama_foto5 != NULL){
        move_uploaded_file($file_tmp5, '../public/'.$kategori.'/'.$nama_foto_baru5);
        }
        move_uploaded_file($file_tmp6, '../public/'.$kategori.'/'.$nama_foto_baru6);

        $query = "INSERT INTO kerjakami (kategori, lokasi_kegiatan, sub_kegiatan1, nama_foto1, nama_foto2, sub_kegiatan2, nama_foto3, nama_foto4, sub_kegiatan3, nama_foto5, nama_foto6) VALUES ('$kategori', '$lokasi_kegiatan','$sub_kegiatan1', '$nama_foto_baru1', '$nama_foto_baru2','$sub_kegiatan2', '$nama_foto_baru3', '$nama_foto_baru4','$sub_kegiatan3', '$nama_foto_baru5', '$nama_foto_baru6')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        }
        else {
            if ($kategori == "sd"){
                echo "<script>alert('Data Berhasil ditambahkan!');window.location='kerjakami-sd.php'</script>";
            }
            else {
                echo "<script>alert('Data Berhasil ditambahkan!');window.location='kerjakami-tk.php'</script>";
            }
        }
    } else {
        if ($kategori == "sd"){
            echo "<script>alert('Ekstrensi hanya bisa jpg png dan jpeg!');window.location='kerjakami-add.php?kategoriadd=sd'</script>";
        }
        else {
            echo "<script>alert('Ekstrensi hanya bisa jpg png dan jpeg!');window.location='kerjakami-add.php?kategoriadd=tk'</script>";
        }
    }
} else {
    if ($kategori == "sd"){
        echo "<script>alert('Silahkan tambahkan minimal 1 foto pada foto before!');window.location='kerjakami-add.php?kategoriadd=sd'</script>";
    }
    else {
        echo "<script>alert('Silahkan tambahkan minimal 1 foto pada foto before!');window.location='kerjakami-add.php?kategoriadd=tk'</script>";
    }
}

?>