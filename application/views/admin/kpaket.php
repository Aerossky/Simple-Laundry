<html>


<head>
    <title>Kategori Paket</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="margin-top:20px; width:70%;">
        <div class="card">
            <div class="Card-head" style="padding:10px;">
                <h4> Kategori Paket</h4>
            </div>

            <div class="card-body ">
                <a class="btn btn-dark btn-sm float-right " href="<?php echo base_url("hadmin/Kpaket/tambah_data") ?>">Tambah Kategori</a>
                <br><br>
                <?php echo $this->session->flashdata('pesan'); ?>
                <table class="table table-striped text-center" href="">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Opsi</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($kategori as $k) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $k->jenis ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url("hadmin/Kpaket/edit_data/") . $k->id ?>">Edit</a>
                                <a onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/Kpaket/hapus/") . $k->id ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>

</body>

</html>