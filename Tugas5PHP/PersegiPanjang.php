<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D{
    public $panjang = 10;
    public $lebar = 5;
    public function namaBidang(){
        return 'Persegi Panjang';
    }
    public function luasBidang(){
        return $this->panjang*$this->lebar;
    }
    public function kelilingBidang(){
        return 2*($this->panjang+$this->lebar);
    }
    public function keterangan(){
        return "Panjang :".$this->panjang."<br/>
        Lebar : ".$this->lebar;
    }
}