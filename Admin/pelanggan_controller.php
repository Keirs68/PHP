<?php
include_once 'koneksi.php';
include_once 'models/Pelanggan.php';


// step pertama yaitu menangkap request form
$kode = $_POST['kode'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kartu_id = $_POST['kartu_id'];
$Jenis_kartu = $_POST['Jenis_kartu'];

// menangkap form diatas, dijadikan array
$data = [
    $kode,
    $nama_pelanggan,
    $jk,
    $tmp_lahir,
    $tgl_lahir,
    $email,
    $alamat,
    $kartu_id,
    $Jenis_kartu
];
$model = new Pelanggan();
$tombol = $_REQUEST['proses'];
switch($tombol) {
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST['idx']; $model->ubah($data); break;
    default:
    header('location:index.php?url=pelanggan');
    break;
}
header('location:index.php?url=pelanggan');
?>