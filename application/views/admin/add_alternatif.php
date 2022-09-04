<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">add alternatif</h4>
                    <p class="card-description">
                        please input data here !!
                    </p>
                    <form class="forms-sample" method="POST" action="<?= base_url('admin/add_alternatif'); ?>">
                        <div class=" form-group row">
                            <label for="name" name="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_alternatif" name="name_alternatif" placeholder="name">
                            </div>
                        </div>

                        <div class="d-grid d-md-flex justify-content-md-end">
                            <button type="submit" class=" me-md-2 btn btn-primary mr-2">Submit</button>
                            <a href=" <?= base_url('admin/alternatif'); ?>" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>