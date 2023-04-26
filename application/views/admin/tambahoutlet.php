<html>

<head>
    <title>Outlet</title>
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:20px; width:60%;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Tambah Outlet</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url("hadmin/Outlet/tambah_aksi"); ?>">

                    <div class="form-group">
                        <label>Nama Outlet</label>
                        <input type="text" class="form-control" name="nm">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="al">
                    </div>
                    
                    <div class="form-group">
                        <label>Nomor Telpon</label>
                        <input type="text" class="form-control" name="nt">
                    </div>

                    
                    <button class="btn btn-dark btn-sm" type="submit">Simpan</button>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/outlet") ?>">Kembali</a>

                </form>

            </div>
        </div>
    </div>


</body>

</html>