<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?= $this->session->flashdata('accept') ?>
                    <h4 class="card-title">Edit alternatif</h4>
                    <p class="card-description">
                        please input data here !!
                    </p>
                    <form class="forms-sample" method="POST" action="">
                        <div class=" form-group row">
                            <input type="hidden" value="<?= $alternatif['id_alternatif'] ?>" name="id_alternatif">
                            <label for="name" name="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_alternatif" name=" name_alternatif" value="<?= $alternatif['name_alternatif'] ?>">
                                <small class="form-text-danger"><?= form_error(''); ?> </small>
                            </div>
                        </div>

                        <div class="d-grid d-md-flex justify-content-md-end">
                            <button type="submit" name="update" class=" me-md-2 btn btn-primary mr-2">Update Data</button>
                            <a href=" <?= base_url('admin/alternatif'); ?>" class="btn btn-light">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>