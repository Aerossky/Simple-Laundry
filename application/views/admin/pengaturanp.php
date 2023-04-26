<html>

<head>
    <title>Pengaturan Kata Sandi</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="width:60%; padding-top:40px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Pengaturan Kata Sandi</h4>
            </div>
            <div class="card-body">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'berhasil') {
                        echo "<div class='alert alert-success'> Password berhasil diganti</div>";
                    }
                }
                ?>
                <form method="POST" action="<?php echo base_url("hadmin/Pengaturanp/ganti_pass") ?>">
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" name="pass_baru" required>
                        <?php echo form_error('pass_baru') ?>
                    </div>

                    <div class="form-group">
                        <label>Ulangi Password Baru</label>
                        <input type="password" class="form-control" name="ulang_pass" required>
                        <?php echo form_error('ulang_pass') ?>
                    </div>


                    <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/utama") ?>">Kembali</a>




                </form>
            </div>
        </div>
    </div>
</body>

</html>