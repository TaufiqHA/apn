<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> Absensi </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Kelas </h1>
                    <h2 class="font-semibold text-base text-secondary lg:text-lg uppercase"><?php echo $data['kelas'] ?> </h2>
                </div>
                <div class="w-full self-center px-4 mt-20 md:w-1/2 lg:w-1/2 flex flex-col items-center">
                    <?php if (!empty($data['siswa'])) : ?>
                        <?php foreach($data['siswa'] as $siswa) : ?>
                            <a href="#">
                                 <div class="w-[300px] h-[53px] rounded-full border-[0.5px] border-black px-2 flex items-center relative mb-7 shadow-xl">
                                    <span class="float-left pl-2 font-bold text-sm text-slate-600 uppercase"><?php echo $siswa['name'] ?> </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (empty($data['siswa'])) : ?>
                        <p class="text-center text-[13px] opacity-60">" Belum ada siswa yang ditambahkan "</p>
                    <?php endif; ?>
                </div>
             </div>
        </div>
    </section>
    <!-- hero section end -->
