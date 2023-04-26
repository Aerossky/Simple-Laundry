<html>

<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css") ?>">


</head>
<style>
    body {
        animation: transitionIn 1.5s;
    }

    @keyframes transitionIn {

        from {
            opacity: 0;
            transform: rotateX(-10px);
        }

        to {
            opacity: 1;
            transform: rotateX(0);
        }


    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        padding-top: 7%;
        background: #222831;
    }

    .row {
        margin: 0px 220px 100px 220px;
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
    }

    img {
        margin-left: 10%;
        text-align: center;
        border-top-left-radius: 30px;
        padding-top: 5%;
        border-bottom-left-radius: 30px;
        padding: 5px;
    }

    .btn1 {
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: #f05454;
        border-radius: 30px;
        color: white;
        font-weight: bold;
        opacity: 1;
        transition: 0.4s;
    }

    .btn1:hover {
        background: white;
        border: 1px solid;
        color: #f05454;
        opacity: 1;
    }
</style>

<body style="background-color:#393e46;">
    <div class="row no-gutters">
        <div class="col -lg-5 ">
            <img src="assets/img/login.svg" class="" width="350" height="400">
        </div>
        <div class="col-lg-7 px-7 pt-5" style="padding-left:100px; ">
            <p style="font-size:30px; "> RISKY <strong>LAUNDRY</strong></p>
            <form action="<?php echo base_url("login/login"); ?>" method="POST">

                <div class="form-row">
                    <div class="col-lg-7">
                        <input type="text" placeholder="Username" class="form-control my-3 p-2" style="border-radius:20px;" name="username">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-7">
                        <input type="password" placeholder="Password" class="form-control my-3 p-2" style="border-radius:20px;" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-7">
                        <button type="submit" class="btn1 mt-2 mb-5">Login</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>















</html>