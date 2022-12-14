<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style1.css">
    <title>Nilai Akhir</title>
</head>
<body>
    <section>
        <div class="container w-full flex justify-center mx-auto mt-0">
            <div class="judul flex flex-col items-center">
                <h1 class="font-bold font-serif text-md">DAFTAR NILAI AKHIR PESERTA DIDIK</h1>
                <h1 class="font-bold font-serif text-sm">SMP NEGERI 1 TOMPOBULU</h1>
                <h1 class="font-bold font-serif text-sm">TAHUN PELAJARAN : <?php echo $data['kelas']['ta'] ?></h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container w-full mt-10">
            <div class="sub-judul flex">
                <div>
                    <h2 class="font-bold font-serif text-[12px] ">Kelas</h2>
                    <h2 class="font-bold font-serif text-[12px]">Semester</h2>
                    <h2 class="font-bold font-serif text-[12px]">Mata Pelajaran</h2>
                    <h2 class="font-bold font-serif text-[12px]">Guru Mata Pelajaran</h2>
                    <h2 class="font-bold font-serif text-[12px]">Kriteria Belajar Minimum</h2>
                </div>
                <div class="ml-5 text-[12px] font-bold font-serif">
                    <p>: <?php echo $data['kelas']['kelas'] ?></p>
                    <p>: <?php echo $data['kelas']['semester'] ?></p>
                    <p>: <?php echo $data['kelas']['mt'] ?></p>
                    <p>: <?php echo $data['kelas']['wk'] ?></p>
                    <p>: 60</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-5">
        <table class="text-[12px] font-serif ">
            <tr>
                <th colspan="3">Nomor</th>
                <th rowspan="2" width="250px">Nama Peserta Didik</th>
                <th colspan="3">Pengetahuan</th>
                <th colspan="3">Keterampilan</th>
            </tr>
            <tr>
                <th>Urut</th>
                <th width="100px">NIS</th>
                <th width="100px">NISN</th>
                <th>Angka</th>
                <th>Predikat</th>
                <th width="200px">Deskripsi</th>
                <th>Angka</th>
                <th>Predikat</th>
                <th width="200px">Deskripsi</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($data['siswa'] as $siswa) : ?>
                <tr>
                    <td><?php echo  $i++ ?></td>
                    <td><?php echo $siswa['nis'] ?></td>
                    <td><?php echo $siswa['nisn'] ?></td>
                    <td><?php echo $siswa['name'] ?></td>
                    <td>
                        <?php 

                            $jumlah = $siswa['uh1'] + $siswa['uh2'] + $siswa['uh3'] + $siswa['t1'] + $siswa['t2'] + $siswa['t3'] + $siswa['pts'] + $siswa['pas'];
                            $jumlah /=8;
                            echo floor($jumlah);    

                         ?>

                    </td>
                    <td>
                        <?php 

                            switch (true) {
                                case $jumlah < 60 :
                                    echo 'D';
                                    break;
                                case $jumlah < 80 :
                                    echo 'C';
                                    break;
                                case $jumlah < 95 :
                                    echo 'B';
                                    break;
                                case $jumlah < 100 :
                                    echo 'A';
                                    break;
                            }

                         ?>
                    </td>
                    <td><?php echo $siswa['pengetahuan'] ?></td>
                    <td>
                        <?php 

                            $jumlah1 = $siswa['t1'] + $siswa['t2'] + $siswa['t3'];
                            $jumlah1 /=3;
                            echo floor($jumlah1);    

                         ?>
                    </td>
                    <td>
                        <?php 

                            switch (true) {
                                case $jumlah1 < 60 :
                                    echo 'D';
                                    break;
                                case $jumlah1 < 80 :
                                    echo 'C';
                                    break;
                                case $jumlah1 < 95 :
                                    echo 'B';
                                    break;
                                case $jumlah1 < 100 :
                                    echo 'A';
                                    break;
                            }

                         ?>
                             
                    </td>
                    <td><?php echo $siswa['keterampilan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>
</html>