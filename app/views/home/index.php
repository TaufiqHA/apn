    <!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> Selamat </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Datang </h1>
                    <h2 class="font-semibold text-base text-secondary lg:text-lg"> Bpk Abdullah </h2>
                </div>
                <div class="w-full px-4 sefl-center flex justify-center flex-wrap lg:w-1/2 lg:justify-evenly">
                    <a href="<?php echo BASEURL; ?>/public/absensi">
                        <div class="w-[214px] h-[176px] border-[0.5px] rounded-[21px] mt-[61px] border-black shadow-xl hover:scale-110 transition duration-300 ease-in-out overflow-hidden">
                            <img src="<?php echo BASEURL; ?>/public/img/task.jpg">
                        </div>
                    </a>
                    <div class="w-[214px] h-[176px] border-[0.5px] rounded-[21px] mt-[61px] border-black shadow-xl hover:scale-110 transition duration-300 ease-in-out" id="download-button"></div>
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
                <button class="font-bold text-white flex justify-center items-center mt-20 text-center w-[246px] h-[47px] bg-primary rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300">REKAP NILAI</button>
            </div>
            <div class="flex justify-center">
                <button class="font-bold text-white flex justify-center items-center mt-5 mb-10  text-center w-[246px] h-[47px] bg-primary rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300">NILAI AKHIR</button>
            </div>
        </div>
    </div>
    <!-- modal-box end -->

