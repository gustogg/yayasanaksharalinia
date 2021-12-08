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
$before_foto1 = $_FILES['before_foto1']['name'];
$before_foto2 = $_FILES['before_foto2']['name'];
$before_foto3 = $_FILES['before_foto3']['name'];
$before_foto4 = $_FILES['before_foto4']['name'];

$after_foto1 = $_FILES['after_foto1']['name'];
$after_foto2 = $_FILES['after_foto2']['name'];
$after_foto3 = $_FILES['after_foto3']['name'];
$after_foto4 = $_FILES['after_foto4']['name'];

$sub_kegiatan2 = $_POST['sub_kegiatan2'];
$nama_foto3 = $_FILES['nama_foto3']['name'];
$nama_foto4 = $_FILES['nama_foto4']['name'];

$sub_kegiatan3 = $_POST['sub_kegiatan3'];
$nama_foto5 = $_FILES['nama_foto5']['name'];
$nama_foto6 = $_FILES['nama_foto6']['name'];

$sub_kegiatan4 = $_POST['sub_kegiatan4'];
$nama_foto13 = $_FILES['nama_foto13']['name'];
$nama_foto14 = $_FILES['nama_foto14']['name'];

$sub_kegiatan5 = $_POST['sub_kegiatan5'];
$nama_foto15 = $_FILES['nama_foto15']['name'];
$nama_foto16 = $_FILES['nama_foto16']['name'];

if ($nama_foto1 != "") {
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

    // Foto 3 - 4 (sub kegiatan 1)
    $x3 = explode('.', $nama_foto3);
    $ekstensi3 = strtolower(end($x3));
    $file_tmp3 = $_FILES['nama_foto3']['tmp_name'];
    $angka_acak = rand(1, 999);
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

    // Foto 5 - 6 (sub kegiatan 1)
    $x5 = explode('.', $nama_foto5);
    $ekstensi5 = strtolower(end($x5));
    $file_tmp5 = $_FILES['nama_foto5']['tmp_name'];
    $angka_acak = rand(1, 999);
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
        // Next
        if ($nama_foto3 != NULL) {
            move_uploaded_file($file_tmp3, '../public/' . $kategori . '/' . $nama_foto_baru3);
        }
        move_uploaded_file($file_tmp4, '../public/' . $kategori . '/' . $nama_foto_baru4);
        if ($nama_foto5 != NULL) {
            move_uploaded_file($file_tmp5, '../public/' . $kategori . '/' . $nama_foto_baru5);
        }
        move_uploaded_file($file_tmp6, '../public/' . $kategori . '/' . $nama_foto_baru6);

        $query = "INSERT INTO kerjakami (kategori, lokasi_kegiatan, sub_kegiatan1, nama_foto1, nama_foto2, sub_kegiatan2, nama_foto3, nama_foto4, sub_kegiatan3, nama_foto5, nama_foto6) VALUES ('$kategori', '$lokasi_kegiatan','$sub_kegiatan1', '$nama_foto_baru1', '$nama_foto_baru2','$sub_kegiatan2', '$nama_foto_baru3', '$nama_foto_baru4','$sub_kegiatan3', '$nama_foto_baru5', '$nama_foto_baru6')";
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
