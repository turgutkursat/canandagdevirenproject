<?php $this->load->view("$this->view/header") ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mesajlar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Mesajlar</li>
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
                            <h3>Tüm Mesajlar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if (!empty($datas)): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px" class="text-center">#</th>
                                    <th class="text-center">Başlık</th>
                                    <th class="text-center">Ad ve Soyad / E-mail</th>
                                    <th class="text-center">Durum</th>
                                    <th style="width: 200px;" class="text-center">İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($datas as $data): ?>
                                    <tr>
                                        <td><?= $data->id ?></td>
                                        <td class="text-center"><?= $data->title ?></td>
                                        <td class="text-center"><?= $data->fullName . " / " . "<a href='mailto:$data->email'>$data->email</a>" ?></td>
                                        <td class="text-center"><?= $data->isRead == "0" ? "<i class='fa fa-eye-slash mr-lg-2'>Okunmadı</i>" : "<i class='fa fa-eye mr-lg-2'>Okundu</i>" ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url("$this->url/delete/$data->id") ?>"
                                               class="btn btn-outline-danger"><i
                                                        class="fa fa-trash-alt mr-2"></i>Sil
                                            </a>
                                            <a href="<?= base_url("$this->url/read/$data->id") ?>"
                                               class="btn btn-outline-primary"><i class="fa fa-eye mr-2"></i>Oku
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