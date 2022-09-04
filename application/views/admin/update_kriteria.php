<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update kriteria</h4>
                        <p class="card-description">
                            please input data here !!
                        </p>
                        <form class="forms-sample" method="POST" action="">
                            <div class=" form-group row">
                                <input type="hidden" id="id_kriteria" name="id_kriteria" value="<?= $kriteria['id_kriteria']; ?>">
                                <label for="name" name="name" class="col-sm-3 col-form-label">Name Kriteria</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?= $kriteria['nama_kriteria']; ?>" class="form-control" id="nama_kriteria" name="nama_kriteria">
                                </div>
                                <label for="tipeKriteria" name="tipeKriteria" class="col-sm-3 col-form-label">Tipe Kriteria</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="tipe_kriteria" name="tipe_kriteria">
                                        <?php foreach ($tipeKriteria as $tk) : ?>
                                            <?php if ($tk == $kriteria['tipe_kriteria']) : ?>
                                                <option value="<?= $tk; ?>" selected> <?= $tk; ?> </option>
                                            <?php else : ?>
                                                <option value="<?= $tk; ?>"> <?= $tk; ?> </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <label for="bobot" name="bobot" class="col-sm-3 col-form-label">Bobot</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?= $kriteria['bobot']; ?>" class="form-control" id="bobot" name="bobot">
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