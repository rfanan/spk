<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">sub kriteria -><?= $kriteria['nama_kriteria']; ?></h4>
                        <p class="card-description">
                            <?= $this->session->flashdata('accept'); ?>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr role="row">
                                        <th> Keterangan</th>
                                        <th> Nilai</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subkriteria as $sk) : ?>
                                        <tr>
                                            <td><?= $sk['variable']; ?></td>
                                            <td><?= $sk['nilai']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-outline-primary">Edit</a>
                                                <a href="<?= base_url('admin/delete_Sub_Kriteria/') . $sk['id']; ?>" onclick="return confirm('delete data?');" class="btn btn-sm btn-outline-danger">delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <hr class="divider">
                        <div class="d-grid gap-2 mx-auto ">
                            <button type="submit" data-toggle="modal" data-target="#newMenuModal" class="btn btn-sm btn-block btn-icon-text btn-primary mr-2"><i class="ti-file btn-icon-prepend"></i>
                                add sub kriteria</button>
                            <a href=" <?= base_url('admin/kriteria'); ?>" class="btn btn-sm btn-icon-text btn-block btn-light">
                                <i class="ti-alert btn-icon-prepend"></i>
                                cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newMenuModalLabel">Add New Sub Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="<?= base_url('admin/add_subkriteria');  ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <select name="id_sub_kriteria" id="id_sub_kriteria" class="form-control">
                                        <option value="<?= $kriteria['id_kriteria']; ?>"><?= $kriteria['nama_kriteria']; ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="variable" name="variable" placeholder="Keterangan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nilai" name="nilai" placeholder="nilai">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="btn_simpan" type="submit" class="btn btn-primary"> Add </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>