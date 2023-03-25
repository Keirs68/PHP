<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body bgcolor="#E1EEDD">
    <center>
    <br><br>
    <form method ="GET">
        <table border="1" cellpadding=10% width=35%>
            <th colspan="2" align="center" bgcolor="#94AF9F">
                Data Pegawai
            </th>
            <tr>
                <td>
                    <label>Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" style="width:98%" placeholder="Masukkan Nama Anda">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Jabatan</label>
                </td>
                <td>
                    <select name="jabatan" style="width:100%">
                    <option>--- Pilih Jabatan ---</option>
                    <option value="Manager">Manager</option>
                    <option value="Asisten">Asisten</option>
                    <option value="Kepala_Bagian">Kepala Bagian</option>
                    <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Status</label>
                </td>
                <td>
                    <select name="status" style="width:100%">
                    <option>--- Pilih Stastus ---</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Single">Single</option>  
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Jumlah Anak</label>
                </td>
                <td>
                    <select name="jumlahAnak" style="width:100%">
                    <option>--- Pilih Jumlah Anak ---</option>
                    <option value="Tidak_Ada">Tidak Ada</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Agama</label>
                </td>
                <td>
                    <select name="agama" style="width:100%">
                    <option>--- Pilih Agama ---</option>
                    <option value="Islam">Islam</option>
                    <option value="Non_Islam">Non Islam</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#AEC2B6">
                    <button name="proses" type="submit">Simpan</button><br>
                </td>
            </tr>
        </table>
    </form>

    <br>
    <?php
    // untuk menghilangkan tulisan warning pada tampilan web saat data masih kosong
    error_reporting(0);

    $nama    = $_GET['nama'];
    $jabatan = $_GET['jabatan'];
    $status  = $_GET['status'];
    $anak = $_GET['jumlahAnak'];
    $agama   = $_GET['agama'];
    $tombol  = $_GET['proses'];

    // penggunaan switch case untuk menentukan gaji pokok
    switch ($jabatan) {
        case "Manager"       : $gajiPokok = 20000000; break;
        case "Asisten"       : $gajiPokok = 15000000; break;
        case "Kepala_Bagian" : $gajiPokok = 10000000; break;
        case "Staff"         : $gajiPokok = 4000000; break;
        default              :  $gajiPokok = "";
    }

    // tunjangan jabatan
    $tunjanganJabatan = 0.2 * $gajiPokok;

    // penggunaan if multi kondisi untuk menentukan tunjangan keluarga
    if ($status == "Menikah" && $anak == 2)
    $tunjanganKeluarga = 0.05 * $gajiPokok;
    else if ($status == "Menikah" && $anak <=5 )
    $tunjanganKeluarga = 0.1 * $gajiPokok;
    else $tunjanganKeluarga = 0;

    // gaji kotor
    $gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;

    // penggunaan ternary untuk menentukan zakat
    $zakat = ($agama == "Islam" && $gajiKotor >= 6000000) ? 0.025 * $gajiKotor: 0;

    // take home pay
    $THP = $gajiKotor - $zakat;

    // button
    if(isset($tombol)){}
    ?>

    <fieldset>
        <legend>Rincian Gaji Pegawai</legend>
    <!-- menampilkan output -->
    Nama Pegawai : <?=  $nama ?>
    <br>Jabatan : <?= $jabatan ?>
    <br>Status : <?= $status ?>
    <br> Agama : <?= $agama ?>
    <br> Gaji Pokok : Rp<?= $gajiPokok ?>
    <br> Tunjangan Jabatan : Rp. <?= $tunjanganJabatan ?>
    <br> Tunjangan Keluarga : Rp. <?= $tunjanganKeluarga ?>
    <br> Gaji Kotor : Rp. <?= $gajiKotor ?>
    <br> Zakat : Rp. <?= $zakat ?>
    <br> Take Home Pay : Rp. <?= $THP ?>
    </fieldset>
    </center>
</body>
</html>