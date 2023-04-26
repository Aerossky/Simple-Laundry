<html>

<head>
    <title>Edit Outlet</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Edit Pengguna</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/Outlet/update"); ?>">
                    <?php foreach ($outlet1 as $o) { ?>
                        <div class="form-group">
                            <label>Nama Outlet</label>
                            <input type="hidden" name="id" value="<?php echo $o->id_outlet ?>">
                            <input class="form-control" type="text" name="nm" value="<?php echo $o->nama ?>">
                        </div>

                        <div class=" form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="al" value="<?php echo $o->alamat ?>">
                        </div>


                        <div class=" form-group">
                            <label>Nomor Telpon</label>
                            <input class="form-control" type="text" name="nt" value="<?php echo $o->tlp ?>">
                        </div>



                        <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/Outlet") ?>">Kembali</a>
                    <?php } ?>
                </form>


            </div>
        </div>

    </div>


</body>

</html>