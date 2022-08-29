<!-- hero section start -->
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap mb-[61px] lg:mb-24">
                <div class="w-full self-center px-4 lg:w-1/2 lg:pl-20 lg:self-start lg:mt-20">
                    <h2 class="font-semibold text-xl text-primary lg:text-2xl"> Absensi </h2>
                    <h1 class="font-bold text-5xl mb-2 lg:text-6xl"> Kelas </h1>
                    <h2 class="font-semibold text-base text-secondary lg:text-lg uppercase"><?php echo $data['kelas'] ?> </h2>
                </div>
                <div class="w-full self-center px-4 mt-20 md:w-1/2 lg:w-1/2 flex flex-col items-center">
<<<<<<< HEAD
                    <form action="#" method="post">
=======
                    <form action="<?php echo BASEURL; ?>/public/absensi/updateAbsen/<?php echo $data['kelas'] ?>" method="post">
                    <label for="absen">Pertemuan ke:</label>
                    <select name="absen" id="absen" class="mb-5 bg-transparent">
                        <option value="p1">1</option>
                        <option value="p2">2</option>
                        <option value="p3">3</option>
                        <option value="p4">4</option>
                        <option value="p5">5</option>
                        <option value="p6">6</option>
                        <option value="p7">7</option>
                        <option value="p8">8</option>
                        <option value="p9">9</option>
                        <option value="p10">10</option>
                        <option value="p11">11</option>
                        <option value="p12">12</option>
                        <option value="p13">13</option>
                        <option value="p14">14</option>
                        <option value="p15">15</option>
                        <option value="p16">16</option>
                        <option value="p17">17</option>
                        <option value="p18">18</option>
                        <option value="uh1">UH 1</option>
                        <option value="uh2">UH 2</option>
                        <option value="uh3">UH 3</option>
                        <option value="t1">TUGAS 1</option>
                        <option value="t2">TUGAS 2</option>
                        <option value="t3">TUGAS 3</option>
                        <option value="pts">PTS</option>
                        <option value="pas">PAS</option>
                    </select>
>>>>>>> ea6356d3015bf2a71f7d883af02bd5ce411b45b8
                    <?php if (!empty($data['siswa'])) : ?>
                        <?php foreach($data['siswa'] as $siswa) : ?>
                            <input type="hidden" name="id<?php echo $siswa['id'] ?>" value="<?php echo $siswa['id'] ?>">
                            <a href="#">
<<<<<<< HEAD
                                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                                 <div class="w-[300px] h-[53px] rounded-full border-[0.5px] border-black px-2 flex items-center relative mb-7 shadow-xl">
                                    <span class="float-left pl-2 font-bold text-sm text-slate-600 uppercase"><?php echo $siswa['name'] ?> </span>
=======
                                 <div class="w-[300px] h-[53px] rounded-full border-[0.5px] border-black px-2 relative mb-7 shadow-xl">
                                    <span class="float-left pl-2 font-bold text-sm text-slate-600 uppercase translate-y-1/2 mt-2"><?php echo $siswa['nama'] ?></span>
                                    <select name="nilai<?php echo $siswa['id'] ?>" class="float-right translate-y-1/2 bg-transparent">
                                        <option value="H">H</option>
                                        <option value="A">A</option>
                                        <option value="S">S</option>
                                        <option value="I">I</option>
                                    </select>
>>>>>>> ea6356d3015bf2a71f7d883af02bd5ce411b45b8
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
<<<<<<< HEAD
                    </form>
=======
                </form>
>>>>>>> ea6356d3015bf2a71f7d883af02bd5ce411b45b8
                </div>
             </div>
        </div>
    </section>
    <!-- hero section end -->
