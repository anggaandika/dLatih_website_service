<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
        </div>
        <div class="card-body text-center row">
            <div class="col-md-2"></div>
            <div class="table text-center col-md-8">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="<?= base_url('assets/img/undraw_posting_photo.svg') ?>" alt="">
                </div>
                <table class="table table-bordered centered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th colspan="2">Data Admin</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th colspan="2">
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Done</span>
                                </a>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Username:</td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="1"
                                        placeholder="Username Anda" value="<?= $pel['username']; ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="2"
                                        placeholder="Email Anda" value="<?= $pel['email']; ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="3"
                                        placeholder="Alamat Anda" value="<?= $pel['alamat']; ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <div class="radio">
                                    <label><input type="radio" value="L" name="optradio">Laki-Laki</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" value="P" name="optradio">Perempuan</label>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>Contact Person</td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="4"
                                        placeholder="Nomor Anda" value="<?= $pel['no_tlp']; ?>">
                                </div>
                            </td>
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