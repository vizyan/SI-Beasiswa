<!--start container-->


<div class="col-sm-12">
    <a data-toggle="modal" data-target="#modalForm" class="btn btn-round btn-success pull-right" style="text-transform:none;min-width:100px">Tambah Beasiswa</a>
    <br />
</div>

<div class="row">
<?php foreach($schoolarship as $sc) {  ?>
<?php $gradient = array("red", "blue", "green", "orange");
                  $random = $gradient[array_rand($gradient)];?>

<div class="col-sm-4">
    <div class="card card-stats gradient-shadow">
        <div class="card-header" data-background-color="<?php echo $random ?>">
            <i class="material-icons">school</i>
        </div>
        <div class="card-content">
            <h4 class="category"><strong><?php echo $sc->schoolarships_name ?></strong></h4>
            <p class="title">Kuota : <?php echo $sc->quota ?> Mahasiswa</p>
        </div>
        <div class="card-footer">
                    <?php $data = $this->session->userdata('data_login') ?>
                    <a href="<?= site_url('take/'.$data['previledge'].'/'.$sc->id_schoolarship) ?>" class="btn btn-round pull-right" style="text-transform:none;min-width:100px" data-background-color="<?php echo $random ?>">Pendaftar</a>
                    <a href="<?= site_url('schoolarship/'.$data['previledge'].'/'.$sc->id_schoolarship) ?>" class="btn btn-round pull-right" style="text-transform:none;min-width:100px" data-background-color="<?php echo $random ?>">Detail</a>
        
        </div>
    </div>
</div>
<?php } ?>
</div>
