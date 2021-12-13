<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$kategoriadd = $_GET["kategoriadd"];
?>

<?php include '../admin/layout/header.php'; ?>
<title>Tambah Data Kerja Kami</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar.php'; ?>


    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Kerja Kami</h1>

            <div class="flex flex-wrap">
                <div class="w-full my-6 pr-0 lg:pr-2">
                    <p class="text-xl pb-6 flex items-center">
                        <i class="fas fa-list mr-3"></i> Tambah Data
                    </p>
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="kerjakami-add-process.php" enctype="multipart/form-data">
                            <div class="">
                                <label class=" block text-sm text-gray-600" for="kategori">kategori</label>
                                <select class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="kategori" name="kategori">
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="sd" value="sd">SD</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="tk" value="tk">TK</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="lokasi_kegiatan">Lokasi Kegiatan</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lokasi_kegiatan" name="lokasi_kegiatan" type="text" required="" placeholder="Lokasi Kegiatan" aria-label="Name">
                            </div>
                            <!-- Sub 1 -->
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="sub_kegiatan1">Sub kegiatan 1</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="sub_kegiatan1" type="text" required="" placeholder="Sub Kegiatan 1" aria-label="Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="col-span-1">
                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                        <div class="mt-2">
                                            <label class="block text-sm text-gray-600" for="before_foto<?php echo $i ?>">Pilih Foto (Before <?php echo $i; ?>)</label>
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="before_foto<?php echo $i ;?>" id="before_foto<?php echo $i; ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-span-1">
                                    <?php for ($j = 1; $j <= 4; $j++) { ?>
                                        <div class="mt-2">
                                            <label class="block text-sm text-gray-600" for="after_foto<?php echo $i ?>">Pilih Foto (After <?php echo $j; ?>)</label>
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="after_foto<?php echo $j; ?>" id="after_foto<?php echo $i; ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- sub 2 -->
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="sub_kegiatan2">Sub kegiatan 2</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="sub_kegiatan2" type="text" placeholder="Sub Kegiatan 2" aria-label="Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto3">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto3" id="nama_foto3">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto4">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto4" id="nama_foto4">
                                </div>
                            </div>

                            <!-- sub 3 -->
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="sub_kegiatan3">Sub kegiatan 3</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="sub_kegiatan3" type="text" placeholder="Sub Kegiatan 3" aria-label="Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto5">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto5" id="nama_foto5">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto6">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto6" id="nama_foto6">
                                </div>
                            </div>

                            <!-- sub 4 -->
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="sub_kegiatan4">Sub kegiatan 4</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="sub_kegiatan4" type="text" placeholder="Sub Kegiatan 4" aria-label="Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto7">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto7" id="nama_foto7">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto8">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto8" id="nama_foto8">
                                </div>
                            </div>

                            <!-- sub 5 -->
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="sub_kegiatan5">Sub kegiatan 5</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="sub_kegiatan5" type="text" placeholder="Sub Kegiatan 5" aria-label="Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto9">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto9" id="nama_foto9">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="nama_foto10">Pilih Foto</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto10" id="nama_foto10">
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="mt-6 flex flex-row">
                                <div class="">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-500 hover:bg-red-600 rounded" type="submit">Submit</button>
                                </div>
                                <div class="ml-4">
                                    <?php if ($kategoriadd == "sd") { ?>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-500 hover:bg-gray-600 rounded" onclick="location.href='kerjakami-sd.php'">Cancel</button>
                                    <?php } else { ?>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-500 hover:bg-gray-600 rounded" onclick="location.href='kerjakami-tk.php'">Cancel</button>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </main>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>