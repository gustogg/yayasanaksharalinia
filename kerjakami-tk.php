<?php
require './admin/koneksi.php';
$kerjakami = query("SELECT * FROM kerjakami WHERE kategori = 'tk'");
?>

<?php include 'layout/header.php'; ?>
<title>Kerja Kami - TK</title>
</head>

<body class="overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16">
        <div class="">
            <img class="object-cover w-full h-96 relative z-10 object-top" src="public/tk/tk-1-b.jpg" alt="image" />
            <div class="bg-black -mt-24 relative z-20 w-60 md:w-96 mb-4 mx-auto rounded-md bg-opacity-60">
                <p class="p-3 font-semibold text-base md:text-lg text-white text-center">Program Kerja Kami pada<br>Sekolah Dasar</p>
            </div>
        </div>
        <div class="md:mx-12 xl:mx-40 pt-10 pb-8 px-4 bg-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                <?php foreach ($kerjakami as $row) : ?>
                    <div class="grid col-span-1 p-6">
                        <a href="/kerjakami-detail.php?id=<?php echo $row["id"]; ?>" name="<?php $row["id"]; ?>">
                            <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                                <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                                    <?php if ($row["nama_foto5"] != NULL) { ?>
                                        <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["nama_foto5"]; ?>">
                                    <?php } else if ($row["nama_foto3"] != NULL) { ?>
                                        <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["nama_foto3"]; ?>">
                                    <?php } else { ?>
                                        <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["nama_foto1"]; ?>">
                                    <?php } ?>
                                    <p class=" pl-2 mt-1 py-2 text-base text-left font-semibold"><?php echo $row["lokasi_kegiatan"]; ?></p>
                                    <div class="mr-auto w-48  py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-sm font-bold rounded-md">
                                        Baca Selengkapnya >
                                    </div>
                                </div>
                            </button>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!--Footer -->
        <?php include 'layout/footer.php'; ?>