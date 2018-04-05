<?php foreach($profile as $prof) { ?>
<div class="col-md-8">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title"><?php echo $prof->name; ?></h4>
        </div>
        <div class="card-content">
            <div class="card-profile">
                <br />
            <div class="card-avatar">
                <img class="img" src="<?php echo base_url().$prof->photo ?>" />
            </div>
                <br />
        </div>
            <form method="post" action="<?= site_url('update/'.$prof->id_user)?>">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input class="form-control" name="etEmail" type="email" value="<?php echo $prof->email; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Alamat</label>
                                <input class="form-control" name="etAddress" type="text" value="<?php echo $prof->address; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Agama</label>
                                <input class="form-control" name="etReligion" type="text" value="<?php echo $prof->religion; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">No HP</label>
                                <input class="form-control" name="etPhone" type="number" value="<?php echo $prof->phone; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Jenis Kelamin</label>
                                <input class="form-control" name="etReligion" type="text" value="<?php echo $prof->gender; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="action" class="btn btn-primary pull-right btn-round" style="text-transform:none;min-width:100px">Simpan perubahan</button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header" data-background-color="red">
            <h4 class="title">Coming Soon - Ubah password</h4>
        </div>
        <div class="card-content">
            <br />
            <br />
            <br />
            <form method="post" action="Coming Soon - Ubah password">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Password lama</label>
                                <input class="form-control" name="" type="password" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Password baru</label>
                                <input class="form-control" name="" type="password" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Ulangi password</label>
                                <input class="form-control" name="" type="password" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="action" class="btn btn-danger pull-right btn-round" style="text-transform:none;min-width:100px" disabled>Ubah password</button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php } ?>
