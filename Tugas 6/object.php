<?php
require_once 'Lingkaran.php';
// require_once 'PersegiPanjang.php';
// require_once 'Segitiga.php';

$l = new Lingkaran(5);
// $p = new Persegi_Panjang(10, 15);
// $s = new Segitiga(6, 9);

$ar_data = [$l,];
foreach($ar_data as $data){
    $data->cetak();
}

?>