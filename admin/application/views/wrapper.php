<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= base_url() ?>" class="nav-link">Anasayfa</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!--User dropdown -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="<?= base_url("assets") ?>/dist/img/user2-160x160.jpg"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline"><?= $this->session->user->fullName ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="<?= base_url("assets") ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            <?= $this->session->user->fullName ?>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="<?= base_url("logout") ?>" class="btn btn-default btn-flat float-right">Çıkış</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
                <div class="image">

                    <img src="<?= base_url("assets/") ?>dist/img/code.jpg"
                         class="img-circle elevation-2"
                         alt="EntrBit Software">
                </div>
                <div class="info">
                    <span class="d-block text-white">EntrBit Software Admin</span>
                </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <!--
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    -->
                    <li class="nav-item">
                        <a href="<?= base_url() ?>" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Anasayfa
                            </p>
                        </a
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("Slides") ?>" class="nav-link">
                            <i class="nav-icon fas fa-sliders-h"></i>
                            <p>
                                Sliders
                            </p>
                        </a

                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("Company") ?>" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Kurumsal
                            </p>
                        </a

                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("images") ?>" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Galeri
                            </p>
                        </a

                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("message") ?>" class="nav-link">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Mesajlar
                            </p>
                        </a

                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("sss") ?>" class="nav-link">
                            <i class="nav-icon fas fa-rss"></i>
                            <p>
                                Sık Sorulan Sorular
                            </p>
                        </a

                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("Settings") ?>" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Ayarlar
                            </p>
                        </a

                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->