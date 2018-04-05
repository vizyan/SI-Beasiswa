<!--start container-->
<?php $data = $this->session->userdata('data_login') ?>
<div class="row">
<?php foreach($detail as $sc) {  ?>
<?php $gradient = array("red", "blue", "green", "orange");
                  $random = $gradient[array_rand($gradient)];?>

    <div class="col-lg-10 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="orange">
                <h4 class="title"><strong><?php echo $sc->schoolarships_name ?></strong></h4>
                <p class="category"><strong><?php echo $sc->provider_name ?></strong></p>
            </div>
            <div class="card-content">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div style="padding-top:5px">
            <div class="card card-stats gradient-shadow" >
            <div  style="padding-right:10px">
                <button class="btn btn-success pull-right">Tanggal penting</button>
            </div>
            <div class="card-header pull-left" data-background-color="green">
                <i class="material-icons">date_range</i>
            </div>
            <div class="card-content pull-right">
                <p class="category"><strong>Dibuka dari : <?php echo $sc->open_date ?></strong></p><a></a>
                <p class="category"><strong>Hingga : <?php echo $sc->close_date ?></strong></p><a></a>
            </div>
        </div>
        </div>
        <div class="card card-stats gradient-shadow" >
            <div  style="padding-left:10px">
                <button class="btn btn-danger pull-left">Kontak</button>
            </div>
            <div class="card-header pull-right" data-background-color="red">
                <i class="material-icons">contacts</i>
            </div>
            <div class="card-content pull-left" style="text-align:left;">
                <p></p>
                <p class="category"><strong>Email&emsp;&emsp; : <?php echo $sc->provider_email ?></strong></p>
                <p class="category"><strong>Alamat&emsp;&ensp;: <?php echo $sc->provider_address ?></strong></p>
                <p class="category"><strong>No. Telp&emsp;: <?php echo $sc->phone_provider ?></strong></p>
            </div>
            <div class="col-md-12">
                <center>
                    <a href="<?= site_url($sc->file); ?>" class="btn btn-primary btn-round" style="text-transform:none;min-width:100px">Download Persyaratan</a>
                    <p></p>
                </center>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-profile">
            <br />
            <div class="card-avatar" style="width:100px">
                <img class="img" src="<?php echo base_url() ?>assets/img/school.jpg" />
            </div>
            <div class="content">
                <h4 class="card-title" style="padding-left:20px;padding-right:20px;text-align:justify">&emsp;<?php echo $sc->description ?></h4>
                <?php 
                      if($data['previledge']=='user') { ?>
                        <a data-toggle="modal" data-target="#modalForm" class="btn btn-round btn-primary" style="text-transform:none;min-width:100px">Daftar</a>
                <?php } else {} ?>
                <p></p>
            </div>
        </div>
    </div>
<?php } ?>
</div>


