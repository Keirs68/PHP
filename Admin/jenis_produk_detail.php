<?php
$id = $_REQUEST['id'];
$model = new JenisProduk();
$jproduk = $model->getJenisProduk($id);
?>

<br>
<br>
<center>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-header">

                <h3>Detail Jenis Produk</h3>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $jproduk["nama"] ?> </td>
                            <td><?= $jproduk["ket"] ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</center>