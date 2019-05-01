<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelatih</h6>
        </div>
        <div class="card-body text-center row">
            <div class="col-md-2"></div>
            <div class="table text-center col-md-8">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/img/undraw_posting_photo.svg') ?>" alt="">
                </div>
                <table class="table table-bordered centered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th colspan="2">Data Pelatih</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th colspan="2">

                                <a href="<?= base_url('pelatih/banned/' . $pel['id']) ?>" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-1"><i class="fas fa-trash"></i></span>
                                    <span class="text">Banned</span>
                                </a>
                                <a href="#" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>


                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Nama:</td>
                            <td><?= $pel['username']; ?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?= $pel['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $pel['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <?php if ($pel['jenis_kelamin'] == "L") {
                                    echo "LAKI-LAKI";
                                } elseif ($pel['jenis_kelamin'] == "P") {
                                    echo "PEREMPUAN";
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Contact Person</td>
                            <td><?= $pel['no_tlp']; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->