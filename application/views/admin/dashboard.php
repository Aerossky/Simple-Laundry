    <html>

    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/transisi.css") ?>">
    </head>

    <body style="background-color:#f0f0f0;">
        <div class="container" style=" padding-top:20px;">
            <div class="alert alert-info text-center" style="font-size:20px;">
                SELAMAT DATANG DI SISTEM <strong>RISKY LAUNDRY !</strong>
            </div>

            <div class="card">
                <div class="card-head" style="padding:20px;">
                    <h4>Dashboard</h4>
                </div>
                <div class="card-body">
                    <div class="row" style="margin-left:90px;">
                        <div class="card text-center" style="border:solid black 1px; width:220px; height:120px;">
                            <div style="font-size:15px; font-weight:600;">Jumlah Cucian Baru</div>
                            <i class="fas fa-bell" style="font-size:40px; padding-top:10px;"></i>
                            <div class="card-text" style="padding-top:10px;"><?php echo $baru ?></div>
                        </div>

                        <div class="card text-center" style="border:solid black 1px; width:220px; height:120px; margin-left:10px;">
                            <div style="font-size:15px; font-weight:600;">Jumlah Cucian Dalam Proses</div>
                            <i class="fas fa-spinner   " style="font-size:40px; padding-top:10px;"></i>
                            <div class="card-text" style="padding-top:10px;"><?php echo $proses ?></div>

                        </div>
                        <div class="card text-center" style="border:solid black 1px; width:220px; height:120px; margin-left:10px;">
                            <div style="font-size:15px; font-weight:600;">Jumlah Cucian Selesai</div>
                            <i class="fas fa-people-carry" style="font-size:40px; padding-top:10px;"></i>
                            <div class="card-text" style="padding-top:10px;"><?php echo $selesai ?></div>

                        </div>
                        <div class="card text-center" style="border:solid black 1px; width:220px; height:120px; margin-left:10px;">
                            <div style="font-size:15px; font-weight:600;">Jumlah Cucian Yang Diambil</div>
                            <i class="fas fa-check-circle" style="font-size:40px; padding-top:10px;"></i>
                            <div class="card-text" style="padding-top:10px;"><?php echo $ambil ?></div>

                        </div>
                    </div>
                </div>
            </div>





    </body>

    </html>