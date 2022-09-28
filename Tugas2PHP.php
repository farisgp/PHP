<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <h2 class="text-center py-4">Form Pegawai</h2>
    <div class="container px-5 my-5">
    <form id="contactForm" method="POST">
        <div class="mb-3">
            <label class="form-label" for="namaPegawai">Nama Pegawai</label>
            <input name="nama" class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="agama">Agama</label>
            <select name="agama" class="form-select" id="agama" aria-label="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Protestan">Protestan</option>
                <option value="Khatolik">Khatolik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input value="Manager" class="form-check-input" id="manager" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Asisten" class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Kabag" class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Staff" class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input value="Menikah" class="form-check-input" id="menikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="Belum_Menikah" class="form-check-input" id="belumMenikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="anak">Jumlah Anak</label>
            <input name="anak" value="" class="form-control" id="anak" type="text" placeholder="Anak" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="anak:required">Anak is required.</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Simpan</button>
        </div>
    </form>
</div>
<?php
     error_reporting(0);
    $nama_pegawai = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $pernikahan = $_POST['status'];
    $jml_anak = $_POST['anak'];
?>


<h2 class="text-center py-3">Data Pegawai</h2>
<div class="table-responsive">
  <table class="table table-light">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pegawai</th>
        <th scope="col">Agama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Pernikahan</th>
        <th scope="col">Jumlah Anak</th>
        <th scope="col">Gaji Pokok</th>
        <th scope="col">Tunjangan Jabatan</th>
        <th scope="col">Tunjangan Keluarga</th>
        <th scope="col">Gaji Kotor</th>
        <th scope="col">Zakat</th>
        <th scope="col">Take Home Pay</th>
      </tr>
    </thead>

    <?php
    switch ($jabatan) {
        case 'Manager':
            $gapok = 20000000;
            break;
            case 'Asisten':
                $gapok = 15000000;
                break;
            case 'Kabag':
                $gapok = 10000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
            $gapok = 0;
            break;
    }

    $tunjab = $gapok * 0.2;

    $t_keluarga = 0;
    if ($pernikahan == 'Menikah' && $jml_anak <= 2 ) {
        $t_keluarga = $gapok * 0.05;
    } elseif ($pernikahan == 'Menikah' && $jml_anak <= 5) {
        $t_keluarga = $gapok * 0.1;
    }elseif ($pernikahan == 'Menikah' && $jml_anak >  5) {
        $t_keluarga = $gapok * 0.15;
    }else {
        $t_keluarga = 0;
    }
    
    $g_kotor = $gapok + $tunjab + $t_keluarga;

    $agama == 'Islam' && $g_kotor >= 6000000 ? $zakprof = $g_kotor * 0.025 : $zakprof = 0;

    $take_hp = $g_kotor - $zakprof;
    ?>
    
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $nama_pegawai; ?></td>
        <td><?php echo $agama; ?></td>
        <td><?php echo $jabatan; ?></td>
        <td><?php echo $pernikahan; ?></td>
        <td><?php echo $jml_anak; ?></td>
        <td><?php echo 'Rp. ', number_format($gapok, 2, ',', '. ');  ?></td>
        <td><?php echo 'Rp. ', number_format($tunjab, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($t_keluarga, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($g_kotor, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($zakprof, 2, ',', '. '); ?></td>
        <td><?php echo 'Rp. ', number_format($take_hp, 2, ',', '. '); ?></td>
      </tr>
    </tbody>

  </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>