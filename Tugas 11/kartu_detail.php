<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);
?>

<br>
<br>
<center>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-header">
                <div>
                    <h3>Detail Kartu</h3>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Diskon</th>
                                <th>Iuran</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $kartu["kode"] ?> </td>
                                <td><?= $kartu["nama"] ?> </td>
                                <td><?= $kartu["diskon"] ?> </td>
                                <td><?= $kartu["iuran"] ?> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</center>