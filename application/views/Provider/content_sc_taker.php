            <div class="content">
                <div class="container-fluid">
                        <div class="col-md-10">
                             <?php echo $this->session->flashdata('message'); ?>

                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Daftar Pendaftar Beasiswa</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>IPK</th>
                                            <th>Berkas</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $n=1;
                                            foreach ($taker as $misal ) {
                                                ?>

                                            <tr>
                                                <td><?php echo $n ?></td>
                                                <td><?php echo $misal->id_user ?></td>
                                                <td><?php echo $misal->user_name ?></td>
                                                <td><?php echo $misal->email ?></td>
                                                <td><?php echo $misal->address ?></td>
                                                <td><?php echo $misal->phone ?></td>
                                                <td><?php echo $misal->gpa ?></td>
                                                <td class="td-actions text-right">
                                                    <a href="<?= site_url($misal->file) ?>" type="btn btn-primary" rel="tooltip" title="Download" class="btn btn-primary btn-simple btn-xs">
                                                        <i class="material-icons">file_download</i>
                                                    </a>

<!--
                                                    <a href="<?= site_url('dashboard/admin/kelola') ?>" type="button" rel="tooltip" title="launch" class="btn btn-primary btn-simple btn-xs">
                                                        <i class="material-icons">launch</i>
                                                    </a>
-->

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
