<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style.css">
    <title> <?php echo $data['judul'] ?> </title>
</head>
<body>
    <!-- header section start -->
    <header id="home" class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10 bg-white bg-opacity-90">
        <div class="container">
            <div class="flex items-center justify-between relative ">
                <div class="px-4">
                    <a href="<?php echo BASEURL; ?>/public" class="font-bold text-base text-primary block py-6 lg:text-lg">
                        <span>APLIKASI</span>
                        <span>PENGOLAH NILAI</span>
                    </a>
                </div>
                <div class="flex items-center px-4 ">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out "></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="scale-0 absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:scale-100 lg:block lg:static lg:bg-transparent lg:rounded-none lg:shadow-none lg:max-w-full transition duration-300 ease-in-out">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/public/home/index" class="text-base py-2 mx-8 flex  group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/public/kelas/index" class="text-base py-2 mx-8 flex  group-hover:text-primary">Kelas</a>
                            </li>
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/public/siswa/index" class="text-base py-2 mx-8 flex  group-hover:text-primary">Siswa</a>
                            </li>
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/public/ulangan/index" class="text-base py-2 mx-8 flex  group-hover:text-primary">UH</a>
                            </li>
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/public/tugas/index" class="text-base py-2 mx-8 flex  group-hover:text-primary">Tugas</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base py-2 mx-8 flex  group-hover:text-primary">PTS</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base py-2 mx-8 flex  group-hover:text-primary">PAS</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->