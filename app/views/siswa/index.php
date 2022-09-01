<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20 lg:self-start lg:mt-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> List </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Siswa </h1>
                    <h2 class="font-semibold text-base text-secondary lg:text-lg uppercase">Kelas  <?php echo $data['kelas'] ?> </h2>
                </div>
                <div class="w-full self-center px-4 mt-20 md:w-1/2 lg:w-1/2 flex flex-col items-center">
                    <?php if (!empty($data['siswa'])) : ?>
                        <?php foreach($data['siswa'] as $siswa) : ?>
                            <div class="w-[300px] h-[53px] rounded-full border-[0.5px] border-black px-2 flex items-center mb-7 shadow-xl hover:cursor-pointer">
                                <span class="float-left pl-2 font-bold text-sm text-slate-600 uppercase"><?php echo $siswa['name'] ?></span>
                            </div>
                            <form action="<?php echo BASEURL; ?>/public/kelas/tambahDesk/<?php echo $siswa['id'] ?>/<?php echo $data['kelas'] ?>" method="post" class="w-full px-8 flex flex-col items-center lg:w-1/2" id="form">
                                <label for="pengetahuan" class="w-full font-semibold text-dark mb-3 block text-lg">PENGETAHUAN</label>
                                <textarea class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3 h-28 border border-black" name="pengetahuan"></textarea>
                                <label for="keterampilan" class="w-full font-semibold text-dark mb-3 block text-lg">KETERAMPILAN</label>
                                <textarea class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3 h-28 border border-black" name="keterampilan"></textarea>
                                <button class="w-1/2 bg-primary py-2 px-5 rounded-full font-semibold text-white mb-5">TAMBAH</button>
                            </form>
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
    <div class=" w-[300px] right-1/2 translate-x-1/2 absolute flex justify-center top-96 scale-0 transition duration-300 lg:w-[500px]" id="modal-box-siswa">
        <div class="w-full bg-slate-200 self-center absolute p-5 rounded-xl shadow-2xl flex justify-center">
            <img src="<?php echo BASEURL; ?>/public/img/close.svg" alt="..." class="absolute right-3 top-3 cursor-pointer w-[20px] lg:w-[25px]" id="close-modal-box-siswa">
            <form action="<?php echo BASEURL; ?>/public/kelas/tambahSiswa/<?php echo $data['kelas'] ?>" method="post" class="w-full px-8 flex flex-col items-center">
                <h2 class="font-semibold mb-3 text-primary lg:font-bold ">TAMBAH SISWA</h2>
                <label for="name" class="w-full font-semibold text-dark mb-3 block text-lg">Nama</label>
                <input type="text" name="name" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off" required>
                <label for="nis" class="w-full font-semibold text-dark mb-3 block text-lg">NIS</label>
                <input type="text" name="nis" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off" required>
                <label for="nisn" class="w-full font-semibold text-dark mb-3 block text-lg">NISN</label>
                <input type="text" name="nisn" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off" required>
                <button class="w-1/2 bg-primary py-2 px-5 rounded-full font-semibold text-white ">TAMBAH</button>
            </form>
        </div>
    </div>
    <!-- modal-box end -->