
<div class="content">
    <a class="btn btn-primary btn-simple btn-xs" href="<?= site_url('download') ?>">
        &nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">file_download</i> download list beasiswa
    </a>            
                <div class="container-fluid">
                        <div class="col-md-10">
                             <?php echo $this->session->flashdata('message'); ?>

                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Daftar Penyedia Beasiswa</h4>
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
                                                        <strong>Terverifikasi</strong>
                                                    </div>
                                                    <?php
                                                }elseif ($misal->status=="no") {
                                                    ?>
                                                    <div class="label label-danger">
                                                        <strong>Belum diverifikasi</strong>
                                                    </div>
                                                    <?php
                                                } ?>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a href="<?= site_url('provider/detail/'.$misal->id_provider) ?>" type="button" rel="tooltip" title="Detail" class="btn btn-primary btn-simple btn-xs">
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
