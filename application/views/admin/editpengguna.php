<html>

<head>
    <title>Edit Pengguna</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Edit Pengguna</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/pengguna/update"); ?>">
                    <?php foreach ($pengguna1 as $p) { ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $p->id ?>">
                            <input class="form-control" type="text" name="nm" value="<?php echo $p->nama_user ?>">
                        </div>

                        <div class=" form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="un" value="<?php echo $p->username ?>">
                        </div>


                        <div class=" form-group">
                            <label>Jabatan</label>
                            <select class="form-control" type="text" name="jb">
                                <option value="<?php echo $p->role ?>"><?php echo $p->role ?></option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="pemilik">Pemilik</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="stt">
                                <option value="<?php echo $p->status ?>"><?php echo $p->status ?></option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Outlet</label>
                            <select class="form-control" name="ot">
                                <?php foreach ($outlet as $o) { ?>
                                    <option value="<?php echo $o->id_outlet; ?>" <?php echo $o->id_outlet == $p->id_o ? "selected" : ""; ?>>
                                        <?php echo $o->nama; ?>
                                    </option>

                                <?php } ?>

                            </select>
                        </div>


                        <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/pengguna") ?>">Kembali</a>
                    <?php } ?>
                </form>


            </div>
        </div>

    </div>


</body>

</html>