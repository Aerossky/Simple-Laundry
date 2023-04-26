<html>

<head>
    <title>Transaksi</title>



</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style=" padding-top:20px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Tambah Transaksi</h4>
            </div>

            <div class="card-body">
                <form method="POST" action=" <?php echo base_url("hadmin/transaksi/tambah_aksi") ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <select class="form-control" name="nm" required>
                            <option value="" >Pilih Nama Pelanggan</option>
                            <?php foreach ($nama as $n) { ?>
                                <option value="<?php echo $n->id_m ?>" ><?php echo $n->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label>Nama Paket</label>
                            <select class="form-control" name="pk" required>
                                <option value="">Pilih Paket</option>
                                <?php foreach ($paket as $p) { ?>
                                    <option value="<?php echo $p->id_paket ?>" ><?php echo $p->nama_paket ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <!--BATAS-->

                        <div class="form-group col-md-6">
                            <label>Berat</label>
                            <input type="hidden" name="id_outlet" value="<?php echo $this->session->userdata('id_o'); ?>" required>
                            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id'); ?>" required>
                            <input type="hidden" name="tgl" value="<?php echo date("Y-m-d") ?>" >
                            <input type="text" class="form-control" name="brt" id="brt" value="1" required></input>
                        </div>

                    </div>



                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgls" required>
                    </div>

                    <div class="form-group">
                        <label>Pajak</label>
                        <input type="text" class="form-control" name="pjk" placeholder="Masukkan pajak tanpa %" required >
                    </div>

                    <div class="form-group">
                        <label>Diskon</label>
                        <input type="text" class="form-control" name="dkn" placeholder="Masukkan diskon tanpa %" required >
                    </div>

                    <div class="form-group">
                        <label>Biaya Tambahan</label>
                        <input type="text" class="form-control" name="tb" >
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" name="stt" value="Baru" readonly >


                        </input>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <select class="form-control" name="kt">
                            <option value="">Pilih Keterangan</option>
                            <option value="sudahbayar">Sudah Bayar</option>
                            <option value="belum bayar">Belum Bayar</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <button class="btn btn-dark btn-sm" type="Submit">Simpan</button>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/transaksi") ?>">Kembali</a>
                    </div>



                </form>

            </div>
        </div>
    </div>

</body>




</html>