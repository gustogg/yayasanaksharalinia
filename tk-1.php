<?php include 'layout/header.php'; ?>
</head>

<body class="bg-gray-200">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16 w-4/5 mx-auto">
        <div class="">
            <img class="object-cover h-96 w-full filter brightness-75 relative z-10" src="public/tk/tk-1-b.jpg" alt="image" />
        </div>
        <div class="pt-10 pb-8 px-8 bg-gray-100">
            <p class="text-2xl text-center font-bold mb-8">TK Sekolah jauh desa Pedawa, Singaraja, Kabupaten Buleleng</p>
            <p class="text-lg font-semibold mb-3">Perbaikan Tangga tanpa pegangan yang Beresiko bagi anak anak TK</p>
            <div class="grid grid-cols-2 gap-3">
                <!-- Before -->
                <div class="col-span-1">
                    <p class="text-lg">Before</p>
                    <div class="flex w-full h-80">
                        <div class="pr-4 w-full">
                            <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                <img class="h-full filter brightness-75 blur-sm relative z-10" src="public/tk/tk-1-b.jpg">
                                <div class="p-1 h-full">
                                    <img class="h-full -mt-80 object-contain object-center relative z-20" src="public/tk/tk-1-b.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <p class="text-lg pl-4">After</p>
                    <div class="flex w-full h-80">
                        <div class="pl-4 w-full">
                            <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/tk/tk-1-a.jpg">
                                <div class="p-1 h-full w-full">
                                    <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/tk/tk-1-a.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--Footer -->
    <?php include 'layout/footer.php'; ?>