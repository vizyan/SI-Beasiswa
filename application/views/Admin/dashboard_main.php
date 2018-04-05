<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistem Informasi Beasiswa</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url() ?>assets/css/material-dashboard.css" rel="stylesheet"/>

    <!-- Custom CSS - Pramudya Erviansyah   -->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="<?= site_url('home') ?>" class="simple-text">
					PBD
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	              <li class="<?php echo $active ?>">
	                    <a href="<?= site_url('dashboard/admin/home') ?>">
	                        <i class="material-icons" style="padding-top:8%">dashboard</i>
                            <div>
                                <p>Daftar Penyedia</p>
                                <p>Beasiswa</p>
                            </div>
	                    </a>
	                </li>
	            </ul>
	    	</div>
            <div class="sidebar-background"></div>
		</div>


	    <div class="main-panel">
            <div id="navbar" fixed-nav-bar>
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        <p></p>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#pill1" data-toggle="tab"><?php echo $title ?></a></li>
                        </ul>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
                                <ul class="dropdown-menu">
                                    <?php $data = $this->session->userdata('data_login') ?>
									<li><a href="#"><?php echo $data['name'] ?></a></li>
                                    <li><a href="#">Status : <?php echo $data['previledge'] ?></a></li>
									<li><a href="<?= site_url('logout') ?>">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
            </div>

	         <div class="content">
	            <div class="container-fluid">
	                <div class="row">
                        <?php $this->load->view($content); ?>
	                </div>
	            </div>
	        </div>
			<footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Teknik Komputer</a>, Sistem Informasi Beasiswa
	                </p>
	            </div>
	        </footer>
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
