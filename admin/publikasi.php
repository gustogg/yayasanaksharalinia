<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<?php include '../admin/layout/header.php'; ?>
<title>Tailwind Admin Template</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold">Tambah Data</h1>

            <div class="w-full mt-6">
                <div class="bg-white mt-3 overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="py-3 px-4 uppercase font-semibold text-sm">No</th>
                                <th class="w-8/12 text-left py-3 px-4 uppercase font-semibold text-sm">Judul Kegiatan</th>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">File</th>
                                <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">Type File</th>
                                <th class="w-2/12py-3 px-4 uppercase font-semibold text-sm">Opsi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">1</a></td>
                                <td class="w-8/12  text-left py-3 px-4">Kepala Sekolah SD Negeri 7 Gianyar, Bpk.I Gusti Ngurah Mideh S. Pd sedang berbincang kepada Penasihat Akshara Linia Indonesia, “ Sri Dharen S.H., M.B.A,” mengucapkan terima kasih telah memperhatikan kebutuhan sekolah kami di Manukaya, Kabupaten Gianyar.</td>
                                <td class="w-1/12text-left py-3 px-4">Smith</td>
                                <td class="w-1/12text-left py-3 px-4">Smith</td>
                                <td class=" w-2/12 text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                            </tr>
                            <tr class="">
                                <td class="py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">2</a></td>
                                <td class="w-8/12 text-left py-3 px-4">Emma</td>
                                <td class="w-1/12 text-left py-3 px-4">Johnson</td>
                                <td class="w-1/12text-left py-3 px-4">Smith</td>
                                <td class="w-2/12 text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>