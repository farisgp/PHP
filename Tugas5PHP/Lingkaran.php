<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D{
    public $jari2 = 14;
    const phi = 3.14;
    public function namaBidang(){
        echo 'Lingkaran';
    }
    public function luasBidang(){
        return Lingkaran::phi * pow($this->jari2,2);
    }
    public function kelilingBidang(){
        return 2*Lingkaran::phi*$this->jari2;
    }
    public function keterangan(){
        return "Jari-jari :".$this->jari2;
    }
}