    <div class="card">
        <div class="card-head" style="padding:20px;">
            <h4>List Data Transaksi</h4>
        </div>
        <div class="card-body">

            <a href="<?= base_url('hadmin/Laporan/do_print/' . $tgl_dari . '/' . $tgl_sampai . '/' . $status) ?>" class="btn btn-danger btn-md float-right" target="_blank"><i class="fa fa-print"></i> Print</a>
            <br><br>
            <table class="table table-striped text-center">

                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama </th>
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
        </div>
    </div>