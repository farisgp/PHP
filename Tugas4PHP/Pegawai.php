<?php

class Pegawai{
    private $nip, $nama;
    public $jabatan, $agama, $status;

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }
    public function setGajiPokok(){
        switch ($this->jabatan) {
            case 'Manajer': $gapok = 15000000; break;
            case 'Asisten Manajer': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 4000000; break;
            default: $gapok = 0; break;
        }
        return $gapok;
    }
    public function setTunJab(){
        return $this->setGajiPokok()*0.2;
    }
    public function setTunKel(){
        return $this->status == 'Menikah' ? ($this->setGajiPokok()*0.1) : 0 ;
    }
    public function setGajiKotor(){
        return $this->setGajiPokok() + $this->setTunJab() + $this->setTunKel();
    }
    public function setZakatProfesi(){
        $zakat = 0;
        if ($this->agama == 'Islam' && $this->setGajiKotor() >= 6000000 ) $zakat = $this->setGajiPokok()*0.025;
        else $zakat = 0;
        return $zakat;
    }
    
    public function mencetak(){ 
        echo '<br/>NIP: '.$this->nip;
        echo '<br/>Nama Pegawai: '.$this->nama;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: Rp. '.number_format($this->setGajiPokok(), 0, ',', '.');
        echo '<br/>Tunjangan Jabatan: Rp. '.number_format($this->setTunJab(), 0, ',', '.');
        echo '<br/>Tunjangan Keluarga: Rp. '.number_format($this->setTunKel(), 0, ',', '.');
        echo '<br/>Zakat: Rp. '.$this->setZakatProfesi();
        echo '<br/>Gaji Kotor: '.$this->setGajiKotor();
        echo '<hr/>';
    }
}