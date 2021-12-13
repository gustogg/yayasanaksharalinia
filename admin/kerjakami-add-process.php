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
// Sub Kegiatan 1
$sub_kegiatan1 = $_POST['sub_kegiatan1'];
$before_foto1 = $_FILES['before_foto1']['name'];
$before_foto2 = $_FILES['before_foto2']['name'];
$before_foto3 = $_FILES['before_foto3']['name'];
$before_foto4 = $_FILES['before_foto4']['name'];

$after_foto1 = $_FILES['after_foto1']['name'];
$after_foto2 = $_FILES['after_foto2']['name'];
$after_foto3 = $_FILES['after_foto3']['name'];
$after_foto4 = $_FILES['after_foto4']['name'];
// Sub kegiatan 2
$sub_kegiatan2 = $_POST['sub_kegiatan2'];
$nama_foto3 = $_FILES['nama_foto3']['name'];
$nama_foto4 = $_FILES['nama_foto4']['name'];
// sub kegiatan 3
$sub_kegiatan3 = $_POST['sub_kegiatan3'];
$nama_foto5 = $_FILES['nama_foto5']['name'];
$nama_foto6 = $_FILES['nama_foto6']['name'];
// sub kegiatan 4
$sub_kegiatan4 = $_POST['sub_kegiatan4'];
$nama_foto7 = $_FILES['nama_foto7']['name'];
$nama_foto8 = $_FILES['nama_foto8']['name'];
// sub kegiatan 5
$sub_kegiatan5 = $_POST['sub_kegiatan5'];
$nama_foto9 = $_FILES['nama_foto9']['name'];
$nama_foto10 = $_FILES['nama_foto10']['name'];

if ($before_foto1 != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    // Foto Before (sub kegiatan 1)
    $x1 = explode('.', $before_foto1);
    $ekstensi1 = strtolower(end($x1));
    $file_tmp1 = $_FILES['before_foto1']['tmp_name'];
    $angka_acak = rand(1, 999);
    $before_foto_baru1 = $angka_acak . '-' . $before_foto1;

    $x7 = explode('.', $before_foto2);
    $ekstensi7 = strtolower(end($x7));
    $file_tmp7 = $_FILES['before_foto2']['tmp_name'];
    if ($before_foto2 != NULL) {
        $before_foto_baru2 = $angka_acak . '-' . $before_foto2;
    } else {
        $before_foto_baru2 = NULL;
    }

    $x8 = explode('.', $before_foto3);
    $ekstensi8 = strtolower(end($x8));
    $file_tmp8 = $_FILES['before_foto3']['tmp_name'];
    if ($before_foto3 != NULL) {
        $before_foto_baru3 = $angka_acak . '-' . $before_foto3;
    } else {
        $before_foto_baru3 = NULL;
    }

    $x9 = explode('.', $before_foto4);
    $ekstensi9 = strtolower(end($x9));
    $file_tmp9 = $_FILES['before_foto4']['tmp_name'];
    if ($before_foto4 != NULL) {
        $before_foto_baru4 = $angka_acak . '-' . $before_foto4;
    } else {
        $before_foto_baru4 = NULL;
    }


    // Foto After (sub kegiatan 1)
    $x2 = explode('.', $after_foto1);
    $ekstensi2 = strtolower(end($x2));
    $file_tmp2 = $_FILES['after_foto2']['tmp_name'];
    if ($after_foto1 != NULL) {
        $after_foto_baru1 = $angka_acak . '-' . $after_foto1;
    } else {
        $after_foto_baru1 = NULL;
    }

    $x10 = explode('.', $after_foto2);
    $ekstensi10 = strtolower(end($x10));
    $file_tmp10 = $_FILES['after_foto2']['tmp_name'];
    if ($after_foto2 != NULL) {
        $after_foto_baru2 = $angka_acak . '-' . $after_foto2;
    } else {
        $after_foto_baru2 = NULL;
    }

    $x11 = explode('.', $after_foto3);
    $ekstensi11 = strtolower(end($x11));
    $file_tmp11 = $_FILES['after_foto3']['tmp_name'];
    if ($after_foto3 != NULL) {
        $after_foto_baru3 = $angka_acak . '-' . $after_foto3;
    } else {
        $after_foto_baru3 = NULL;
    }

    $x12 = explode('.', $after_foto4);
    $ekstensi12 = strtolower(end($x12));
    $file_tmp12 = $_FILES['after_foto4']['tmp_name'];
    if ($after_foto4 != NULL) {
        $after_foto_baru4 = $angka_acak . '-' . $after_foto4;
    } else {
        $after_foto_baru4 = NULL;
    }

    // Foto 3 - 4 (sub kegiatan 2)
    $x3 = explode('.', $nama_foto3);
    $ekstensi3 = strtolower(end($x3));
    $file_tmp3 = $_FILES['nama_foto3']['tmp_name'];
    if ($nama_foto3 != NULL) {
        $nama_foto_baru3 = $angka_acak . '-' . $nama_foto3;
    } else {
        $nama_foto_baru3 = NULL;
    }

    $x4 = explode('.', $nama_foto4);
    $ekstensi4 = strtolower(end($x4));
    $file_tmp4 = $_FILES['nama_foto4']['tmp_name'];
    if ($nama_foto4 != NULL) {
        $nama_foto_baru4 = $angka_acak . '-' . $nama_foto4;
    } else {
        $nama_foto_baru4 = NULL;
    }

    // Foto 5 - 6 (sub kegiatan 3)
    $x5 = explode('.', $nama_foto5);
    $ekstensi5 = strtolower(end($x5));
    $file_tmp5 = $_FILES['nama_foto5']['tmp_name'];
    if ($nama_foto5 != NULL) {
        $nama_foto_baru5 = $angka_acak . '-' . $nama_foto5;
    } else {
        $nama_foto_baru5 = NULL;
    }

    $x6 = explode('.', $nama_foto6);
    $ekstensi6 = strtolower(end($x6));
    $file_tmp6 = $_FILES['nama_foto6']['tmp_name'];
    if ($nama_foto6 != NULL) {
        $nama_foto_baru6 = $angka_acak . '-' . $nama_foto6;
    } else {
        $nama_foto_baru6 = NULL;
    }

    // Foto 7 - 8 (sub kegiatan 4)
    $x13 = explode('.', $nama_foto7);
    $ekstensi13 = strtolower(end($x13));
    $file_tmp13 = $_FILES['nama_foto7']['tmp_name'];
    if ($nama_foto7 != NULL) {
        $nama_foto_baru7 = $angka_acak . '-' . $nama_foto7;
    } else {
        $nama_foto_baru7 = NULL;
    }

    $x14 = explode('.', $nama_foto8);
    $ekstensi14 = strtolower(end($x14));
    $file_tmp14 = $_FILES['nama_foto8']['tmp_name'];
    if ($nama_foto8 != NULL) {
        $nama_foto_baru8 = $angka_acak . '-' . $nama_foto8;
    } else {
        $nama_foto_baru8 = NULL;
    }

    // Foto 9 - 10 (sub kegiatan 5)
    $x15 = explode('.', $nama_foto9);
    $ekstensi15 = strtolower(end($x15));
    $file_tmp15 = $_FILES['nama_foto9']['tmp_name'];
    if ($nama_foto9 != NULL) {
        $nama_foto_baru9 = $angka_acak . '-' . $nama_foto9;
    } else {
        $nama_foto_baru9 = NULL;
    }

    $x16 = explode('.', $nama_foto10);
    $ekstensi16 = strtolower(end($x16));
    $file_tmp16 = $_FILES['nama_foto10']['tmp_name'];
    if ($nama_foto10 != NULL) {
        $nama_foto_baru10 = $angka_acak . '-' . $nama_foto10;
    } else {
        $nama_foto_baru10 = NULL;
    }

    // Pemindahan ke database dan folder
    if (in_array($ekstensi1, $ekstensi_diperbolehkan) === true) {
        // Before
        move_uploaded_file($file_tmp1, '../public/' . $kategori . '/' . $before_foto_baru1);
        if ($before_foto2 != NULL) {
            move_uploaded_file($file_tmp7, '../public/' . $kategori . '/' . $before_foto_baru2);
        }
        if ($before_foto3 != NULL) {
            move_uploaded_file($file_tmp8, '../public/' . $kategori . '/' . $before_foto_baru3);
        }
        if ($before_foto4 != NULL) {
            move_uploaded_file($file_tmp9, '../public/' . $kategori . '/' . $before_foto_baru4);
        }
        // After
        if ($after_foto1 != NULL) {
            move_uploaded_file($file_tmp2, '../public/' . $kategori . '/' . $after_foto_baru1);
        }
        if ($after_foto2 != NULL) {
            move_uploaded_file($file_tmp10, '../public/' . $kategori . '/' . $after_foto_baru2);
        }
        if ($after_foto3 != NULL) {
            move_uploaded_file($file_tmp11, '../public/' . $kategori . '/' . $after_foto_baru3);
        }
        if ($after_foto4 != NULL) {
            move_uploaded_file($file_tmp12, '../public/' . $kategori . '/' . $after_foto_baru4);
        }
        // sub 2
        if ($nama_foto3 != NULL) {
            move_uploaded_file($file_tmp3, '../public/' . $kategori . '/' . $nama_foto_baru3);
        }
        if ($nama_foto4 != NULL) {
        move_uploaded_file($file_tmp4, '../public/' . $kategori . '/' . $nama_foto_baru4);
        }
        // sub 3
        if ($nama_foto5 != NULL) {
            move_uploaded_file($file_tmp5, '../public/' . $kategori . '/' . $nama_foto_baru5);
        }
        if ($nama_foto6 != NULL) {
        move_uploaded_file($file_tmp6, '../public/' . $kategori . '/' . $nama_foto_baru6);
        }
        // sub 4
        if ($nama_foto7 != NULL) {
            move_uploaded_file($file_tmp13, '../public/' . $kategori . '/' . $nama_foto_baru7);
        }
        if ($nama_foto8 != NULL) {
        move_uploaded_file($file_tmp14, '../public/' . $kategori . '/' . $nama_foto_baru8);
        }
        
        // sub 5
        if ($nama_foto9 != NULL) {
            move_uploaded_file($file_tmp15, '../public/' . $kategori . '/' . $nama_foto_baru9);
        }
        if ($nama_foto10 != NULL) {
        move_uploaded_file($file_tmp16, '../public/' . $kategori . '/' . $nama_foto_baru10);
        }

        $query = "INSERT INTO kerjakami (kategori, lokasi_kegiatan, sub_kegiatan1, before_foto1, before_foto2, before_foto3, before_foto4, after_foto1, after_foto2, after_foto3, after_foto4, sub_kegiatan2, nama_foto3, nama_foto4, sub_kegiatan3, nama_foto5, nama_foto6, sub_kegiatan4, nama_foto7, nama_foto8, sub_kegiatan5, nama_foto9, nama_foto10) VALUES ('$kategori', '$lokasi_kegiatan','$sub_kegiatan1','$before_foto_baru1' ,'$before_foto_baru2' ,'$before_foto_baru3' ,'$before_foto_baru4' ,'$after_foto_baru1' ,'$after_foto_baru2' ,'$after_foto_baru3' ,'$after_foto_baru4' , '$sub_kegiatan2', '$nama_foto_baru3', '$nama_foto_baru4','$sub_kegiatan3', '$nama_foto_baru5', '$nama_foto_baru6' ,'$sub_kegiatan4', '$nama_foto_baru7', '$nama_foto_baru8' ,'$sub_kegiatan5', '$nama_foto_baru9', '$nama_foto_baru10')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            if ($kategori == "sd") {
                echo "<script>alert('Data Berhasil ditambahkan!');window.location='kerjakami-sd.php'</script>";
            } else {
                echo "<script>alert('Data Berhasil ditambahkan!');window.location='kerjakami-tk.php'</script>";
            }
        }
    } else {
        if ($kategori == "sd") {
            echo "<script>alert('Ekstrensi hanya bisa jpg png dan jpeg!');window.location='kerjakami-add.php?kategoriadd=sd'</script>";
        } else {
            echo "<script>alert('Ekstrensi hanya bisa jpg png dan jpeg!');window.location='kerjakami-add.php?kategoriadd=tk'</script>";
        }
    }
} else {
    if ($kategori == "sd") {
        echo "<script>alert('Silahkan tambahkan minimal 1 foto pada foto before!');window.location='kerjakami-add.php?kategoriadd=sd'</script>";
    } else {
        echo "<script>alert('Silahkan tambahkan minimal 1 foto pada foto before!');window.location='kerjakami-add.php?kategoriadd=tk'</script>";
    }
}
