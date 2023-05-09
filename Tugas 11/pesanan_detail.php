<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);
?>

<br>
<br>
<center>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-header">

                <h4>Detail Pesanan</h4>
                <h4>Nama Pemesan: <?= $pesanan["nama_pelanggan"] ?></h4>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Pelanggan Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $pesanan["tanggal"] ?> </td>
                            <td><?= $pesanan["total"] ?> </td>
                            <td><?= $pesanan["pelanggan_id"] ?> </td>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</center>