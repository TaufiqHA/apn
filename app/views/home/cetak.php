<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> Cetak </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Penilaian </h1>
                </div>
                <div class="w-full self-center px-4 mt-20 flex justify-center items-center flex-col md:w-1/2 lg:w-1/2">
                    <?php if (!empty($data['class'])) : ?>
                            <?php foreach($data['class'] as $kelas) : ?>
                                    <div class="w-[287px] h-[53px] rounded-full border-[0.5px] border-black px-2 flex items-center mb-7 shadow-xl hover:cursor-pointer" id="download-button">
                                        <span class="pl-2 font-bold text-lg text-slate-600 uppercase hover:cursor-pointer"> Kelas  <?php echo $kelas['kelas'] ?></span>
                                    </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (empty($data['class'])) : ?>
                            <p class="text-center text-[13px] opacity-60">" Belum ada kelas yang ditambahkan "</p>
                        <?php endif; ?>
                </div>
             </div>
        </div>
    </section>
    <!-- hero section end -->   

    <!-- modal-box start -->
        <div class=" w-[300px] right-1/2 translate-x-1/2 absolute flex justify-center top-96 scale-0 transition duration-300 lg:w-[500px]" id="unduh">
            <div class="w-full bg-slate-200 self-center absolute p-5 rounded-xl shadow-2xl flex flex-col items-center justify-center">
                <img src="<?php echo BASEURL; ?>/public/img/close.svg" alt="..." class="absolute right-3 top-3 cursor-pointer w-[20px] lg:w-[25px]" id="close-button">
                <h2 class="font-semibold mb-3 text-primary lg:font-bold ">CETAK</h2>
                <div class="flex justify-center">
                    <a href="<?php echo BASEURL; ?>/public/nilai/rekap/<?php echo $kelas['kelas'] ?>" target="_blank">
                        <button class="font-bold text-white flex justify-center items-center mt-10 text-center w-[246px] h-[47px] bg-primary rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300">REKAP NILAI</button>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="<?php echo BASEURL; ?>/public/nilai/nilai_akhir/<?php echo $kelas['kelas'] ?>" target="_blank">
                        <button class="font-bold text-white flex justify-center items-center mt-5 mb-10  text-center w-[246px] h-[47px] bg-primary rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300">NILAI AKHIR</button>
                    </a>
                </div>
            </div>
        </div>
    <!-- modal-box end -->