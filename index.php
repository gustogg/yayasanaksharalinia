<?php include 'layout/header.php'; ?>
<title>Home</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper-pagination-bullet-active {
        background-color: red;
    }
</style>
</head>

<body class="overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mt-10">
            <!-- Slider 1 -->
            <!-- <div class="swiper-slide">
                <div class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
                    <div class="relative z-30 p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl">
                        Welcome to my site!
                    </div>
                    <div class="object-cover object-center h-85-screen">
                        <video autoplay loop muted="w-full">
                            <source src="/images/video.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div> -->
            <!-- Slider 1 -->
            <div class="swiper-slide">
                <div class="">
                    <video autoplay="autoplay" loop=""  id="myVideo" class="myVideo object-cover object-top h-99 w-full relative z-10">
                        <source src="/images/video.mp4" type="video/mp4" class="" />
                        Your browser does not support the video tag.
                    </video>
                    <div class="-mt-98 px-6 sm:pl-10 relative z-30">
                        <div class="px-8 w-full">
                            <div class="w-11/12 sm:w-7/12 md:w-7/12 lg:w-5/12 mx-auto py-8 bg-red-700 bg-opacity-80 rounded-md">
                                <p class=" text-sm text-center md:text-xl lg:text-2xl  text-white font-bold"> Selamat Datang di</p>
                                <p class=" text-sm text-center md:text-xl lg:text-2xl  text-white font-extrabold"> Yayasan Akhsara Linia Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider 2 -->
            <div class="swiper-slide">
                <div class="h-99" >
                <img class="object-cover h-99 w-full object-top filter brightness-75 relative z-10" src="public/sd/sd-1-st2.jpg">
                    <div class="relative z-20 -mt-96 px-6 sm:pl-10  ">
                        <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-3 px-3 text-center md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-80">
                                <p class="text-sm md:text-xl text-white font-bold"> SD Negeri 7 Manukaya, Kabupaten Gianyar </p>
                            </div>
                        </div>
                        <!-- <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div> -->
                        <a href="/sd-1.php">
                            <button class="mx-8 mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                                Info Selengkapnya >
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slider 3 -->
            <div class="swiper-slide">
                <div class="h-99" >
                <img class="object-cover h-99 w-full object-top filter brightness-75 relative z-10" src="public/sd/sd-2-st1.jpg">
                    <div class="relative z-20 -mt-96 px-6 sm:pl-10  ">
                        <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-3 px-3 text-center md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-80">
                                <p class="text-sm md:text-xl text-white font-bold">SD Negeri 4 Sukawana, Kintamani, Kabupaten Bangli </p>
                            </div>
                        </div>
                        <!-- <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div> -->
                        <a href="/sd-1.php">
                            <button class="mx-8 mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                                Info Selengkapnya >
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" style="color:red"></div>
        <div class="swiper-button-prev" style="color:red"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Tempat kotak -->
    <div class="bg-white mt-8 p-3 md:px-28">
        <!-- Tentang Kami -->
        <div class="block md:hidden p-4 pt-6 bg-gray-50 filter shadow-lg">
            <div class="mb-4">
                <p class="text-center text-base font-bold text-red-600">Tentang Kami</p>
            </div>
            <div>
                <img class="object-cover w-full p-2 h-60 border-2 border-red-500 rounded-md" src="/images/tentangkami.jpg" alt="image" />
            </div>
            <div class="mt-3">
                <p class="text-sm text-justify"><strong>Yayasan Akshara Linia Indonesia</strong> adalah Yayasan yang bergerak dibidang sosial, bidang kemanusiaan dengan akta Notaris Amaliyah, SH., M.KN., Nomor 13 tanggal 09 Maret 2021 dan Keputusan Mentri Hukum Dan Hak Asasi Manusia Republik Indonesia, Nomor AHU-0010105.AH.01.12 Tahun 2021 tanggal 17 Maret 2021 serta Nomor Induk Berusaha (NIB) 1238000301296 tanggal 19 Maret 2021.</p>
            </div>
            <div class="m-auto">
                <button class="mx-auto block mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                    Info Selengkapnya >
                </button>
            </div>
        </div>
        <div class="-mt-11 md:mt-0 mb-10 p-8 bg-gray-100 invisible md:visible grid grid-cols-3 filter shadow-lg ">
            <div class="col-span-2 px-8 my-auto hidden md:block ">
                <p class="text-lg mb-2 font-bold text-red-600">Tentang Kami</p>
                <p class="text-base text-justify"><strong>Yayasan Akshara Linia Indonesia</strong> adalah Yayasan yang bergerak dibidang sosial, bidang kemanusiaan dengan akta Notaris Amaliyah, SH., M.KN., Nomor 13 tanggal 09 Maret 2021 dan Keputusan Mentri Hukum Dan Hak Asasi Manusia Republik Indonesia, Nomor AHU-0010105.AH.01.12 Tahun 2021 tanggal 17 Maret 2021 serta Nomor Induk Berusaha (NIB) 1238000301296 tanggal 19 Maret 2021.</p>
                <a href="tentangkami.php">
                    <button class="block mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                        Info Selengkapnya >
                    </button>
                </a>
            </div>
            <div class="col-span-1 hidden md:block ">
                <img class="object-cover w-full p-2 h-60 border-2 border-red-500 rounded-md" src="/images/tentangkami.jpg" alt="image" />
            </div>
        </div>
        <!-- Coming Soon -->
        <div class="my-6 p-4 bg-gray-100 shadow-md">
            <div class="">
                <p class="text-center text-base font-bold text-red-600 py-2">Informasi</p>
                <p class="text-center text-sm font-semibold text-black py-12">To be announced</p>
            </div>
        </div>
    </div>
    <!-- Publikasi -->
    <div class="bg-gray-100 px-8 lg:px-16 pb-8">
        <p class="text-red-600 text-center font-bold pt-8">Publikasi</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <!-- Publikasi Div -->
            <div class="grid col-span-1 p-6">
                <a href="#">
                    <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                        <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                            <img class="object-cover w-screen h-52 object-top" src="public/publikasi/pb1.jpg">
                            <p class=" pl-2 mt-1 py-2 text-base text-left font-semibold text-justify">Kepala Sekolah SD Negeri 7 Gianyar, Bpk.I Gusti Ngurah Mideh S. Pd sedang berbincang kepada Penasihat Akshara Linia Indonesia, “ Sri Dharen S.H., M.B.A,” mengucapkan terima kasih telah memperhatikan kebutuhan sekolah kami di Manukaya, Kabupaten Gianyar.</p>
                        </div>
                    </button>
                </a>
            </div>
            <!-- Publikasi Div -->
            <div class="grid col-span-1 p-6">
                <a href="#">
                    <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                        <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                            <img class="object-cover w-screen h-52 object-top" src="public/publikasi/pb2.jpg">
                            <p class=" pl-2 mt-1 py-2 text-base text-left font-semibold text-justify">Photo Bersama para guru di sekolah SD Negeri 7 Manukaya Gianyar, didampingi oleh Pak I Ketut Arinata Yasa, Tampak Siring.</p>
                        </div>
                    </button>
                </a>
            </div>
        </div>
        <div class=" ">
            <a href="/publikasi.php">
                <button class="block mx-auto mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                    Info Selengkapnya >
                </button>
            </a>
        </div>
    </div>

    <!-- Swiper JS (Slider) -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
    <!--Footer -->
    <?php include 'layout/footer.php'; ?>