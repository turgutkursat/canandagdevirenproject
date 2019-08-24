<?php $this->load->view("$this->view/header") ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Sliders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url("slides/add") ?>" class="btn btn-outline-success float-right"><i
                                        class="fa fa-plus mr-2"></i>Yeni
                                Ekle</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if (!empty($slides)): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px" class="text-center">#</th>
                                    <th style="width: 10px">Durum</th>
                                    <th class="text-center">Başlık</th>
                                    <th class="text-center">Resim</th>
                                    <th style="width: 200px;" class="text-center">İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($slides as $slide): ?>
                                    <tr>
                                        <td><?= $slide->id ?></td>
                                        <td>
                                            <?= $slide->isActive == "true" ? "Aktif" : "Pasif" ?>
                                        </td>
                                        <td class="text-center"><?= $slide->title ?></td>
                                        <td class="text-center">
                                            <img width="200" height="100"
                                                 src="http://awsassets.wwftr.panda.org/img/tehdit_doga_ankara_1914.jpg"
                                                 alt="Resim">
                                        </td>
                                        <td class="text-center">
                                            <a href="<?= base_url("slides/delete/$slide->id") ?>"
                                               class="btn btn-outline-danger"><i
                                                        class="fa fa-trash-alt mr-2"></i>Sil
                                            </a>
                                            <a href="<?= base_url("slides/update/$slide->id") ?>"
                                               class="btn btn-outline-primary"><i class="fa fa-edit mr-2"></i>Düzenle
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="alert alert-danger text-center"><strong>Kayıt Bulunamadı!</strong></div>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php $this->load->view("$this->view/footer") ?>