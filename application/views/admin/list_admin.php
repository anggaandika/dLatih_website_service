<!-- Begin Page Content -->
<div class="container-fluid">

    <?php $this->load->view('--temp/-prop/-heading')  ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Contact Person</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Contact Person</th>
                            <th>Action</th>

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
                            <td><?= $value['alamat']; ?></td>
                            <td><?= $value['no_tlp']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit/') . $value['id'] ?>"
                                    class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                                <!-- <a href="#" class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                            <span class="text">Delete</span>
                                                        </a> -->
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