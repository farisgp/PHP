<?php
$m1 = ['nim'=>'00012345','nama'=>'Agus','nilai'=>'75'];
$m2 = ['nim'=>'00016234','nama'=>'Budi','nilai'=>'86'];
$m3 = ['nim'=>'00012346','nama'=>'Cecep','nilai'=>'45'];
$m4 = ['nim'=>'00012348','nama'=>'Dodi','nilai'=>'90'];
$m5 = ['nim'=>'00012345','nama'=>'Eka','nilai'=>'67'];
$m6 = ['nim'=>'00012745','nama'=>'Farid','nilai'=>'89'];
$m7 = ['nim'=>'00012367','nama'=>'Ghani','nilai'=>'63'];
$m8 = ['nim'=>'00019345','nama'=>'Hilda','nilai'=>'96'];
$m9 = ['nim'=>'00018345','nama'=>'Ingga','nilai'=>'75'];
$m10 = ['nim'=>'00012945','nama'=>'Joko','nilai'=>'59'];

$ar_judul = ['No','Nim','Nama','Nilai','Keterangan',
'Grade','Predikat'];

$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$nilai_mhs = array_column($mahasiswa,'nilai');
$nilai_tertinggi = max($nilai_mhs);
$nilai_terendah = min($nilai_mhs);
$jumlah_mahasiswa = count($mahasiswa);
$nilai_rata2 = array_sum($nilai_mhs) / $jumlah_mahasiswa;
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 3 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $mhs){
                    ?>
                    <th><?= $mhs ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                  $ket = ($mhs["nilai"] >= 60) ? "Lulus" : "Tidak Lulus"; 
                  if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
                  else if($mhs['nilai'] >= 75 && $mhs['nilai'] < 85) $grade = 'B';
                  else if($mhs['nilai'] >= 60 && $mhs['nilai'] < 75) $grade = 'C';
                  else if($mhs['nilai'] >= 30 && $mhs['nilai'] < 60) $grade = 'D';
                  else if($mhs['nilai'] >= 0 && $mhs['nilai'] < 30) $grade = 'E';
                  else $grade = '';
    
                switch ($grade) {
                    case 'A': $predikat = "Memuaskan"; break;
                    case 'B': $predikat = "Bagus"; break;
                    case 'C': $predikat = "Cukup"; break;
                    case 'D': $predikat = "Kurang"; break;
                    case 'E': $predikat = "Buruk"; break;
                }
                ?>
                <tr>
                    <td><?=$no ?></td>
                    <td><?=$mhs["nim"]  ?></td>
                    <td><?=$mhs["nama"]  ?></td>
                    <td><?=$mhs["nilai"]  ?></td>
                    <td><?=$ket  ?></td>
                    <td><?=$grade  ?></td>
                    <td><?=$predikat?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>NILAI TERTINGGI</th>
                    <th colspan="6">
                        <?=$nilai_tertinggi ?>
                    </th>
                </tr>
                <tr>
                    <th>NILAI TERENDAH</th>
                    <th colspan="6">
                        <?=$nilai_terendah ?>
                    </th>
                </tr>
                <tr>
                    <th>NILAI RATA-RATA</th>
                    <th colspan="6">
                        <?=$nilai_rata2 ?>
                    </th>
                </tr>
                <tr>
                    <th>JUMLAH SISWA</th>
                    <th colspan="6">
                        <?=$jumlah_mahasiswa ?>
                    </th>
                </tr>
                
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>
</html>