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
                            <th>Katagori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Katagori</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <td><?= $value['katagori']; ?></td>
                            <td><a href="" id='btn-edit' class="btn btn-outline btn-circle btn-sm purple"
                                    data-id="<?= $value['id_katagori']; ?>"><i class="fa fa-edit"></i>Edit</a>
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

<div class="modal fade in" id="modal">
    <div class="modal-dialog moda-md">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h5>Edit Katagori</h5>
                </div>
            </div>
            <div class="modal-body">
                <form id='mb'>
                    <input type="hidden" name="id" value="">

                    <div class="form-group">
                        <label>Nama Katagori</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group clearfix">
                        <button type="button" id="btn" class="btn btn-success pull-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>

</div>
<!-- End of Main Content -->