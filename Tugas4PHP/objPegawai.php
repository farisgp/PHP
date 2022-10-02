
<?php
require 'Pegawai.php';
//ciptakan object
$p1 = new Pegawai('1234567', 'Faris', 'Manajer', 'Islam', 'Menikah');
$p2 = new Pegawai('1234566','Ghina', 'Asisten Manajer', 'Islam','Menikah');
$p3 = new Pegawai('1234595','Afrian', 'Kepala Bagian', 'Kristen','Menikah');
$p4 = new Pegawai('1234862','Rendy', 'Staff', 'Katholik',' Belum Menikah');
$p5 = new Pegawai('1234889','Rama', 'Staff', 'Islam','Menikah');

$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();
