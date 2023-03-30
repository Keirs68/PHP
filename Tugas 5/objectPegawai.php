<?php
require 'Pegawai.php';

// instance object pegawai
$p1 = new Pegawai(198508017, 'Samudra', 'Manager', 'Islam', 'Single');
$p2 = new Pegawai(198508018, 'Assavella', 'Asisten Manager', 'Islam', 'Menikah');
$p3 = new Pegawai(198508019, 'Krystian', 'Kepala Bagian', 'Kristen', 'Single');
$p4 = new Pegawai(198508020, 'Wang Zi Hao', 'Manager', 'Islam', 'Menikah');
$p5 = new Pegawai(198508021, 'Matthew', 'Staff', 'Kristen', 'Single');

// array associative
$ar_data = [$p1, $p2, $p3, $p4, $p5];

// mencetak array
foreach ($ar_data as $data){
    $data->cetak();
}
?>