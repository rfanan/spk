<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Proses SAW </h4>
                    <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" data-toggle="modal" data-target="#newModal" class="btn btn-primary ">
                            data selection
                        </button>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="mytable">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Alternatif</th>
                                    <?php foreach ($kriteria as $k) : ?>
                                        <th><?= $k['nama_kriteria'] ?></th>
                                    <?php endforeach; ?>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($rel_alternatif as $s) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $s['name_alternatif']; ?></td>
                                        <?php foreach ($rel_alternatif as $sk) : ?>
                                            <td><?= $sk['id_sub_kriteria']; ?></td>
                                        <?php endforeach; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newMenuModalLabel">Add New Data Selection</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/add_selection') ?>" method="post">
                        <input type="hidden" id="id" name="name">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label">Alternatif</label>
                                <select name="alternatif" id="alternatif" class="form-control" required>
                                    <option>Pilih alternatif</option>
                                    <?php foreach ($alternatif as $a) : ?>
                                        <option value="<?= $a['name_alternatif']; ?>"><?= $a['name_alternatif']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kriteria</label>

                                <select name="kriteria" id="kriteria" class="form-control" required>
                                    <option>Pilih Kriteria</option>
                                    <?php foreach ($kriteria as $k) : ?>
                                        <option value="<?= $k['id_kriteria']; ?>"><?= $k['nama_kriteria']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Sub</label>
                                <select name="sub_kriteria" id="sub_kriteria" class="form-control" required>
                                    <option value="">pilih sub kriteria</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
        <script>
            $(document).ready(function() {
                $('#kriteria').change(function() {
                    var id_kriteria = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('admin/getDataSubKriteria') ?>",
                        data: {
                            id_kriteria: id_kriteria
                        },
                        dataType: "JSON",
                        success: function(data) {
                            var html = '';
                            var i;
                            for (i = 0; i < data.length; i++) {
                                html += '<option value=' + data[i].nilai + '>' + data[i].variable + '</option>';
                            }
                            $('#sub_kriteria').html(html);
                        }
                    });
                });
            });
        </script>