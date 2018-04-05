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
            <form method="post" action="">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input class="form-control" name="etEmail" type="email" value="<?php echo $prof->email; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Alamat</label>
                                <input class="form-control" name="etAddress" type="text" value="<?php echo $prof->address; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">No HP</label>
                                <input class="form-control" name="etPhone" type="number" value="<?php echo $prof->phone; ?>" disabled>
                            </div>
                        </div>
                    </div>
                   
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header" data-background-color="red">
            <h4 class="title">Penting</h4>
        </div>
        <div class="card-content">
            <h4>Jika anda ingin mengubah data profil, silahkan hubungi admin</h4>
        </div>
    </div>
</div>
<?php } ?>
