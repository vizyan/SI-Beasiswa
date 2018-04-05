<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
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
    <?php $data = $this->session->userdata('data_login') ?>

    <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Daftar Beasiswa</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <div class="card-content">
                    <?php echo form_open_multipart('taker/join');?>
                    <div class="row" style="padding-left:20px;padding-right:20px">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label for="pic_title">Nama</label>
                                <input type="text" class="form-control" value="<?php echo $data['name'] ?>" disabled>
                                <input type="hidden" class="form-control" name="id_schoolarship" value="<?php echo $id_schoolarship ?>" required >
                                <input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user'] ?>" required >
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left:20px;padding-right:20px">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label for="pic_title">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left:20px;padding-right:20px">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label for="pic_title">IPK</label>
                                <input type="number" class="form-control" name="gpa" required>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left:20px;padding-right:20px">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label for="pic_title">No HP</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                    </div>
                     <div class="row" style="padding-left:20px;padding-right:20px">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label for="pic_title">Alamat</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left:20px;padding-right:20px">
                        <div class="col-md-12" style="heigh:48px">
                            <div class="form-group label-floating">
                                <label for="pic_file">Pilih berkas* : </label>
                                <i class="material-icons">file_upload</i>
                                <div>
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary submitBtn" >Tambah</button>
                    </div>
                    <div class="clearfix"></div>
                    </form>
                    </div>
            </div>

        </div>
    </div>
</div>
	<div class="wrapper">
        <?php $data = $this->session->userdata('data_login') ?>
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
	                <li class="<?php echo $active_sc ?>">
	                    <a href="<?= site_url('dashboard/'.$data['previledge'].'/id') ?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Daftar Beasiswa</p>
	                    </a>
	                </li>
                    <li class="<?php echo $active_pr ?>">
	                    <a href="<?= site_url('profile/'.$data['previledge'].'/'.$data['id_user']) ?>">
	                        <i class="material-icons">person</i>
	                        <p>Profil</p>
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
                <?php echo $this->session->flashdata('message'); ?>
	            <div class="container-fluid">
	                <div class="row">
                        <?php $this->load->view($content); ?>
	                </div>
	            </div>
	        </div>
			<footer class="footer">
	            <div class="container-fluid">
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
