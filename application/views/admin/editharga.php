<html>


<head>
    <title>Edit Harga</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="width:50%; padding-top:50px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Masukkan Harga </h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/harga/update") ?>">
                    <?php foreach ($harga1 as $h) { ?>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="hidden" name="id" value="<?php echo $h->id_harga ?>" class="form-control">
                            <input type="text" name="harga" class="form-control" value="<?php echo $h->harga ?>">
                        </div>

                        <button class="btn btn-dark btn-sm" type="submit">Ubah</button>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/harga") ?>">Kembali</a>
                    <?php } ?>

                </form>
            </div>

        </div>

    </div>



</body>

</html>