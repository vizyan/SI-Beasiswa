<div class="content">
    <div class="container-fluid">
        <?php foreach ($detail as $ad ) {?>
        <form method="post" action="<?= site_url('admin/verif/'.$ad->id_provider) ?>">
            <div class="box-body">
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <img class="img" src="<?php echo base_url().$ad->photo ?>">
                        </div>
                        <div class="content">
                            <input class="form-control" id="id_provider" name="id_provider" type="hidden" value="<?php echo $ad->id_provider; ?>">
                            <h5 class="card-title"><?php echo $ad->name; ?></h5>
                            <h5 class="card-title"><?php echo $ad->address; ?></h5>
                            <h5 class="card-title"><?php echo $ad->email; ?></h5>
                            <h5 class="card-title"><?php echo $ad->phone; ?></h5>
                            <h5 class="card-title">
                                <?php if($ad->status=="yes") { ?>
                                <div class="label label-success">
                                    <strong>Terverifikasi</strong>
                                </div>
                                <h6>
                                    <button type="submit" name="action" class="btn btn-success btn-round" rel="tooltip" title="telah diverif" disabled><i class="material-icons" disabled>done</i> verif</button>
                                    <a href="<?= site_url('admin/unverif/'.$ad->id_provider) ?>" class="btn btn-danger btn-round" rel="tooltip" title="Hapus penyedia beasiswa" >Hapus</a>
                                </h6>
                                <?php }elseif ($ad->status=="no") { ?>
                                <div class="label label-danger">
                                    <strong>Belum diverifikasi</strong>
                                </div>
                                <h6>
                                    <button type="submit" name="action" class="btn btn-success btn-round" rel="tooltip" title="Verifikasi penyedia beasiswa">Verifikasi</button>
                                    <a href="<?= site_url('admin/unverif/'.$ad->id_provider) ?>" class="btn btn-danger btn-round" rel="tooltip" title="Tidak diverifikasi" >Hapus</a>
                                </h6>
                                <?php } ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>

