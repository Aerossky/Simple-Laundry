<html>


<head>
    <title>Tambah Pengguna</title>

</head>


<body style="background-color:#f0f0f0;">
    <div class="container" style="margin-top:20px; width:60%;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Tambah Pengguna</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/pengguna/tambah_aksi") ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nm" required>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="un" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="pw" required>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" type="text" name="jb" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                            <option value="pemilik">Pemilik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="stt" required>
                            <option value="">Pilih Status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Outlet</label>
                        <select class="form-control" name="ot" required>
                            <option value="">Pilih Outlet</option>
                            <?php foreach ($outlet as $o) { ?>
                                <option value="<?php echo $o->id_outlet ?>"><?php echo $o->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/pengguna") ?>">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>