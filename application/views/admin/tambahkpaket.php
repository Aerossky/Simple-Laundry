<html>

<head>
    <title>Tambah Kategori Paket</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px; width:60%;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Tambah Kategori Paket</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/Kpaket/tambah_aksi"); ?>">


                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nm">
                    </div>
                    <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/Kpaket") ?>">Kembali</a>

                </form>

            </div>
        </div>
    </div>


</body>

</html>