<?php $this->load->view("$this->view/header") ?>
<form action="<?= base_url("$this->url") ?>" method="post">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kurumsal Düzenleme</h1>
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
                    <h3 class="card-title">Kurumsal</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <label>İçerik</label>
                    <textarea name="content" class="form-control" id="content" cols="30"
                              rows="10"><?= !empty($data->content) ? htmlspecialchars_decode($data->content) : set_value("content") ?></textarea>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</form>

    <script>
        CKEDITOR.replace('content',{
            height:600,
        });
    </script>

<?php $this->load->view("$this->view/footer") ?>

