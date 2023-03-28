<center>
<?php 
// Array scalar
$m1 = ['NIM' => '20081111021', 'nama' => 'Sayaka', 'nilai' => '80'];
$m2 = ['NIM' => '20081111022', 'nama' => 'Sakura', 'nilai' => '70'];
$m3 = ['NIM' => '20081111023', 'nama' => 'Sasuke', 'nilai' => '50'];
$m4 = ['NIM' => '20081111024', 'nama' => 'Sarada', 'nilai' => '40'];
$m5 = ['NIM' => '20081111025', 'nama' => 'Suzume', 'nilai' => '90'];
$m6 = ['NIM' => '20081111026', 'nama' => 'Suzuka', 'nilai' => '75'];
$m7 = ['NIM' => '20081111027', 'nama' => 'Sumire', 'nilai' => '30'];
$m8 = ['NIM' => '20081111028', 'nama' => 'Sukari', 'nilai' => '85'];

// Array associative
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['NO', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

// menambahkan beberapa fungsi sederhana
$jml_mhs     = count($mahasiswa);
$jml_nilai   = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai   = max($jml_nilai);
$min_nilai   = min($jml_nilai);
$rata2_nilai = $total_nilai / $jml_mhs;
$keterangan  = [
    'Jumlah Mahasiswa' => $jml_mhs,
    'Nilai Tertinggi'  => $max_nilai,
    'Nilai Terendah'   => $min_nilai,
    'Rata-Rata Nilai'  => $rata2_nilai
];
?>

<!-- membuat table -->
<table border="1" width="50%" cellpadding="5">
    <thead>
        <br>
        <h1>Data Nilai Mahasiswa</h1><hr><br>
        <tr>
        <?php
        foreach($ar_judul as $judul){
        ?>
        <th bgcolor="#FF597B"><?= $judul ?></th>
        <?php } ?>
        </tr>
    </thead>

    <tbody>
        <?php 
        $no = 1;
        // mencetak array
        foreach($mahasiswa as $mhs){
        // mengatur warna baris dalam tabel
        $warna = $no % 2 == 1 ? 'pink' : 'white';
        // memberikan keterangan lulus atau tidak lulus menggunakan ternary
        $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';

        //grade menggunakan if multi kondisi
        if ($mhs['nilai']>= 85 && $mhs['nilai']<= 100)     $grade = 'A';
        else if ($mhs['nilai']>= 75 && $mhs['nilai']<= 80) $grade = 'B';
        else if ($mhs['nilai']>= 60 && $mhs['nilai']<= 74) $grade = 'C';
        else if ($mhs['nilai']>= 30 && $mhs['nilai']<= 59) $grade = 'D';
        else if ($mhs['nilai']>= 0 && $mhs['nilai']<= 29)  $grade = 'E';
        else $grade = '';

        // pedikat menggunakan switch case
        switch($grade) {
            case "A": $predikat = "Memuaskan"; break;
            case "B": $predikat = "Bagus"; break;
            case "C": $predikat = "Cukup"; break;
            case "D": $predikat = "Kurang"; break;
            case "E": $predikat = "Buruk"; break;
            default : $predikat = "";
        }
        ?>
        <tr align="center" bgcolor="<?= $warna; ?>">
            <td><?= $no ?></td>
            <td><?= $mhs['NIM']?></td>
            <td><?= $mhs['nama']?></td>
            <td><?= $mhs['nilai']?></td>
            <td><?= $ket?></td>
            <td><?= $grade?></td>
            <td><?= $predikat?></td>
        </tr>
        <?php $no++; } ?>
    </tbody>

    <tfoot>
        <?php
        $no = 1;
        // mencetak keterangan
        foreach ($keterangan as $ket => $hasil){
        $warna = $no % 2 == 1 ? 'pink' : 'white';
        ?>
        <tr bgcolor="<?= $warna; ?>">
            <th colspan="6"><?= $ket ?></th>
            <th><?=$hasil?></th>
        </tr>
        <?php $no++; } ?>
    </tfoot>
</table>
</center>