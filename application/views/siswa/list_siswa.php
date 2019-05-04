<!-- Begin Page Content -->
<div class="container-fluid">

    <?php $this->load->view('--temp/-prop/-heading')  ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            <th>Detail</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <td><?= $value['username']; ?></td>
                            <td><?= $value['email']; ?></td>
                            <td>
                                <?php
                                    if ($value['jenis_kelamin'] == "L") {
                                        echo "LAKI-LAKI";
                                    } elseif ($value['jenis_kelamin'] == "P") {
                                        echo "PEREMPUAN";
                                    } ?>
                            </td>
                            <th><?php
                                    if ($value['activated'] == "0") {
                                        echo "Belum Active";
                                    } elseif ($value['activated'] == "1") {
                                        echo "Active";
                                    } elseif ($value['activated'] == "2") {
                                        echo "Banned";
                                    } ?></th>
                            <td width="100">
                                <a href="<?= base_url('pelatih/detail/' . $value['id']) ?>"
                                    class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-1"><i class="fas fa-info-circle"></i></span>
                                    <span class="text">Detail</span>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->