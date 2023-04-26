<!DOCTYPE html>
<html>

<head>
    <title>Cetak Struk</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">


    <script src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
</head>

<body>






    <div class="col-md-10 col-md-offset-1">

        <center>
            <h2>RISKY LAUNDRY</h2>
        </center>
        <h3>INVOICE-<?= $transaksi->id ?></h3>


        <br />

        <table class="table">
            <tr>
                <th width="20%">Tgl. Laundry</th>
                <th>:</th>
                <td><?= $transaksi->tgl ?></td>
            </tr>
            <tr>
                <th>Nama Pelanggan</th>
                <th>:</th>
                <td><?= $transaksi->nama_member ?></td>
            </tr>



            <tr>
                <th>Berat Cucian (Kg)</th>
                <th>:</th>
                <td><?= $transaksi->berat ?></td>
            </tr>
            <tr>
                <th>Tgl. Selesai</th>
                <th>:</th>
                <td><?= $transaksi->batas_waktu ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <th>:</th>
                <td>
                    <?php
                    if ($transaksi->status == "baru") {
                        echo "<div class='badge badge-danger'>Baru</div>";
                    } else if ($transaksi->status == "proses") {
                        echo "<div class='badge badge-warning'>Proses</div>";
                    } else if ($transaksi->status == "selesai") {
                        echo "<div class='badge badge-dark'>Selesai</div>";
                    } else if ($transaksi->status == "diambil") {
                        echo "<div class='badge badge-success'>Diambil</div>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>:</th>
                <td><?php echo number_format($transaksi->berat * $transaksi->harga + $transaksi->biaya_tambahan + (($transaksi->pajak / 100) * $transaksi->berat * $transaksi->harga + $transaksi->biaya_tambahan) - (($transaksi->diskon / 100) * $transaksi->berat * $transaksi->harga + $transaksi->biaya_tambahan), 0, ',', ',') ?></td>
            </tr>
        </table>

        <br />
        <p>
            <center>Terimakasih telah mempercayakan cucian anda pada kami</center>
        </p>


    </div>






</body>

</html>