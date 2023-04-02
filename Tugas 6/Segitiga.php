<?php
require_once 'abstract.php';

class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }
    public function namaBidang(){
        echo "Segitiga";
    }
    public function luasBidang(){
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        return $keliling;
    }
}
?>