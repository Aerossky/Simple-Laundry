<!DOCTYPE html>
<html>

<head>
    <title>Laporan Transaksi</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">


    <script src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
</head>

<body>

    <h1 align="center">Oke Laundry</h1>

    <hr>

    <h3>Laporan Transaksi</h3>

    <br>
    <table class="table table-striped text-center">

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pelanggan</th>
            <th>Berat</th>
            <th>Tanggal Selesai</th>
            <th>Status</th>
            <th>Total Harga</th>
            <th>Outlet</th>
        </tr>

        <?php
        $no = 1;
        foreach ($laporan as $t) { ?>
            <tr>

                <td><?php echo $no++ ?></td>
                <td><?php echo $t->tgl ?></td>
                <td><?php echo $t->nama_member ?></td>
                <td><?php echo $t->berat ?> Kg</td>
                <td><?php echo $t->batas_waktu ?></td>
                <td><?php
                    if ($t->status == "baru") {
                        echo "<div class='badge badge-danger'>Baru</div>";
                    } else if ($t->status == "proses") {
                        echo "<div class='badge badge-warning'>Proses</div>";
                    } else if ($t->status == "selesai") {
                        echo "<div class='badge badge-dark'>Selesai</div>";
                    } else if ($t->status == "diambil") {
                        echo "<div class='badge badge-success'>Diambil</div>";
                    }
                    ?>
                </td>
                <td>Rp.<?php echo number_format($t->berat * $t->harga + $t->biaya_tambahan + (($t->pajak / 100) * $t->berat * $t->harga + $t->biaya_tambahan) - (($t->diskon / 100) * $t->berat * $t->harga + $t->biaya_tambahan), 0, ',', ',') ?></td>
                <td><?= $t->nama ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>