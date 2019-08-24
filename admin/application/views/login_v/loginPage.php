<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giriş | EntrBit Software</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view("$this->doLogin/style") ?>
</head>
<body class="hold-transition register-page" style="background-image: url('https://picsum.photos/id/966/1920/1080?blur');">
<div class="login-box">
    <div class="login-logo text-dark">
        <b>EntrBit Software</b> Admin
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Oturum Aç</p>

            <form action="<?= base_url("login") ?>" method="post">

                <?php if (!empty($this->session->flashdata('text') && !empty($this->session->flashdata('type')))): ?>
                    <div class="alert alert-<?= $this->session->flashdata('type') ?>" role="alert">
                        <?= $this->session->flashdata('text') ?>
                    </div>
                <?php endif; ?>
                <small class="text-danger"><?= form_error('email'); ?></small>
                <div class="input-group mb-3">
                    <input type="email"
                           class="form-control <?php if (form_error("email")): ?>is-invalid <?php endif; ?>"
                           placeholder="E-mail" value="<?= set_value("email")?set_value("email"):"admin@admin.com" ?>" name="email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger"><?= form_error('password'); ?></small>
                <div class="input-group mb-3">
                    <input type="password" name="password"
                           class="form-control <?php if (form_error("password")): ?>is-invalid <?php endif; ?>" required
                           placeholder="Şifre" value="demoadmin">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" name="submit" value="1" class="btn btn-primary btn-block btn-flat">Giriş
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <p class="mb-1">
                <a href="#">Şifremi Unuttum</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url("register") ?>" class="text-center">Yeni üye ol</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.register-box -->

<?php $this->load->view("$this->doLogin/script") ?>
</body>
</html>
