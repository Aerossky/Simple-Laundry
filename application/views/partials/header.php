    <?php if ($this->session->userdata("role") == "admin") { ?>
        <html>

        <head>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">


            <script src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
            <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
        </head>
        <style>

        </style>

        <body>
            <navbar class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="navbar-brand">
                    RISKY LAUNDRY
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url("hadmin/Utama") ?>"><i class="fas fa-home"></i> Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Pelanggan") ?>"><i class="fas fa-users"></i> Pelanggan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Transaksi") ?>"><i class="fas fa-shopping-cart"></i> Transaki</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Pengguna") ?>"> <i class="fas fa-users-cog"></i> Pengguna</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Laporan") ?>"> <i class="fas fa-newspaper"></i> Laporan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" data-toggle="dropdown"> <i class="fas fa-cog"></i> Pengaturan</a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="<?php echo base_url("hadmin/Pengaturanp") ?>"><i class="fas fa-key"></i> Pengaturan Password</a>
                                <a class="dropdown-item" href="<?php echo base_url("hadmin/Outlet") ?>"> <i class="fas fa-store"></i> Pengaturan Outlet</a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="<?php echo base_url("hadmin/Paket") ?>"><i class="fas fa-layer-group"></i> Pengaturan Paket</a>
                                <a class="dropdown-item" href="<?php echo base_url("hadmin/Kpaket") ?>"><i class="fas fa-sliders-h"></i> Pengaturan Kategori Paket</a>
                            </div>
                        </li>

                        <li>
                            <a class="nav-link " href="<?php echo base_url("login/logout") ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>



                    </ul>

                </div>


                <li class="nav" style="color:white;">
                    <div>Halo,<?php echo $this->session->userdata('nama') ?> </div>
                </li>



            </navbar>

        </body>

        </html>
    <?php } ?>

    <?php if ($this->session->userdata("role") == "kasir") { ?>
        <html>

        <head>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">


            <script src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
            <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
        </head>
        <style>

        </style>

        <body>
            <navbar class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="navbar-brand">
                    RISKY LAUNDRY
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url("hadmin/Utama") ?>"><i class="fas fa-home"></i> Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Pelanggan") ?>"><i class="fas fa-users"></i> Pelanggan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Transaksi") ?>"><i class="fas fa-shopping-cart"></i> Transaki</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Laporan") ?>"> <i class="fas fa-newspaper"></i> Laporan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" data-toggle="dropdown"> <i class="fas fa-cog"></i> Pengaturan</a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="<?php echo base_url("hadmin/Pengaturanp") ?>"><i class="fas fa-key"></i> Pengaturan Password</a>

                            </div>
                        </li>

                        <li>
                            <a class="nav-link " href="<?php echo base_url("login/logout") ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                        >

                    </ul>

                </div>


                <li class="nav" style="color:white;">
                    <div>Halo,<?php echo $this->session->userdata('nama') ?> </div>
                </li>



            </navbar>

        </body>

        </html>
    <?php } ?>



    <?php if ($this->session->userdata("role") == "pemilik") { ?>
        <html>

        <head>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
            <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">


            <script src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
            <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
        </head>
        <style>

        </style>

        <body>
            <navbar class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="navbar-brand">
                    RISKY LAUNDRY
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url("hadmin/Utama") ?>"><i class="fas fa-home"></i> Dashboard</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url("hadmin/Laporan") ?>"> <i class="fas fa-newspaper"></i> Laporan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" data-toggle="dropdown"> <i class="fas fa-cog"></i> Pengaturan</a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="<?php echo base_url("hadmin/Pengaturanp") ?>"><i class="fas fa-key"></i> Pengaturan Password</a>

                            </div>
                        </li>

                        <li>
                            <a class="nav-link " href="<?php echo base_url("login/logout") ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                        >

                    </ul>

                </div>


                <li class="nav" style="color:white;">
                    <div>Halo,<?php echo $this->session->userdata('nama') ?> </div>
                </li>



            </navbar>

        </body>

        </html>
    <?php } ?>