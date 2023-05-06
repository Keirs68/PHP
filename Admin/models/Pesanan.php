<?php
class Pesanan {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function Pesanan(){
        $sql = "SELECT pesanan.*, pelanggan.nama_pelanggan FROM pesanan
        INNER JOIN pelanggan ON pelanggan.id = pesanan.pelanggan_id;";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>