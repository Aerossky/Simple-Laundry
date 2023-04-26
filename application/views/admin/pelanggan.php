<html>

<head>
    <title>Pelanggan</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card">
            <div class="card-head" style="padding:20px;">
                <h4>Pelanggan</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-dark btn-sm float-right" href="<?php echo base_url("hadmin/pelanggan/tambah_data") ?>">Tambah Pelanggan</a>
                <br> <br>
                <?php echo $this->session->flashdata('pesan'); ?>
                <table class="table table-striped text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor telpon</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($pelanggan as $p) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->nama ?></td>
                            <td><?php echo $p->alamat ?></td>
                            <td><?php echo $p->jenis_kelamin ?></td>
                            <td><?php echo $p->tlp ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_Url("hadmin/pelanggan/edit_data/") . $p->id_m ?> ">Edit</a>
                                <a onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm" href="<?php echo base_Url("hadmin/pelanggan/hapus_data/") . $p->id_m ?>">Hapus</a>




                            </td>
                        </tr>
                    <?php } ?>


                </table>

            </div>


        </div>

    </div>


</body>

</html>