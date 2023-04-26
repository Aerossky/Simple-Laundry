<html>


<head>
    <title>Pengguna</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="margin-top:20px;">
        <div class="card">
            <div class="Card-head" style="padding:10px;">
                <h4>Pengguna</h4>
            </div>

            <div class="card-body ">
                <a class="btn btn-dark btn-sm float-right " href="<?php echo base_url("hadmin/Pengguna/tambah_data") ?>">Tambah Pengguna</a>
                <br><br>
                <?php echo $this->session->flashdata('pesan'); ?>
                <table class="table table-striped text-center" href="">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Outlet</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($pengguna as $p) { ?>
                        <tr>

                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->nama_user ?></td>
                            <td><?php echo $p->username ?></td>
                            <td><?php echo $p->role ?></td>
                            <td> <?php
                                    if ($p->status == "Aktif") {
                                        echo "<div class='badge badge-success'>Aktif</div>";
                                    } else if ($p->status == "Tidak Aktif") {
                                        echo "<div class='badge badge-danger'>Tidak Aktif</div>";
                                    }
                                    ?>
                            </td>
                            <td><?php echo $p->nama ?></td>





                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url("hadmin/Pengguna/edit/" . $p->id) ?>">Edit</a>
                                <a onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm" href="<?php echo base_Url("hadmin/Pengguna/hapus/" . $p->id) ?>">Hapus</a>

                            </td>

                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>

</body>

</html>