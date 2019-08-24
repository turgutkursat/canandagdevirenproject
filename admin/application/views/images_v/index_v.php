<?php $this->load->view("$this->view/header") ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Galeri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Resimler</li>
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
                            <a href="<?= base_url("$this->url/add") ?>" class="btn btn-outline-success float-right"><i
                                        class="fa fa-plus mr-2"></i>Yeni
                                Ekle</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if (!empty($datas)): ?>

                                <div class="card-group row">
                                    <?php foreach ($datas as $data): ?>
                                        <div class="col-md-2">

                                            <div class="card mr-2">
                                                <img src="<?=base_url("$data->image")?>"
                                                     style="max-width: 300px !important;" class="card-img-top"
                                                     alt="<?= $data->title ?>">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center mb-2"><?= $data->title ?></h5>
                                                    <a href="<?= base_url("$this->url/delete/$data->id") ?>"
                                                       class="btn btn-outline-danger btn-block"><i
                                                                class="fa fa-trash-alt mr-2"></i>Sil
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-danger text-center"><strong>Kayıt Bulunamadı!</strong></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card -->

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php $this->load->view("$this->view/footer") ?>