<head>
<!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- library jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<!-- Tombol untuk memicu modal -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
    Buka Contact Form
</button>
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
                <h4 class="modal-title" id="labelModalKu">Contact Form</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="masukkanNama">Nama</label>
                        <input type="text" class="form-control" id="masukkanNama" placeholder="Masukkan nama Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="masukkanEmail">Email</label>
                        <input type="email" class="form-control" id="masukkanEmail" placeholder="Masukkan email Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="masukkanPesan">Pesan</label>
                        <textarea class="form-control" id="masukkanPesan" placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimContactForm()">KIRIM</button>
            </div>
        </div>
    </div>
</div>
