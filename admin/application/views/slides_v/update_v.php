<?php $this->load->view("$this->view/header") ?>
<?= form_open_multipart('Slides/update/'.$data->id); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Slider Düzenle</h1>
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
                <h3 class="card-title">Slider Ekle</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-group">
                    <label>Title</label>

                    <div class="input-group">

                        <input type="text" required
                               class="form-control <?= form_error("title") ? "is-invalid" : null ?>"
                               value="<?= isset($data->title) ? $data->title : set_value("title") ?>"
                               name="title">
                    </div>
                    <!-- /.input group -->
                </div>


                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="" name="image">
                    </div>
                </div>

                <div class="form-group">
                    <label>Önizleme</label>

                    <div class="input-group gallery">

                        <img src="<?= base_url("$data->image") ?>" alt="<?= $data->title ?>"
                             style="max-width: 300px !important;"
                             class="img-thumbnail">

                    </div>
                    <!-- /.input group -->
                </div>

                <div class="form-group">
                    <label>Durum</label>

                    <div class="input-group">

                        <select name="isActive" class="form-control">
                            <option value="true" <?= $data->isActive == "true" ? "selected" : null ?> >Aktif</option>
                            <option value="false" <?= $data->isActive == "false" ? "selected" : null ?> >Pasif</option>
                        </select>
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

