<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">add kriteria</h4>
                    <?= $this->session->flashdata('accept'); ?>
                    <p class="card-description">
                        please input data here !!
                    </p>
                    <form class="forms-sample" method="POST" action="<?= base_url('admin/add_kriteria'); ?>">
                        <div class=" form-group row">
                            <label for="name" name="name" class="col-sm-3 col-form-label">Name Kriteria</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria">
                            </div>
                            <label for="tipeKriteria" name="tipeKriteria" class="col-sm-3 col-form-label">Tipe Kriteria</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control-sm" id="tipe_kriteria" name="tipe_kriteria">
                                    <option>Select</option>
                                    <option>Benefit</option>
                                    <option>Cost</option>
                                </select>
                            </div>
                            <label for="bobot" name="bobot" class="col-sm-3 col-form-label">Bobot</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bobot" name="bobot">
                            </div>
                        </div>

                        <div class="d-grid d-md-flex justify-content-md-end">
                            <button type="submit" class=" me-md-2 btn btn-primary mr-2">Submit</button>
                            <a href=" <?= base_url('admin/kriteria'); ?>" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>