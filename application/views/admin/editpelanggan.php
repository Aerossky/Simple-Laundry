<html>

<head>
    <title>Edit Pelanggan</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card" style="padding:10px;">
            <div class="card-head">
                <h4>Edit Pelanggan</h4>
            </div>

            <div class="card-body">
                <?php foreach ($pelanggan1 as $p) { ?>
                    <form method="POST" action="<?php echo base_url("hadmin/pelanggan/update") ?>">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $p->id_m ?>">
                            <input type="text" class="form-control" name="nm" value="<?php echo $p->nama ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="al" value="<?php echo $p->alamat ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select type="text" class="form-control" name="jk">
                                <option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telpon</label>
                            <input type="text" class="form-control" name="nt" value="<?php echo $p->tlp ?>">
                        </div>

                        <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/pelanggan") ?>">Kembali</a>

                    </form>
                <?php } ?>

            </div>

        </div>
    </div>


</body>



</html>