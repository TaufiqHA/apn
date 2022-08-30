<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> Ulangan </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Harian </h1>
                    <h2 class="font-semibold text-base text-secondary lg:text-lg uppercase"><?php echo $data['kelas'] ?> </h2>
                </div>
                <div class="w-full self-center px-4 mt-20 flex justify-center items-center flex-col md:w-1/2 lg:w-1/2">
                <form action="<?php echo BASEURL; ?>/public/ulangan/tambahNilai/<?php echo $data['kelas'] ?>" method="post"> 
                     <label for="ulangan">Ulangan ke:</label>
                    <select name="uh" id="ulangan" class="mb-5 bg-transparent">
                        <option value="uh1">1</option>
                        <option value="uh2">2</option>
                        <option value="uh3">3</option>
                    </select>
                     <?php if (!empty($data['siswa'])) : ?>
                        <?php foreach($data['siswa'] as $siswa) : ?>
                            <input type="hidden" name="id<?php echo $siswa['id'] ?>" value="<?php echo $siswa['id'] ?>">
                            <a href="#">
                                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                                 <div class="w-[300px] h-[53px] rounded-full border-[0.5px] border-black px-2 relative mb-7 shadow-xl">
                                    <span class="float-left pl-2 font-bold text-sm text-slate-600 uppercase translate-y-1/2 absolute bottom-1/2"><?php echo $siswa['name'] ?></span>
                                    <input type="text" name="nilai<?php echo $siswa['id'] ?>" class="w-[35px] h-[35px] rounded-full bg-transparent border border-slate-500 outline-none right-4 bottom-1/2 translate-y-1/2 absolute text-center" autocomplete="off">
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (empty($data['siswa'])) : ?>
                        <p class="text-center text-[13px] opacity-60">" Belum ada siswa yang ditambahkan "</p>
                    <?php endif; ?>
                    <div class="flex justify-center">
                        <button class="font-bold text-white flex justify-center items-center mt-20 text-center w-[246px] h-[47px] bg-teal-500 rounded-full shadow-lg shadow-slate-300 hover:scale-110 transition duration-300" type="submit">SIMPAN</button>
                    </div>
                </form>
                </div>
             </div>
        </div>
    </section>
    <!-- hero section end -->