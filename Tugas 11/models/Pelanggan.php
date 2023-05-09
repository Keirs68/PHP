<?php
class Pelanggan {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;    
    }
    public function Pelanggan(){
        $sql = " SELECT pelanggan.*, kartu.nama AS Jenis_kartu FROM pelanggan
        INNER JOIN kartu ON kartu.id = pelanggan.kartu_id ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getPelanggan($id){
        $sql = " SELECT pelanggan.*, kartu.nama AS Jenis_kartu FROM pelanggan
        INNER JOIN kartu ON kartu.id = pelanggan.kartu_id WHERE pelanggan.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        // tanda tanya (?) berfungsi untuk menggantikan value
        $sql = "INSERT INTO pelanggan(kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) 
        VALUES (?,?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah(){

    }
}
?>