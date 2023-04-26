<html>

<head>
    <title>Detail Transaksi</title>
</head>

<body style="background-color:#f0f0f0;">

    <div class="container" style="padding-top:30px;">
        <div class="card">
            <div class="card-head" style="padding:20px;">
                <h4>Detail Transaksi</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-dark btn-sm float-right" href="<?php echo base_url("hadmin/transaksi/cetak_detail/".$transaksi->id) ?>" target="_blank"><i class="fa fa-print"></i> Print Struk</a>
                <table class="table table-borderless text-center ">
                    <tbody>
                        <tr>
                            <th scope="row">Id Transaksi</th>
                            <td><?=$transaksi->id?></td>
                            <td></td>
                            <td></td>


                        </tr>
                        <tr>
                            <th scope="row">Nama Pelanggan</th>
                            <td><?=$transaksi->nama_member?></td>


                        </tr>
                        <tr>
                            <th scope="row">Tanggal Selesai</th>
                            <td><?=$transaksi->batas_waktu?></td>


                        </tr>

                        <tr>
                            <th scope="row">Nama Paket</th>
                            <td><?=$transaksi->nama_paket?></td>


                        </tr>

                        <tr>
                            <th scope="row">keterangan</th>
                            <td><?=$transaksi->Keterangan?></td>


                        </tr>
                        <tr>
                            <th scope="row">Berat</th>
                            <td><?=$transaksi->berat?></td>


                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td><?php
                                if ($transaksi->status == "baru") {
                                    echo "<div class='badge badge-danger'>Baru</div>";
                                } else if ($transaksi->status == "proses") {
                                    echo "<div class='badge badge-warning'>Proses</div>";
                                } else if ($transaksi->status == "selesai") {
                                    echo "<div class='badge badge-dark'>Selesai</div>";
                                } else if ($transaksi->status == "diambil") {
                                    echo "<div class='badge badge-success'>Diambil</div>";
                                }
                                ?></td>


                        </tr>
                    </tbody>
                </table>
            </div>


        </div>


    </div>







</body>


</html>