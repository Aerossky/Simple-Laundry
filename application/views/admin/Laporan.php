<html>

<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
</head>

<body style="background-color:#f0f0f0;">
    <div class="container" style="padding-top:40px;">
        <div class="card" style="padding:20px;">
            <div class="card-head">
                <h4>Filter Laporan</h4>
            </div>
            <div class="card-body">

                <form method="POST" id="MyForm">
                    <div class="form-group">
                        <label>Dari Tanggal</label>
                        <input type="date" class="form-control" name="tgl_dari" id="tgl_dari" required>
                    </div>

                    <div class="form-group">
                        <label>Sampai Tanggal</label>
                        <input type="date" class="form-control" name="tgl_sampai" id="tgl_sampai" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="semua">Semua</option>
                            <option value="baru">Baru</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                            <option value="diambil">Diambil</option>
                        </select>
                    </div>

                    <button type="submit" id="btn-cari" name="btn-cari" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>

                </form>
            </div>
        </div>

        <br><br>

        <div class="tampil"></div>


    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#btn-cari').click(function(e) {
                e.preventDefault();
                var tgl_dari = $('#tgl_dari').val();
                var tgl_sampai = $('#tgl_sampai').val();
                var status = $('#status').val();

                if (tgl_dari == '' || tgl_sampai == '') {
                    alert('Tanggal tidak boleh kosong');
                    return false;
                }

                $.ajax({
                    url: "<?= base_url('hadmin/Laporan/cari') ?>",
                    type: "POST",
                    dataType: "html",
                    data: {
                        tgl_dari: tgl_dari,
                        tgl_sampai: tgl_sampai,
                        status: status
                    },
                    success: function(data) {
                        $('.tampil').html(data);
                    }
                })


            })

        })
    </script>
</body>

</html>