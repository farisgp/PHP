<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 5 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <?php
            require_once 'Lingkaran.php';
            require_once 'PersegiPanjang.php';
            require_once 'Segitiga.php';
            $ar_judul = ['No','Nama Bidang','Keterangan','Luas Bidang','Keliling Bidang'];
        ?>
        <h3 class="text-center">Daftar Bangun Datar</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php       
                    foreach($ar_judul as $jd){
                    ?>
                    <th><?= $jd ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $b1 = new PersegiPanjang();
                $b2 = new Lingkaran();
                $b3 = new Segitiga();

                $arrayBentuk = [$b1,$b2,$b3];
                $no = 1;
                foreach ($arrayBentuk as $bentuk){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bentuk->namaBidang() ?></td>
                        <td><?= $bentuk->keterangan() ?></td>
                        <td><?= $bentuk->luasBidang() ?></td>
                        <td><?= $bentuk->kelilingBidang() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>
</html>