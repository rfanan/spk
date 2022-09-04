<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <!--main body-->
        <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h2>Kriteria</h2>
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('accept'); ?>
                        <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href=" <?= base_url('admin/add_kriteria'); ?>" class="btn btn-primary btn">Add kriteria</a>
                        </div>
                        <hr class="divider">
                        <div class="table-responsive">
                            <table id="order-listing" class="table table-hover dataTable">
                                <thead>
                                    <tr role="row">
                                        <th> ID</th>
                                        <th> Kriteria</th>
                                        <th> Bobot </th>
                                        <th> Tipe Kriteria</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kriteria as $k) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $k['nama_kriteria']; ?></td>
                                            <td><?= $k['bobot']; ?></td>
                                            <td><?= $k['tipe_kriteria']; ?></td>
                                            <td>
                                                <div class="badge" type="badge">
                                                    <a href="<?= base_url() ?>admin/update_kriteria/<?= $k['id_kriteria']; ?>" class="badge badge-outline-primary badge">edit</a>
                                                    <a href="<?= base_url('admin/sub_kriteria/') . $k['id_kriteria'] ?>" class="badge badge-outline-primary badge">sub kriteria</a>
                                                    <a href="<?= base_url() ?>admin/delete_kriteria/<?= $k['id_kriteria']; ?>" onclick="return confirm('delete data?');" class="badge badge-outline-danger">delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>