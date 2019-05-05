<!-- Begin Page Content -->
<div class="container-fluid">

    <?php $this->load->view('--temp/-prop/-heading')  ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelatih</h6>
        </div>
        <div class="card-body text-center row">
            <div class="col-md-4">
                <img class="img-profile rounded-circle" width="180px" src="<?= base_url('upload/profil/' . $user['photo']); ?>">

                <table class="table text-center mt-3">
                    <tr>
                        <td>
                            <b><?= $user['username']; ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $user['name']; ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="table text-center col-md-8">
                <table class="table table-bordered centered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th colspan="2">Data Pelatih</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <a href="<?= base_url('pelatih/banned/' . $pel['id']) ?>"
                                    class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-1"><i class="fas fa-trash"></i></span>
                                    <span class="text">Simpan</span>
                                </a>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Nama:</td>
                            <td ><input type="text" style="border: 0" class="text-center" name="" value="<?= $user['username']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?= $user['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $user['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <?php if ($user['jenis_kelamin'] == "L") {
                                    echo "LAKI-LAKI";
                                } elseif ($user['jenis_kelamin'] == "P") {
                                    echo "PEREMPUAN";
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Contact Person</td>
                            <td><input type="text" style="border: 0" class="text-center" name="" value="<?= $user['no_tlp']; ?>"></td>
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