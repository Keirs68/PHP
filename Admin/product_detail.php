<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);
?>

<br>
<br>
<center>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-header">

                <h3>Detail Produk</h3>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $produk["kode"] ?> </td>
                            <td><?= $produk["nama"] ?> </td>
                            <td><?= $produk["harga_jual"] ?> </td>
                            <td><?= $produk["stok"] ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</center>