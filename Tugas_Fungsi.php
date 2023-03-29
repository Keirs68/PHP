<?php
// Array
$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "ILKOM" => "Ilmu Komputer", "TE" => "Teknik Elektro"];
$ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "MySQL" => 30, "Laravel" => 40];
$domisili = ["Jakarta", "Bandung", "Bekasi", "Malang", "Surabaya", "Lainnya"];
?>

<fieldset style="background-color:blanchedalmond; width:50%; right: 80px; position:absolute; top: 10px; left: 25%;">
<legend align="center"><h3>Form Registrasi Kelompok Belajar</h3></legend>
<!-- Membuat Table -->
<table cellpadding="5">
    <thead>
        <tr>
            <th colspan="2" align="justify">FORM REGISTRASI</th>
        </tr>
    </thead>

    <tbody>
        <form method="POST">
            <tr>
                <td>NIM</td>
                <td> : </td>
                <td>
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td>
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki"> Laki-laki &nbsp;
                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td> : </td>
                <td>
                    <select name="prodi" >
                        <?php
                        foreach($ar_prodi as $prodi => $value){
                            ?>
                            <option value="<?= $prodi ?>"><?= $value ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming</td>
                <td> : </td>
                <td>
                    <?php
                    foreach($ar_skill as $skill => $s){
                        ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>
                    <?php } ?>
                </td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>Domisili</td>
                <td> : </td>
                <td>
                    <select name="domisili" >
                        <?php
                        foreach($domisili as $d){
                            ?>
                            <option value="<?= $d ?>"><?= $d ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
    </tbody>

    <tfoot>
        <tr>
            <th colspan="2" align="justify">
                <button name="proses">Submit</button>
            </th>
        </tr>
    </tfoot>
    </form>
</table>
</fieldset>

<fieldset style="background-color:blanchedalmond; width: 50%; right: 80px; position:absolute; top: 370px; left: 25%;">
<?php
  // untuk menghilangkan tulisan warning pada tampilan web saat data masih kosong
error_reporting(0);

if(isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
}

//menentukan total score
$score = 0;
foreach($skill as $jumlah) {
    if(isset($ar_skill[$jumlah])) {
        $score += $ar_skill[$jumlah];
    }
}

// penggunaan fungsi untuk menentukan kategori skill
function kategori($score) {
    if ($score >= 100 && $score <=150){
        return "Sangat Baik";
    }else if ($score >= 60 && $score <=100){
        return "Baik";
    }else if ($score >= 40 && $score <=60){
        return "Cukup";
    }else if ($score >= 0 && $score <=40){
        return "Kurang";
    }else{
        return "Tidak Memadai";
    }
}
?>

<!-- table untuk menampilkan output -->
<table cellpadding="5">
    <thead>
        <tr>
            <th colspan="2" align="justify">OUTPUT</th>
        </tr>
    </thead>

    <tbody>
        <form>
            <tr>
                <td>NIM</td>
                <td> : </td>
                <td> <?= $nim ?> </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td> <?= $nama ?> </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td> <?= $jk ?> </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td> : </td>
                <td> <?= $prodi ?> </td>
            </tr>
            <tr>
                <td>Skill Programming</td>
                <td> : </td>
                <td>
                <?php
                    foreach( $skill as $s){ ?>
                    <?= $s ?>,
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Skor Skill</td>
                <td> : </td>
                <td> <?= $score ?> </td>
            </tr>
            <tr>
                <td>Kategori Skill</td>
                <td> : </td>
                <td> <?= kategori($score) ?> </td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td> : </td>
                <td> <?= $domisili ?> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td> <?= $email ?> </td>
            </tr>
    </tbody>
</fieldset>