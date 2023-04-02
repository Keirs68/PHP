<?php
require_once 'abstract.php';

class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo "Segitiga";
    }
    public function luasBidang(){
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 
    }
}
?>