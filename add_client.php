
<?php
session_start();
include'functions.php';
include'connection.php';
    ?>
<html class="no-js" lang="en">
    

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
    <meta name="description" content="type_your_description_here">
    <meta content="" name="author" />
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/animate/animate.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pratham.min.css">
    <title>Pratham | The most powerful admin theme | login</title>
</head>

<body>
    <div class="prtm-wrapper">
        <div class="prtm-main"> <a class="fixed-btn" href="index.html"><i class="fa fa-arrow-left mrgn-r-xs"></i>Back To Home</a>
            <div class="login-banner"></div>
            <div class="login-form-wrapper mrgn-b-lg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-5 center-block">
                            <div class="prtm-form-block prtm-full-block overflow-wrappper">
                                <div class="login-bar"> <img src="assets/img/login-bars.png" class="img-responsive" alt="login bar" width="743" height="7"> </div>
                                <div class="prtm-block-title text-center">
                                    <div class="mrgn-b-lg">
                                        <a href="javascript:;"> <img src="assets/img/prtm-logo.png" alt="login logo" class="img-responsive display-ib" width="218" height="23"> </a>
                                    </div>
                                    <div class="login-top mrgn-b-lg">
                                        <div class="mrgn-b-md">
                                            <h2 class="text-capitalize base-dark font-2x fw-normal">Add a client </h2> </div>
                                    </div>
                                </div>
                                <div class="prtm-block-content">
                                    <form class="login-form" action="" method="post">
                                        <div class="form-group has-feedback">
                                        <label for="cars">Client Name:</label>

                                        <select name="client_name">
                                        <option value="Trend">Trend</option>
                                        <option value="Ciena">Ciena</option>
                                        <option value="Ripplemark">Ripplemark</option>
                                        </select>

                                        <input class="form-control" id="user-id" type="text" name="username" placeholder="User Name" required> <span class="glyphicon glyphicon-user form-control-feedback fa-lg" aria-hidden="true"></span> </div>
                                        <div class="form-group has-feedback">
                                            <input class="form-control" id="user-pwd" aria-describedby="user-pwd" name="password" type="password" placeholder="Password" required> <span class="glyphicon glyphicon-lock form-control-feedback fa-lg" aria-hidden="true"></span> </div>
                                        <div class="login-meta mrgn-b-lg">
                                           
                                        </div>
                                        <div class="mrgn-b-lg">
                                            <button type="submit" name="submit" class="btn btn-success btn-block font-2x">Create Client</button>
                                        </div>
                                        <div class="text-center">
                                    </form>
                                   
                                    <?php
                                        if(isset($_POST['submit']))
                                        {
                                            add_client();
                                        }
                                    ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="assets/js/vendor.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins.min.js" type="text/javascript"></script>
    <script src="assets/js/pratham.min.js" type="text/javascript"></script>
</body>

</html>