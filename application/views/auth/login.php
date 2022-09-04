<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <h4>PT. Frahan Abadi</h4>
                            <h6 class="font-weight-light">selamat datang silahkan login terlebih dahulu.</h6>
                            <?= $this->session->flashdata('message');  ?>
                            <form class="pt-3" method="POST" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="name" placeholder="name" name="name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" value="<?= set_value('password'); ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="<?= base_url('auth/registration') ?>" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>