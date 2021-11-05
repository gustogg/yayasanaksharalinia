<?php include 'layout/header.php'; ?>
<title>Home</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper-pagination-bullet-active {
        background-color: red;
    }
</style>
</head>

<body>
    <?php include 'layout/navbar.php' ?>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mt-10">
            <!-- Slider 1 -->
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

    <!-- Kerja Kami -->
    <div class="p-6 bg-gray-50">
        <div class="mb-4">
            <p class="text-center text-base font-bold text-red-700">Kerja Kami</p>
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
    <!-- Swiper JS -->
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
    <?php include 'layout/header.php'; ?>