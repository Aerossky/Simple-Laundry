<html>

<head>
    <title>Edit Transaksi</title>



</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style=" padding-top:20px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Edit Transaksi</h4>
            </div>

            <div class="card-body">
                <form method="POST" action=" <?php echo base_url("hadmin/transaksi/update") ?>">
                    <?php foreach ($transaksi as $t) { ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <select class="form-control" name="nm">
                                <?php foreach ($nama as $n) { ?>
                                    <option value="<?php echo $n->id_m; ?>" <?php echo $n->id_m == $t->id_member ? "selected" : ""; ?>>
                                        <?php echo $n->nama ?>
                                    </option>

                                <?php } ?>

                            </select>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>Nama Paket</label>
                                <select class="form-control" name="pk">

                                    <?php foreach ($nama1 as $n) { ?>
                                        <option value="<?php echo $n->id_paket; ?>" <?php echo $n->id_paket == $t->id_p ? "selected" : ""; ?>>
                                            <?php echo $n->nama_paket ?>
                                        </option>

                                    <?php } ?>

                                </select>
                            </div>

                            <!--BATAS-->

                            <div class="form-group col-md-6">
                                <label>Berat</label>
                                <input type="hidden" name="id" value="<?php echo $t->id ?>">
                                <input type="hidden" name="id_outlet" value="<?php echo $this->session->userdata('id_o'); ?>">
                                <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id'); ?>">
                                <input type="hidden" name="tgl" value="<?php echo date("Y-m-d") ?>">
                                <input type="text" class="form-control" name="brt" id="brt" value="<?php echo $t->berat ?>"></input>
                            </div>

                        </div>



                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" class="form-control" name="tgls" value="<?php echo $t->batas_waktu ?>">
                        </div>

                        <div class="form-group">
                            <label>Pajak</label>
                            <input type="text" class="form-control" name="pjk" placeholder="Masukkan pajak tanpa %" value="<?php echo $t->pajak ?>">
                        </div>

                        <div class="form-group">
                            <label>Diskon</label>
                            <input type="text" class="form-control" name="dkn" placeholder="Masukkan diskon tanpa %" value="<?php echo $t->diskon ?>">
                        </div>

                        <div class="form-group">
                            <label>Biaya Tambahan</label>
                            <input type="text" class="form-control" name="tb" value="<?php echo $t->biaya_tambahan ?>">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select type="text" class="form-control" name="stt">
                                <option value="<?php echo $t->status ?>"><?php echo $t->status ?></option>
                                <option value="Baru">Baru</option>
                                <option value="Proses">Proses</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Diambil">Diambil</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="form-control" name="kt">
                                <option value="<?php echo $t->Keterangan ?>"><?php echo $t->Keterangan ?></option>
                                <option value="sudahbayar">Sudah Bayar</option>
                                <option value="belum bayar">Belum Bayar</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <button class="btn btn-dark btn-sm" type="Submit">Simpan</button>
                            <a class="btn btn-danger btn-sm" href="<?php echo base_url("hadmin/transaksi") ?>">Kembali</a>
                        </div>


                    <?php } ?>
                </form>

            </div>
        </div>
    </div>

</body>




</html>