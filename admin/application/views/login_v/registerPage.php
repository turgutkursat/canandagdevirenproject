<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kayıt ol | EntrBit Software</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view("$this->doLogin/style") ?>
</head>
<body class="hold-transition register-page" style="background-image: url('https://picsum.photos/id/966/1920/1080?blur');">
<div class="register-box">
    <div class="register-logo text-dark">
        <b>EntrBit Software</b> Admin
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Yeni Kayıt Oluştur</p>
            <form action="<?= base_url("register") ?>" method="post">

                <?php if (!empty($this->session->flashdata('text') && !empty($this->session->flashdata('type')))): ?>
                    <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                        <?= $this->session->flashdata('text') ?>
                    </div>
                <?php endif; ?>

                <small class="text-danger"><?= form_error('fullName'); ?></small>
                <div class="input-group mb-3">
                    <input type="text" minlength="6"
                           class="form-control <?php if (form_error("fullName")): ?>is-invalid <?php endif; ?>"
                           name="fullName" value="<?= set_value("fullName") ?>" placeholder="Ad ve Soyad"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                </div>
                <small class="text-danger"><?= form_error('email'); ?></small>
                <div class="input-group mb-3">
                    <input type="email"
                           class="form-control <?php if (form_error("email")): ?>is-invalid <?php endif; ?>"
                           name="email" placeholder="E-mail">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('password'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" minlength="6" name=" password"
                           class="form-control <?php if (form_error("password")): ?>is-invalid <?php endif; ?>"
                           placeholder="Şifre"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('rePassword'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" minlength="6" name="rePassword"
                           class="form-control  <?php if (form_error("rePassword")): ?>is-invalid <?php endif; ?>"
                           placeholder="Şifre Tekrarı">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="1">Kayıt
                            Ol
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-0">
                <a href="<?=base_url("login")?>" class="text-center">Giriş Yap</a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php $this->load->view("$this->doLogin/script") ?>
</body>
</html>
