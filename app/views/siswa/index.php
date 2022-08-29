<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> List </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Siswa </h1>
                    <h2 class="font-semibold text-base text-secondary lg:text-lg uppercase">Kelas  <?php echo $data['kelas'] ?> </h2>
                </div>
                <div class="w-full self-center px-4 mt-20 md:w-1/2 lg:w-1/2 flex flex-col items-center">
                    <?php if (!empty($data['siswa'])) : ?>
                        <?php foreach($data['siswa'] as $siswa) : ?>
                            <a href="<?php echo BASEURL; ?>/public/kelas/inputSiswa/<?php echo $kelas['kelas'] ?>">
                                 <div class="w-[287px] h-[53px] rounded-full border-[0.5px] border-black px-2 flex items-center relative mb-7 shadow-xl">
                                    <span class="float-left pl-2 font-bold text-sm uppercase"><?php echo $siswa['name'] ?> </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (empty($data['siswa'])) : ?>
                        <p class="text-center text-[13px] opacity-60">" Belum ada siswa yang ditambahkan "</p>
                    <?php endif; ?>
                    <div class="flex justify-center">
                        <button class="font-bold text-white flex justify-center items-center mt-20 text-center w-[246px] h-[47px] bg-primary rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300" id="button-tambah-siswa">TAMBAH SISWA</button>
                    </div>
                </div>
             </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- modal-box start -->
    <div class="modal w-[300px] right-1/2 translate-x-1/2 absolute flex justify-center top-96 scale-0 transition duration-300 lg:w-[500px]" id="modal-box-siswa">
        <div class="w-full bg-slate-200 self-center absolute p-5 rounded-xl shadow-2xl flex justify-center">
            <img src="<?php echo BASEURL; ?>/public/img/close.svg" alt="..." class="absolute right-3 top-3 cursor-pointer w-[20px] lg:w-[25px]" id="close-modal-box">
            <form action="<?php echo BASEURL; ?>/public/kelas/inputKelas" method="post" class="w-full px-8 flex flex-col items-center">
                <h2 class="font-semibold mb-3 text-primary lg:font-bold ">TAMBAH KELAS</h2>
                <label for="name" class="w-full font-semibold text-dark mb-3 block text-lg">Kelas</label>
                <input type="text" name="name" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="pelajaran" class="w-full font-semibold text-dark mb-3 block text-lg">Mata Pelajaran</label>
                <input type="text" name="pelajaran" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
                <label for="wali" class="w-full font-semibold text-dark mb-3 block text-lg">Wali kelas</label>
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