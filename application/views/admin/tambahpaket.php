<html>

<head>
    <title>Tambah Paket</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px; width:60%;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Tambah Paket</h4>
            </div>
            <div class="card-body"></div>
            <form method="POST" action="<?php echo base_url("hadmin/paket/tambah_aksi"); ?>">

                <div class="form-group">
                    <label>Nama Kategori</label>
                    <select type="text" class="form-control" name="nk">
                        <option value="">Pilih Kategori</option>
                        <?php foreach ($kategori as $k) { ?>
                            <option value="<?php echo $k->jenis ?>"><?php echo $k->jenis ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Paket</label>
                    <input type="text" class="form-control" name="np">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="ha">
                </div>

                <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/paket") ?>">Kembali</a>

            </form>

        </div>
    </div>
    </div>


</body>

</html>