<html>

<head>
    <title>Pengaturan Harga</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="width:50%; padding-top:20px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Pengaturan Harga</h4>
            </div>
            <div class="card-body">
                <?php foreach ($harga as $h) { ?>

                    <div style="font-weight:700; font-size:20px; padding-left:35%;"> HARGA SAAT INI</div>
                    <div style="font-weight:500; font-size:20px; padding-left:40%;"> Rp.<?php echo number_format($h->harga, 0, ',', ',') ?></div>
                    <br>

                    <div class="form-group">
                        <a class="btn btn-dark btn-sm" href="<?php echo base_url("hadmin/harga/edit/") . $h->id_harga ?>">Ganti Harga</a>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/utama") ?>">Kembali</a>
                    </div>


                <?php } ?>
            </div>

        </div>


    </div>

</body>









</html>