<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistem Informasi Beasiswa</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url() ?>assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="content center-content" style="min-width:350px">
        <div class="container-fluid">
            <div class="row">
                <?php echo $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Login</h4>
                        <p class="category">Mahasiswa - Sistem Informasi Beasiswa</p>
                    </div>
                    <br />
                    <br />
                    <div class="card-profile">
                        <div class="card-avatar">
                            <img class="img" src="<?php echo base_url() ?>assets/img/account.jpg" />
                        </div>
                    </div>
                    <div class="card-content">
                        <form method="post" action="<?= site_url('login/user') ?>">
                            <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NIM</label>
                                        <input type="number" name="etId_user" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input type="password" name="etPassword" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <center><button type="submit" class="btn btn-primary btn-round" style="min-width:125px">Login</button></center>
                            <br />
                            <a href="<?= site_url('home/admin') ?>" class="pull-right" style="padding-right:20px"><p>Login Admin</p></a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url() ?>assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url() ?>assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo base_url() ?>assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url() ?>assets/js/demo.js"></script>

</html>
