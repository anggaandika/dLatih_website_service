<!-- Begin Page Content -->
<div class="container-fluid">

    <?php $this->load->view('--temp/-prop/-heading')  ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data <?= $this->uri->segment(1); ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-2 mb-4" data-toggle="modal"
                    data-target="#katagoriModal">
                    Tambah Katagori
                </button>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Katagori</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Katagori</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $n = '1'; ?>
                        <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <td><?= $n; ?></td>
                            <td><?= $value['katagori']; ?></td>
                        </tr>
                        <?php $n++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="katagoriModal" tabindex="-1" role="dialog" aria-labelledby="katagoriModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Katagori</h5>
            </div>
            <form action="<?= base_url('katagori/input'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="katagori">Katagori</label>
                        <input type="text" class="form-control" id="katagori" name="katagori"
                            placeholder="Tulis Nama Katagori">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->