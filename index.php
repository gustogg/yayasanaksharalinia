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
            <!-- Slider 2 -->
            <div class="swiper-slide">
                <div class="">
                    <video autoplay loop muted class="object-cover h-85-screen w-full relative z-10">
                        <source src="/images/video.mp4" type="video/mp4" class=""/>
                        Your browser does not support the video tag.
                    </video>
                    <div class="-mt-98 px-6 sm:pl-10 relative z-30">
                        <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-3 px-10  md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-80">
                                <p class="text-sm md:text-xl text-white font-bold"> SELAMAT DATANG DI SITUS RESMI<br>YAYASAN AKSHARA LINIA INDONESIA </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider 2 -->
            <div class="swiper-slide">
                <div class="object-cover h-85-screen" style="background-image: url('https://source.unsplash.com/user/erondu/3000x900');">
                    <div class="pt-44 px-6 sm:pl-10  ">
                        <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-3 px-3 text-center md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-80">
                                <p class="text-sm md:text-xl text-white font-bold"> SNM NJHEIO 9 LANUAK HSJO </p>
                            </div>
                        </div>
                        <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div>
                        <button class="mx-8 mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                            Info Selengkapnya >
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Slider 3 -->
            <div class="swiper-slide">
                <div class="object-cover h-85-screen" style="background-image: url('https://source.unsplash.com/user/erondu/3000x900');">
                    <div class="pt-44 px-6 sm:pl-10  ">
                        <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-3 px-3 text-center md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-80">
                                <p class="text-sm md:text-xl text-white font-bold"> SNM NJHEIO 9 LANUAK HSJO </p>
                            </div>
                        </div>
                        <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div>
                        <button class="mx-8 mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                            Info Selengkapnya >
                        </button>
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
        <!-- Kerja Kami -->
        <div class="block md:hidden p-4 pt-6 bg-gray-50 filter shadow-lg">
            <div class="mb-4">
                <p class="text-center text-base font-bold text-red-600">Tentang Kami</p>
            </div>
            <div>
                <img class="object-cover w-full p-2 h-60 border-2 border-red-500 rounded-md" src="https://source.unsplash.com/collection/190728/3000x900" alt="image" />
            </div>
            <div class="mt-3">
                <p class="text-sm text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="m-auto">
                <button class="mx-auto block mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                    Info Selengkapnya >
                </button>
            </div>
        </div>
        <div class="-mt-11 md:mt-0 mb-10 p-8 bg-gray-100 invisible md:visible grid grid-cols-3 filter shadow-lg ">
            <div class="col-span-2 px-8 my-auto hidden md:block ">
                <p class="text-lg font-bold text-red-600">Kerja Kami</p>
                <p class="text-base text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <button class="block mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                    Info Selengkapnya >
                </button>
            </div>
            <div class="col-span-1 hidden md:block ">
                <img class="object-cover w-full p-2 h-60 border-2 border-red-500 rounded-md" src="https://source.unsplash.com/collection/190728/3000x900" alt="image" />
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
    </div>
    <!-- Publikasi -->
    <div class="bg-gray-100 px-16">
        <p class="text-red-600 text-center font-bold pt-8">Publikasi</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
            <div class="grid col-span-1 p-6">
                <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                    <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                        <img class="object-cover w-screen h-64" src="public/sd/sdn7gianyar_rakbuku.jpg">
                        <p class="pl-2 mt-2 text-sm text-left font-semibold">Rak Buku Gianyar</p>
                    </div>
                </button>
            </div>
            <div class="grid col-span-1 p-6">
                <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                    <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                        <img class="object-cover w-screen h-64" src="public/sd/sdn7gianyar_rakbuku.jpg">
                        <p class="pl-2 mt-2 text-sm text-left font-semibold">Rak Buku Gianyar</p>
                    </div>
                </button>
            </div>
            <div class="grid col-span-1 p-6">
                <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                    <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                        <img class="object-cover w-screen h-64" src="public/sd/sdn7gianyar_rakbuku.jpg">
                        <p class="pl-2 mt-2 text-sm text-left font-semibold">Rak Buku Gianyar</p>
                    </div>
                </button>
            </div>
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