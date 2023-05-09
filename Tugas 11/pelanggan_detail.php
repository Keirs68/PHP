<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);
?>

<br>
<br>
<center>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-header">
                <div>
                    <h3>Detail Pelanggan</h3>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Kartu Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $pelanggan["kode"] ?> </td>
                                <td><?= $pelanggan["nama_pelanggan"] ?> </td>
                                <td><?= $pelanggan["jk"] ?> </td>
                                <td><?= $pelanggan["tmp_lahir"] ?> </td>
                                <td><?= $pelanggan["tgl_lahir"] ?> </td>
                                <td><?= $pelanggan["email"] ?> </td>
                                <td><?= $pelanggan["kartu_id"] ?> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</center>