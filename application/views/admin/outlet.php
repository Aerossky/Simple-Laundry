<html>

<head>
    <title>Outlet</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card">
            <div class="card-head" style="padding:20px;">
                <h4>Outlet</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-dark btn-sm float-right" href="<?php echo base_url("hadmin/outlet/tambah_data") ?>">Tambah Outlet</a>
                <br> <br>
                <table class="table table-striped text-center">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor telpon</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($outlet as $o) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $o->nama ?></td>
                            <td><?php echo $o->alamat ?></td>
                            <td><?php echo $o->tlp ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url("hadmin/outlet/edit_data/") . $o->id_outlet ?>">Edit</a>
                                <a onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm" href="<?php echo base_Url("hadmin/outlet/hapus_data/") . $o->id_outlet ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>




                </table>

            </div>


        </div>

    </div>


</body>






</html>