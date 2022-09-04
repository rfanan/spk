  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="row">
              <div class="col-md-12 grid-margin">
                  <div class="row">
                      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                          <h3 class="font-weight-bold">Welcome <?= $user['name']; ?></h3>
                          <h6 class="font-weight-normal mb-0">All systems are running smoothly! </h6>
                      </div>
                      <div class="col-12 col-xl-4">
                          <div class="justify-content-end d-flex">
                              <div class="flex-md-grow-1 flex-xl-grow-0">
                                  <button class="btn btn-sm btn-light bg-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                      <?= date('l, d-m-Y');
                                        date_default_timezone_set('Asia/Jakarta'); ?>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--main body-->
          <div class="row">
              <div class="col-md grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="d-flex flex-lg-row flex-md-row flex-column">
                              <img src="<?= base_url('assets/'); ?>images/logo-mini.svg" alt="logo">
                              <div class="mt-2 col-xl">
                                  <h5 class="card-title">Rekomendasi Pantai</h5>
                                  <p class="mb-2 mb-xl">
                                      Daftar Rekomendasi Pantai berdasarkan kriteria
                                      yang telah diseleksi dengan menggunakan metode Simple
                                      Additive Weighting Method (SAW)
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--spasi-->

          <div class="grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Top Pantai </h4>
                      <div class="table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Nama Pantai</th>
                                      <th>Skor</th>
                                      <th>Ranking</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>

                                      <td>A</td>
                                      <td class="text-success"> 100 <i class="ti-arrow-down"></i></td>
                                      <td>1</td>
                                  </tr>
                                  <tr>

                                      <td>B</td>
                                      <td class="text-danger"> 90 <i class="ti-arrow-down"></i></td>
                                      <td>2</td>
                                  </tr>
                                  <tr>

                                      <td>C</td>
                                      <td class="text-danger"> 80<i class="ti-arrow-down"></i></td>
                                      <td>3</td>
                                  </tr>
                                  <tr>

                                      <td>D</td>
                                      <td class="text-success"> 70 <i class="ti-arrow-up"></i></td>
                                      <td>4</td>
                                  </tr>
                                  <tr>

                                      <td>E</td>
                                      <td class="text-success"> 60<i class="ti-arrow-up"></i></td>
                                      <td>5</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>