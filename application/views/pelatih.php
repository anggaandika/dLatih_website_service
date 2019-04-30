<!-- Begin Page Content -->
        <div class="container-fluid">

       <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pelatih</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Detail</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Joko</td>
                      <td>Jokoman</td>
                      <td>jokoman@gmail.com</td>
                      <td width="100">
                          <a href="<?= base_url('pelatih/detail')?>" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-1"><i class="fas fa-info-circle"></i></span>
                            <span class="text">Detail</span>
                          </a>
                      </td>
                      
                    </tr>
                    <tr>
                      <td>Jack</td>
                      <td>Jackkrouser</td>
                      <td>jackkrouser@gmail.com</td>
                      <td width="100">
                          <a href="#" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-1"><i class="fas fa-info-circle"></i></span>
                            <span class="text">Detail</span>
                          </a>
                      </td>
                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->