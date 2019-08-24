<?php $this->load->view("$this->view/header") ?>
<?= form_open_multipart("$this->url/add"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Resim Ekle</h1>
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
                <h3 class="card-title">Tüm alanları doldurunuz.</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="form-group">
                    <label>Başlık</label>
                    <div class="input-group">
                        <input type="text"
                               class="form-control <?= form_error("companyName") ? "is-invalid" : null ?>"
                               name="title" minlength="5" required>
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>Resim</label>
                    <div class="input-group">
                        <input type="file" class="form-control" required name="image">
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

