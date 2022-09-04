<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <!--main body-->
        <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Alternatif</h2>
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('accept'); ?>
                        <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href=" <?= base_url('admin/add_alternatif'); ?>" class="btn btn-primary btn">Add alternatif</a>
                        </div>
                        <hr class="divider">
                        <div class="table-responsive">
                            <table id="order-listing" class="table table-hover dataTable">
                                <thead>
                                    <tr role="row">
                                        <th> Id</th>
                                        <th> Alternatif</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($alternatif as $r) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $r['name_alternatif']; ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>admin/update_alternatif/<?= $r['id_alternatif']; ?>" class="badge badge-sm badge-outline-primary">edit</a>
                                                <a href="<?= base_url() ?>admin/delete_alternatif/<?= $r['id_alternatif']; ?>" onclick="return confirm('delete data?');" class="badge badge-outline-danger">delete</a>
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