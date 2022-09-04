<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href=""> <img src="<?= base_url('assets/'); ?>images/favicon.png" class="mr-2" alt="logo" />
                    <h6>

                    </h6>
                </a>
                <a class="navbar-brand brand-logo-mini" href=""> <img src="<?= base_url('assets/'); ?>images/favicon.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <h5 width="300" height="300"><?= $user['name'] ?> <i class="ti-face-smile  text-primary"></i>
                            </h5>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-face-smile  text-primary"></i>
                                    Name : <?= $user['name'] ?>
                                </a>
                                <a class="dropdown-item">
                                    <i class="ti-marker-alt text-primary"></i>
                                    Email : <?= $user['email'] ?>
                                </a>
                                <a class="dropdown-item">
                                    <i class=" ti-timer  text-primary"></i>
                                    Member since : <?= date('d F Y', $user['date_created']); ?>
                                </a>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class=" ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>