<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{
    public $alas = 10;
    public $tinggi = 8;
    
    public function namaBidang(){
        return 'Segitiga';
    }  
    public function luasBidang(){
        return 1/2*$this->alas*$this->tinggi;
    }
    public function kelilingBidang(){
        return $this->alas*3;
    }
    public function keterangan(){
        return "Sisi :".$this->alas."<br/>
        Tinggi : ".$this->tinggi;
    }
}