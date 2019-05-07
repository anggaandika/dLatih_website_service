<!-- Begin Page Content -->
<div class="container-fluid">

    <?php $this->load->view('--temp/-prop/-heading')  ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Read Report</h6>
        </div>
        <div class="card-body text-center row">
            <div class="col-md-2"></div>
            <div class="table text-center col-md-8">

                <table width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>
                                <?= $r['username']; ?>
                            </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>
                                <?= $r['name']; ?>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>
                                <?= $r['pesan']; ?>
                            </th>
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