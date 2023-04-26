<html>

<head>
    <title>Tambah Pelanggan</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px; width:60%;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Tambah Pelanggan</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/pelanggan/tambah_aksi"); ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nm" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="al" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select type="text" class="form-control" name="jk" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telpon</label>
                        <input type="text" class="form-control" name="nt" required>
                    </div>

                    <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/pelanggan") ?>">Kembali</a>

                </form>

            </div>
        </div>
    </div>


</body>

</html>