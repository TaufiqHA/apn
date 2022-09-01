<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style1.css">
    <title>Rekap</title>
</head>
<body>
    <section>
        <div class="container w-full flex justify-center mx-auto mt-0">
            <div class="judul flex flex-col items-center">
                <h1 class="font-bold font-serif text-md">REKAPITULASI HASIL CAPAIAN KOMPETISI</h1>
                <h1 class="font-bold font-serif text-sm">SMP NEGERI 1 TOMPOBULU</h1>
                <h1 class="font-bold font-serif text-sm">TAHUN PELAJARAN : <?php echo $data['kelas']['ta'] ?></h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container w-full mt-10">
            <div class="sub-judul flex ">
                <div>
                    <h2 class="font-bold font-serif text-[12px] ">Kelas</h2>
                    <h2 class="font-bold font-serif text-[12px]">Semester</h2>
                </div>
                <div class="ml-5 text-[12px] font-bold font-serif">
                    <p>: <?php echo $data['kelas']['kelas'] ?></p>
                    <p>: <?php echo $data['kelas']['semester'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-5">
        <table class="text-[12px] font-serif ">
            <tr>
                <th colspan="3">Nomor</th>
                <th rowspan="2" width="250px">Nama Perserta Didik</th>
                <th rowspan="2">UH 1</th>
                <th rowspan="2">UH 2</th>
                <th rowspan="2">UH 3</th>
                <th rowspan="2">TG 1</th>
                <th rowspan="2">TG 2</th>
                <th rowspan="2">TG 3</th>
                <th rowspan="2">PTS</th>
                <th rowspan="2">PAS</th>
                <th rowspan="2">Jumlah</th>
                <th rowspan="2">Rata - rata</th>
                <th rowspan="2">Peringkat</th>
            </tr>
            <tr>
                <th>Urut</th>
                <th  width="100px">NIS</th>
                <th width="100px">NISN</th>
            </tr>
            <?php $i = 1 ?>
           <?php foreach ($data['siswa'] as $siswa) : ?>
                <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $siswa['nis'] ?></td>
                <td><?php echo $siswa['nisn'] ?></td>
                <td><?php echo $siswa['name'] ?></td>
                <td><?php echo $siswa['uh1'] ?></td>
                <td><?php echo $siswa['uh2'] ?></td>
                <td><?php echo $siswa['uh3'] ?></td>
                <td><?php echo $siswa['t1'] ?></td>
                <td><?php echo $siswa['t2'] ?></td>
                <td><?php echo $siswa['t3'] ?></td>
                <td><?php echo $siswa['pts'] ?></td>
                <td><?php echo $siswa['pas'] ?></td>
                <td>
                    <?php 

                        $jumlah = $siswa['uh1'] + $siswa['uh2'] + $siswa['uh3'] + $siswa['t1'] + $siswa['t2'] + $siswa['t3'] + $siswa['pts'] + $siswa['pas'];
                        echo $jumlah;    

                     ?>
                </td>
                <td>
                    <?php 

                        $jumlah = $jumlah/8;
                        echo floor($jumlah);

                     ?>
                </td>
                <td></td>
            </tr>
           <?php endforeach ?>
        </table>
    </section>
</body>
</html>