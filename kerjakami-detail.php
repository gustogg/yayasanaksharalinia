<?php include 'layout/header.php'; ?>
<?php
require './admin/koneksi.php';

$id = $_GET["id"];
// echo $id;
$kerjakami = ("SELECT * FROM kerjakami WHERE id = '$id'");
$hasil = mysqli_query($conn, $kerjakami);
$data = mysqli_fetch_assoc($hasil);
?>
</head>

<body class="bg-gray-200 overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16 w-full md:w-11/12 lg:w-4/5 mx-auto">
        <div class="">
            <?php if ($data["nama_foto5"] != NULL) {?>
            <img class="object-cover h-96 w-full filter brightness-75 relative z-10 object-top" src="public/<?php echo $data["kategori"];?>/<?php echo $data["nama_foto5"]; ?>" alt="image" />
            <?php } else if ($data["nama_foto3"] != NULL) {?>
                <img class="object-cover h-96 w-full filter brightness-75 relative z-10 object-top" src="public/<?php echo $data["kategori"]; ?>/<?php echo $data["nama_foto3"]; ?>" alt="image" />
            <?php } else { ?>
                <img class="object-cover h-96 w-full filter brightness-75 relative z-10 object-top" src="public/<?php echo $data["kategori"]; ?>/<?php echo $data["nama_foto1"]; ?>" alt="image" />
            <?php }?>
        </div>
        <div class="pt-10 px-8 bg-gray-100 pb-14">
            <p class="text-lg md:text-2xl text-center font-bold mb-8"><?php echo $data["lokasi_kegiatan"]; ?></p>
            <p class="text-sm md:text-lg font-semibold mb-3"><?php echo $data["sub_kegiatan1"]; ?></p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <!-- Before -->
                <div class="col-span-1">
                    <p class="text-sm md:text-lg pb-2">Before</p>
                    <div class="flex w-full h-80">
                        <div class="pr-0 md:pr-4 h-full w-full">
                            <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto1"]; ?>">
                                <div class="h-full w-full mt-1">
                                    <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto1"]; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <p class="text-sm md:text-lg pl-0 md:pl-4 pb-2">After</p>
                    <div class="flex w-full h-80">
                        <div class="pl-0 md:pl-4 w-full">
                            <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto2"]; ?>">
                                <div class="h-full w-full mt-1">
                                    <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto2"]; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Next Bawahnya -->
            <?php if ($data["sub_kegiatan2"] != NULL) { ?>
                <p class="pt-8 text-sm md:text-lg font-semibold mb-3"><?php echo $data["sub_kegiatan2"]; ?></p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <!-- Pembagi Kolom -->
                    <?php if ($data["nama_foto3"] != NULL) { ?>
                        <div class="col-span-1">
                            <div class="flex w-full h-80">
                                <div class="pr-0 md:pr-4 h-full w-full">
                                    <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                        <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto3"]; ?>">
                                        <div class="h-full w-full mt-1">
                                            <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto3"]; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Pembagi Kolom -->
                    <?php if ($data["nama_foto4"] != NULL) { ?>
                        <div class="col-span-1">
                            <div class="flex w-full h-80">
                                <div class="pr-0 md:pr-4 h-full w-full">
                                    <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                        <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto4"]; ?>">
                                        <div class="h-full w-full mt-1">
                                            <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto4"]; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <!-- Next Bawahnya -->
            <?php if ($data["sub_kegiatan3"] != NULL) { ?>
                <p class="pt-8 text-sm md:text-lg font-semibold mb-3"><?php echo $data["sub_kegiatan3"]; ?></p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <!-- Pembagi Kolom -->
                    <?php if ($data["nama_foto5"] != NULL) { ?>
                        <div class="col-span-1">
                            <div class="flex w-full h-80">
                                <div class="pr-0 md:pr-4 h-full w-full">
                                    <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                        <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto5"]; ?>">
                                        <div class="h-full w-full mt-1">
                                            <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto5"]; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Pembagi Kolom -->
                    <?php if ($data["nama_foto6"] != NULL) { ?>
                        <div class="col-span-1">
                            <div class="flex w-full h-80">
                                <div class="pr-0 md:pr-4 h-full w-full">
                                    <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                        <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto6"]; ?>">
                                        <div class="h-full w-full mt-1">
                                            <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/<?php echo $data["kategori"] ?>/<?php echo $data["nama_foto6"]; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>

    </div>


    <!--Footer -->
    <?php include 'layout/footer.php'; ?>