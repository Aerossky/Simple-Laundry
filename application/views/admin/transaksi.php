<html>

<head>
    <title>Transaksi</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card">
            <div class="card-head" style="padding:20px;">
                <h4>Transaksi</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-dark btn-sm float-right" href="<?php echo base_url("hadmin/transaksi/tambah_data") ?>">Tambah Transaksi</a>
                <br> <br>
                <?php echo $this->session->flashdata('pesan'); ?>
                <table class="table table-striped text-center">

                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pelanggan</th>
                        <th>Berat</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Total Harga</th>
                        <th>Opsi</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($transaksi as $t) { ?>
                        <tr>

                            <td><?php echo $no++ ?></td>
                            <td><?php echo $t->tgl ?></td>
                            <td><?php echo $t->nama ?></td>
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
                            <td>
                                <a class="btn btn-info btn-sm" href="<?php echo base_url("hadmin/transaksi/detail_data/") . $t->id  ?>">Detail</a>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url("hadmin/transaksi/edit_data/") . $t->id  ?>">Edit</a>
                                <a onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm" href="<?php echo base_Url("hadmin/transaksi/hapus_data/") . $t->id ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>


</body>






</html>