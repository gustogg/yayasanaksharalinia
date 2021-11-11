<?php include 'layout/header.php'; ?>
<title>Tentang Kami</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper-pagination-bullet-active {
        background-color: red;
    }
</style>
</head>

<body>
    <?php include 'layout/navbar.php' ?>
    <div class="pt-40">
                <p class="text-center text-3xl font-bold mb-10">Yayasan Akhsara Linia Indonesia</p>
                <img class="mx-10 pt-5 bg-white shadow-md rounded-md w-48 pt-8" src="/images/logo.png" alt="YALI logo">
                </div>
    <div class="-mt-60 text-left pl-52">
    <div x-data="{animate: false}">
  <button @click="animate = (animate) ? false : true" class="bg-red-500 text-white font-bold py-2 pr-110 mt-4 ml-10 text-2xl mb-10">
  Filosofi Logo
  <p class="text-white text-sm font-thin bg-transparent pl-44 -mt-6 pb-2">(+)</p>
  </button>
  <div x-show="animate" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="pt-3 text-left pb-5 bg-red-500 text-white pl-2 -mt-10 ml-10 mr-11">
                   • Buku yang terbuka sebagai symbol bahwa buku adalah sumber ilmu dan membaca itu sebagai proses mendulang ilmu<br><br>
                   • Lambang bola dunia sebagai simbol dimana membaca adalah wahana melihat dunia<br><br>
                   • Warna emas pada bola dunia sebagai simbol dimana ilmu sebagai sarana untuk menggapai emas<br><br>
  </div>
    </div>                

    <div class="mt-10 mb-10 bg-transparent rounded-md">
                <p class="text-red-500 text-center text-xl font-bold">Tentang Kami</p>
                <p class="pt-3 px-40 text-justify pb-10">Yayasan Akshara Linia Indonesia adalah Yayasan yang bergerak dibidang sosial, bidang kemanusiaan dengan akta Notaris Amaliyah, SH., M.KN., Nomor 13 tanggal 09 Maret 2021 dan Keputusan Mentri Hukum Dan Hak Asasi Manusia Republik Indonesia, Nomor AHU-0010105.AH.01.12 Tahun 2021 tanggal 17 Maret 2021 serta Nomor Induk Berusaha (NIB) 1238000301296 tanggal 19 Maret 2021.</p>

    </div>
    <div class="mt-10 mb-10 bg-white shadow-md rounded-md">
                <p class="text-red-500 text-center text-xl font-bold">Visi</p>
                <p class="pt-3 px-40 text-center pb-10">Melalui Yayasan Akshara Linia Indonesia, anak anak sekolah dasar berhak mendapatkan Pendidikan dan fasilitas yang layak</p>

    </div>
    <div class="mt-10 mb-10 bg-white shadow-md rounded-md">
                <p class="text-red-500 text-center text-xl font-bold">Misi</p>
                <p class="pt-3 px-40 text-center pb-10">Sebagai garda terdepan untuk sosial dan kemanusiaan, dimana seribu anak yang mampu boleh mengecap Pendidikan, tetapi jangan sampai satu pun anak yang tidak mampu tidak bisa mengecap Pendidikan karena orang tuanya tidak mampu untuk membayar biaya Pendidikan karena anak yang tidak dapat makan dan anak yang tidak dapat Pendidikan sama sama bertentangan dengan nilai kemanusiaan</p>

    </div>
    </div>
    <div class="mt-10 mb-10 bg-white shadow-md rounded-md">
                <p class="text-red-500 text-center text-xl font-bold">Our Motto</p>
                <p class="pt-3 px-40 text-center pb-10 font-bold font-style: italic">“WE WANT TO WORK WHILE RUNNING, WE WANT TO GIVE WHILE SMILING”</p>

    </div>
    <div class="text-center">
    <div x-data="{animate: false}">
  <button @click="animate = (animate) ? false : true" class="bg-transparent text-red-500 font-bold py-2 px-4 rounded mt-4 ml-4 text-xl mb-10">
  Our Strategy <br>
  <p class="text-white text-sm font-thin bg-red-500 rounded-xl hover:bg-red-800">+</p>
  </button>
  <div x-show="animate" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="mb-10 pt-3 px-85 text-left pb-10 list-style-type: none bg-transparent text-black">
                   1. Target program yang diterima dan diketahui oleh masyarakat Setempat, sekolah dan dinas Pendidikan<br>
                   2. Meninjau dan mengimplementasikan kebutuhan sekolah berdasarkan skala prioritas<br>
                   3. Menjalin dan membangun sumber daya lokal<br>
                   4. Mendukung kegiatan pemerintah di bidang Pendidikan<br>
                   5. Kerjasama dengan lembaga pengambil keputusan / stake holder terkait<br>
  </div>
    </div>

    <div class="text-center">
    <div x-data="{animate: false}">
  <button @click="animate = (animate) ? false : true" class="bg-transparent text-red-500 font-bold py-2 px-4 rounded mt-4 ml-4 text-xl mb-10">
  Kerja Kami <br>
  <p class="text-white text-sm font-thin bg-red-500 rounded-xl hover:bg-red-800">+</p>
  </button>
  <div x-show="animate" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="px-40 mb-10 text-center bg-transparent text-black">
  Menyediakan Fasilitas sekolah ( Sekolah Dasar dan TK) Merenovasi Sekolah serta fasilitas pendukung lainnya, Menyediakan APE dalam sebagai  Alat Edukatif. Advokasi serta mendukung staff pengajar prihal digitalisasi edukasi termasuk Prokes di sekolah
  </div>
    </div>
</div>





    <?php include 'layout/footer.php'; ?>