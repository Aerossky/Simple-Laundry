<html>

<head>
    <title>Paket</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card">
            <div class="card-head" style="padding:20px;">
                <h4>Paket</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-dark btn-sm float-right" href="<?php echo base_url("hadmin/paket/tambah_data") ?>">Tambah Paket</a>
                <br> <br>
                <?php echo $this->session->flashdata('pesan'); ?>
                <table class="table table-striped text-center">


                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($paket as $p) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->nama_kategori ?></td>
                            <td><?php echo $p->nama_paket ?></td>
                            <td>Rp<?php echo  number_format($p->harga, 0, ',', ',') ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url("hadmin/paket/edit_data/") . $p->id_paket ?>">Edit</a>
                                <a onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/paket/hapus_data/") . $p->id_paket ?>">delete</a>

                            </td>
                        </tr>


                    <?php } ?>

                </table>

            </div>


        </div>

    </div>


</body>






</html>