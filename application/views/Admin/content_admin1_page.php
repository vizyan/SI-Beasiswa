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

    <!-- Custom CSS - Pramudya Erviansyah   -->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Tambah Admin</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <div class="card-content">
                        <form method="post" action="<?= site_url('kelola/tambah') ?>">
                             <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input name="etName" type="text" class="form-control" Required>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Username</label>
                                        <input name="etUsername" type="username" class="form-control" Required>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input name="etEmail" type="email" class="form-control" Required>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input name="etPassword" type="password" class="form-control" Required>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-left:20px;padding-right:20px">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Retype Password</label>
                                        <input name="etRetypePassword" type="password" class="form-control" Required>
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
	    <div class="sidebar" data-color="purple">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					PBD
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="<?= site_url('dashboard/admin/') ?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Daftar Beasiswa</p>
	                    </a>
	                </li>
                    <li class="active">
	                    <a href="<?= site_url('dashboard/admin/kelola') ?>">
	                        <i class="material-icons">person</i>
	                        <p>Manage</p>
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
										<i class="material-icons">notifications</i>
										<span class="notification">5</span>
										<p class="hidden-lg hidden-md">Notifications</p>
								  </a>
								  <ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
								  </ul>
							</li>
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

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>
            </div>

	        <div class="content">
                <div class="container-fluid">
                        <div class="col-md-10">
                             <?php echo $this->session->flashdata('message'); ?>

                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Table Beasiswa</h4>
                                    <p class="category">New employees on 15th September, 2016</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>No Telepon</th>
                                            <th>User Status</th>
                                            <th>Detail</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $n=1;
                                            foreach ($admin->result() as $misal ) {
                                                ?>

                                            <tr>
                                                <td><?php echo $n ?></td>
                                                <td><?php echo $misal->username ?></td>
                                                <td><?php echo $misal->name ?></td>
                                                <td><?php echo $misal->email ?></td>
                                                <td><?php echo $misal->address ?></td>
                                                <td><?php echo $misal->phone ?></td>
                                                <td><?php   if($misal->status=="yes")
                                                {
                                                    ?>
                                                    <div class="label label-success">
                                                        <strong>Active</strong>
                                                    </div>
                                                    <?php
                                                }elseif ($misal->status=="no") {
                                                    ?>
                                                    <div class="label label-danger">
                                                        <strong>Inactive</strong>
                                                    </div>
                                                    <?php
                                                } ?>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a type="button" rel="tooltip" title="launch" class="btn btn-primary btn-simple btn-xs ">
                                                        <i data-toggle="modal" data-target="#modalForm" class="material-icons" >launch</i>
                                                    </a>

                                                    <a href="<?= site_url('dashboard/admin/kelola') ?>" type="button" rel="tooltip" title="launch" class="btn btn-primary btn-simple btn-xs">
                                                        <i class="material-icons">launch</i>
                                                    </a>

                                                </td>
                                            </tr>

                                            <?php $n++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

	<!-- fungsi delete -->
	<script type="text/javascript">
    function deletedd(param)
    {
      var proc = window.confirm('Are you sure delete this data?');
      if(proc){
        document.location='<?php echo base_url(); ?>admin/delete/'+param;
   		}
  	}
  	</script>
</html>
