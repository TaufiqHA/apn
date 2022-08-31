<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/style1.css">
    <title>Absensi</title>
</head>
<body>
    <section>
        <div class="container w-full flex justify-center mx-auto mt-0">
            <div class="judul flex flex-col items-center">
                <h1 class="font-bold font-serif text-md">ABSENSI PESERTA DIDIK</h1>
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
                </div>
                <div class="ml-5 text-[12px] font-bold font-serif text-[12px] ">
                    <p>: <?php echo $data['kelas']['kelas'] ?></p>
                    <p>: <?php echo $data['kelas']['semester'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mt-5"> 
        <table>
            <tr>
                <th colspan="3">Nomor</th>
                <th rowspan="3" width="250px">Nama Perserta Didik</th>
                <th colspan="18">Absensi</th>
                <th colspan="3" rowspan="2">Ulangan Harian</th>
                <th colspan="3" rowspan="2">Tugas</th>
                <th colspan="2" rowspan="2">Penilaian</th>
                <th colspan="3" rowspan="2">absensi</th>
                <th rowspan="3">KET.</th>
            </tr>
            <tr>
                <th rowspan="2">Urut</th>
                <th rowspan="2" width="80px">NIS</th>
                <th rowspan="2" width="80px">NISN</th>
                <th colspan="18">Pertemuan</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>UH1</th>
                <th>UH2</th>
                <th>UH3</th>
                <th>T1</th>
                <th>T2</th>
                <th>T3</th>
                <th>PTS</th>
                <th>PAS</th>
                <th>A</th>
                <th>I</th>
                <th>S</th>
            </tr>
            <?php foreach ($data['siswa'] as $siswa) : ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $siswa['nis'] ?></td>
                    <td><?php echo $siswa['nisn'] ?></td>
                    <td><?php echo $siswa['nama'] ?></td>
                    <td><?php echo $siswa['p1'] ?></td>
                    <td><?php echo $siswa['p2'] ?></td>
                    <td><?php echo $siswa['p3'] ?></td>
                    <td><?php echo $siswa['p4'] ?></td>
                    <td><?php echo $siswa['p5'] ?></td>
                    <td><?php echo $siswa['p6'] ?></td>
                    <td><?php echo $siswa['p7'] ?></td>
                    <td><?php echo $siswa['p8'] ?></td>
                    <td><?php echo $siswa['p9'] ?></td>
                    <td><?php echo $siswa['p10'] ?></td>
                    <td><?php echo $siswa['p11'] ?></td>
                    <td><?php echo $siswa['p12'] ?></td>
                    <td><?php echo $siswa['p13'] ?></td>
                    <td><?php echo $siswa['p14'] ?></td>
                    <td><?php echo $siswa['p15'] ?></td>
                    <td><?php echo $siswa['p15'] ?></td>
                    <td><?php echo $siswa['p17'] ?></td>
                    <td><?php echo $siswa['p18'] ?></td>
                    <td><?php echo $siswa['uh1'] ?></td>
                    <td><?php echo $siswa['uh2'] ?></td>
                    <td><?php echo $siswa['uh3'] ?></td>
                    <td><?php echo $siswa['t1'] ?></td>
                    <td><?php echo $siswa['t2'] ?></td>
                    <td><?php echo $siswa['t3'] ?></td>
                    <td><?php echo $siswa['pts'] ?></td>
                    <td><?php echo $siswa['pas'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <section>
        <div class="w-full mt-5 mx-auto px-5">
            <div class="footer w-full flex">
                <div class="w-1/2 font-semibold font-serif text-[12px] ">
                    <h2>Mengetahui;</h2>
                    <h2 class="mb-14">Kepala Sekolah</h2>
                    <h2>Hj. SYAMSIAL SYAHRUN, S.Pd, M.Pd</h2>
                    <h2>NIP : 19721225 200605 1 001</h2>
                </div>
                <div class="w-1/2 font-semibold font-serif text-[12px] pl-48">
                    <h2>Malakaji 13 juli 2022</h2>
                    <h2 class="mb-14">Guru Mata Pelajaran</h2>
                    <h2>Abdullah, A.Md</h2>
                    <h2>NIP : 19721225 200605 1 001</h2>
                </div>
            </div>
        </div>
    </section>
</body>
</html>