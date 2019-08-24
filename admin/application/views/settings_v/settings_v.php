<?php $this->load->view("$this->view/header") ?>
<form action="<?= base_url("Settings") ?>" method="post">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ayarlar</h1>
                </div>
                <div class="col-sm-6">
                    <button type="submit" name="submit" value="1" class="btn btn-outline-success float-right"><i
                                class="fa fa-save mr-1"></i>Kaydet
                    </button>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <?php if (validation_errors()): ?>
                <div class="alert alert-danger"><?= validation_errors() ?></div>
            <?php endif; ?>
            <!-- SEO -->
            <div class="card card-default ">
                <div class="card-header">
                    <h3 class="card-title">SEO</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <div class="form-group">
                        <label>Şirket Adı</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                            </div>
                            <input type="text"
                                   class="form-control <?= form_error("companyName") ? "is-invalid" : null ?>"
                                   value="<?= isset($settings->companyName) ? $settings->companyName : set_value("companyName") ?>"
                                   name="companyName">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Author</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                            </div>
                            <input type="text" class="form-control"
                                   value="<?= isset($settings->author) ? $settings->author : set_value("author") ?>"
                                   name="author">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Copyright</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-copyright"></i></span>
                            </div>
                            <input type="text" class="form-control <?= form_error("copyright") ? "is-invalid" : null ?>"
                                   value="<?= isset($settings->copyright) ? $settings->copyright : set_value("copyright") ?>"
                                   name="copyright">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Keywords</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <textarea type="text"
                                      class="form-control <?= form_error("keywords") ? "is-invalid" : null ?>" rows="3"
                                      name="keywords"><?= isset($settings->keywords) ? $settings->keywords : set_value("keywords") ?></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Description</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-audio-description"></i></span>
                            </div>
                            <textarea type="text"
                                   class="form-control <?= form_error("description") ? "is-invalid" : null ?>" rows="3"
                                      name="description"><?= isset($settings->description) ? $settings->description : set_value("description") ?></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Hakkımızda -->
            <div class="card card-default collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Hakkımızda</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>Telefon Numarası</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control <?= form_error("phone") ? "is-invalid" : null ?>"
                                   data-inputmask='"mask": "(999) 999-9999"' data-mask
                                   value="<?= isset($settings->phone) ? $settings->phone : set_value("phone") ?>"
                                   name="phone">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <!-- phone mask -->
                    <div class="form-group">
                        <label>Adres</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                            </div>
                            <textarea type="text" class="form-control <?= form_error("adress") ? "is-invalid" : null ?>"
                                      rows="3"
                                      name="adress"><?= isset($settings->adress) ? $settings->adress : set_value("adress") ?></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <!-- phone mask -->
                    <div class="form-group">
                        <label>Hakkımızda</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                            </div>
                            <textarea type="text" class="form-control <?= form_error("about") ? "is-invalid" : null ?>"
                                      rows="3"
                                      name="about"><?= isset($settings->about) ? $settings->about : set_value("about") ?></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <!-- phone mask -->
                    <div class="form-group">
                        <label>E-mail</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control <?= form_error("email") ? "is-invalid" : null ?>"
                                   value="<?= isset($settings->email) ? $settings->email : set_value("email") ?>"
                                   name="email">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- İletişim -->
            <div class="card card-default collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Sosyal Medya</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <div class="form-group">
                        <label>Facebook</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-facebook-f"></i></span>
                            </div>
                            <input type="text" class="form-control"
                                   value="<?= isset($settings->facebook) ? $settings->facebook : set_value("facebook") ?>"
                                   name="facebook">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Twitter</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                            </div>
                            <input type="text" class="form-control"
                                   value="<?= isset($settings->twitter) ? $settings->twitter : set_value("twitter") ?>"
                                   name="twitter">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                            </div>
                            <input type="text" class="form-control"
                                   value="<?= isset($settings->youtube) ? $settings->youtube : set_value("youtube") ?>"
                                   name="youtube">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Whatsapp</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                            </div>
                            <input type="text" class="form-control <?= form_error("whatsapp") ? "is-invalid" : null ?>"
                                   value="<?= isset($settings->whatsapp) ? $settings->whatsapp : set_value("whatsapp") ?>"
                                   data-inputmask='"mask": "(999) 999-9999"'
                                   data-mask
                                   name="whatsapp">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Instagram</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                            </div>
                            <input type="text" class="form-control" name="instagram"
                                   value="<?= isset($settings->instagram) ? $settings->instagram : set_value("instagram") ?>">
                        </div>
                        <!-- /.input group -->
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</form>
<?php $this->load->view("$this->view/footer") ?>

