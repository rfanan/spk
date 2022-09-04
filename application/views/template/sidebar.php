<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item
                <?php if ($menuActive == 'Dashboard') { ?>
                    <?= 'active' ?>
                <?php } ?>
            ">
                <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                    <i class="icon-grid menu-icon"></i></i>
                    <span class="menu-title">Dashboard</span></a>
            </li>
            <li class="nav-item 
                <?php if ($menuActive == 'Alternatif') { ?>
                    <?= 'active' ?>
                <?php } ?>
            ">
                <a class="nav-link active" href="<?= base_url('admin/alternatif'); ?>">
                    <i class="icon-layout menu-icon ti-user"></i>
                    <span class="menu-title">Alternatif</span>
                </a>
            </li>
            <li class="nav-item
                <?php if ($menuActive == 'Kriteria') { ?>
                    <?= 'active' ?>
                <?php } ?>
            ">
                <a class="nav-link" href="<?= base_url('admin/kriteria') ?>">
                    <i class="ti-layout menu-icon menu-icon"></i>
                    <span class="menu-title">Kriteria</span>
                </a>
            </li>
            <li class="nav-item
                <?php if ($menuActive == 'penilaian') { ?>
                    <?= 'active' ?>
                <?php } ?>
            ">
                <a class="nav-link" href="<?= base_url('admin/penilaian'); ?>">
                    <i class="menu-icon ti-layout-accordion-merged "></i>
                    <span class="menu-title">Penilaian</span>
                </a>
            </li>
            <li class="nav-item
                <?php if ($menuActive == '') { ?>
                    <?= 'active' ?>
                <?php } ?>
            ">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Hasil</span>
                </a>
            </li>
        </ul>
    </nav>