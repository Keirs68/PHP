<center>
<table border="0" cellpadding="15" width=40% style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
    <thead>
        <br>
        <h2>Menghitung Luas dan Keliling Bangun Datar</h2><hr><br>
    </thead>

    <tbody>
        <tr>
            <?php
            require_once 'Lingkaran.php';
            require_once 'PersegiPanjang.php';
            require_once 'Segitiga.php';

            $l = new Lingkaran(5);
            $p = new Persegi_Panjang(10, 15);
            $s = new Segitiga(6, 9, 10);

            $ar_data = [$l, $p, $s];

            foreach($ar_data as $data){
                ?>
                <tr>
                    <td colspan="2" align="center" bgcolor="#867070"><b><?= $data->namaBidang(). '<br>'?></b></td>
                </tr>
                <tr bgcolor="#D5B4B4" align="center">
                    <td>Luas</td>
                    <td><?= $data->luasBidang(). '<br>'?></td>
                </tr>
                <tr bgcolor="#E4D0D0" align="center">
                    <td>Keliling</td>
                    <td><?= $data->kelilingBidang(). '<br>'?></td>
                </tr>
            <?php } ?>
        </tr>
    </tbody>
</table>
</center>