<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> List </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Kelas </h1>
                </div>
                <div class="w-full self-center px-4 mt-20 md:w-1/2 lg:w-1/2 flex flex-col items-center">
                        <?php if (!empty($data['class'])) : ?>
                            <?php foreach($data['class'] as $kelas) : ?>
                                     <div class="w-[287px] h-[53px] rounded-full border-[0.5px] border-black px-2 flex items-center relative mb-7 shadow-xl">
                                    <a href="<?php echo BASEURL; ?>/public/kelas/inputSiswa/<?php echo $kelas['kelas'] ?>">
                                        <span class="float-left pl-2 font-bold text-lg text-slate-600 uppercase"> Kelas  <?php echo $kelas['kelas'] ?> </span>
                                    </a>
                                        <div class="w-[35px] h-[35px] rounded-full text-red absolute right-4"><a href="<?php echo BASEURL; ?>/public/kelas/hapus/<?php echo $kelas['kelas'] ?>" onclick="return confirm('anda yakin ingin manghapus kelas ini?')"><img src="<?php echo BASEURL; ?>/public/img/trush.svg"></a></div>
                                    </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (empty($data['class'])) : ?>
                            <p class="text-center text-[13px] opacity-60">" Belum ada kelas yang ditambahkan "</p>
                        <?php endif; ?>
                    <div class="flex justify-center">
                        <button class="font-bold text-white flex justify-center items-center mt-20 text-center w-[246px] h-[47px] bg-primary rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300" id="button-tambah">TAMBAH KELAS</button>
                    </div>
                </div>
             </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- modal-box start -->
    <div class="modal w-[300px] right-1/2 translate-x-1/2 absolute flex justify-center top-96 mt-5 scale-0 transition duration-300 lg:w-[500px]" id="modal-box">
        <div class="w-full bg-slate-200 self-center absolute p-5 rounded-xl shadow-2xl flex justify-center">
            <img src="<?php echo BASEURL; ?>/public/img/close.svg" alt="..." class="absolute right-3 top-3 cursor-pointer w-[20px] lg:w-[25px]" id="close-modal-box">
            <form action="<?php echo BASEURL; ?>/public/kelas/inputKelas" method="post" class="w-full px-8 flex flex-col items-center">
                <h2 class="font-semibold mb-3 text-primary lg:font-bold ">TAMBAH KELAS</h2>
                <label for="name" class="w-full font-semibold text-dark mb-3 block text-lg">Kelas</label>
                <input type="text" name="name" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="pelajaran" class="w-full font-semibold text-dark mb-3 block text-lg">Mata Pelajaran</label>
                <input type="text" name="pelajaran" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="wali" class="w-full font-semibold text-dark mb-3 block text-lg">Guru Mata Pelajaran</label>
                <input type="text" name="wali" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="nip" class="w-full font-semibold text-dark mb-3 block text-lg">NIP</label>
                <input type="number" name="nip" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="semester" class="w-full font-semibold text-dark mb-3 block text-lg">Semester</label>
                <input type="text" name="semester" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="ta" class="w-full font-semibold text-dark mb-3 block text-lg">Tahun Ajaran</label>
                <input type="text" name="ta" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <button class="w-1/2 bg-primary py-2 px-5 rounded-full font-semibold text-white ">TAMBAH</button>
            </form>
        </div>
    </div>
    <!-- modal-box end -->