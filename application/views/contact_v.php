<?php $this->load->view("include/header") ?>
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="/">Anasayfa</a> - İletişim</h4>
                        <h2>Bize Ulaşın</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection ContactPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec_title"><?=$this->session->settings->companyName?></h2>
                    <p class="sec_desc">
                        Sorularınız ve Önerileriniz için bizimle irtibata geçebilir yada e-mail gönderebilirsiniz.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-md-10 col-md-offset-1">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger"><?= validation_errors(); ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url("iletisim") ?>" method="post" class="contactFrom">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <input class="input-form required" type="text" name="fullName"
                                       placeholder="Ad ve Soyad " value="<?= set_value("fullName") ?>">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="input-form required" type="text" name="phone"
                                       placeholder="Telefon Numarası" value="<?= set_value("phone") ?>">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="input-form required" type="email" name="email"
                                       placeholder="E-Mail" value="<?= set_value("email") ?>">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <input class="input-form" type="text" name="title" placeholder="Başlık"
                                       value="<?= set_value("title") ?>">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                            <textarea class="input-form required" name="content"
                                      placeholder="Mesaj"><?= set_value("content") ?></textarea>
                            </div>
                        </div>
                        <button class="common_btn red_bg" type="submit" name="submit" value="1"><span>Gönder</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="gmapsection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 noPadding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12045.246906229037!2d28.7121111!3d40.9965498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67f18b5397f88451!2sAvc%C4%B1lar%20Belediyesi%20Canan%20Da%C4%9Fdeviren%20K%C4%B1z%20%C3%96%C4%9Frenci%20Yurdu!5e0!3m2!1str!2str!4v1566746125890!5m2!1str!2str"
                            width="450" height="450" frameborder="0"
                            style="border-bottom:3px solid black;border-top:3px solid black;" class="gmap"
                            allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection ContactPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">Biz Neredeyiz?</h4>
                    <h2 class="sec_title"><?=$this->session->settings->companyName?></h2>
                    <p class="sec_desc">
                        Adres: <?=$this->session->settings->adress?> </br>
                        Tel: <?=$this->session->settings->phone?> </br>
                        Whatsapp: <?=$this->session->settings->whatsapp?>   </br>
                        E-Mail: <a href="mailto:<?=$this->session->settings->email?>"><?=$this->session->settings->email?></a></br>
                    </p>
                </div>
            </div>

        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<?php if (!empty($this->session->flashdata('text') && !empty($this->session->flashdata('type')))): ?>
    <script !src="">
        iziToast.<?=$this->session->flashdata('type')?>({
            position: 'topCenter',
            title: '<?=$this->session->flashdata('text')?>',
        });
    </script>
<?php endif; ?>
<?php $this->load->view("include/footer") ?>