<?php include 'layout/header.php'; ?>
</head>

<body class="bg-gray-200">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16 w-4/5 mx-auto">
        <div class="">
            <img class="object-cover h-96 relative z-10" src="https://source.unsplash.com/collection/190728/3000x900" alt="image" />
        </div>
        <div class="pt-10 pb-8 px-8 bg-gray-100">
            <p class="text-2xl text-center font-bold">Title</p>
            <div class="grid grid-cols-2 gap-3">
                <!-- Before -->
                <div class="col-span-1">
                    <p class="text-lg">Before</p>
                    <div class="flex w-full h-64">
                        <div class="w-1/2 border-2 border-red-600">
                            <img class="object-cover" src="public/tk/tk-1-b.jpg">
                        </div>
                        <img class="w-1/2 pr-4" src="public/tk/tk-1-b.jpg">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--Footer -->
    <?php include 'layout/footer.php'; ?>