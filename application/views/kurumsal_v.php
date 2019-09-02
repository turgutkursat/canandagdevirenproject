<?php $this->load->view("include/header") ?>


    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="index.html">Anasayfa</a> - Kurumsal</h4>
                        <h2>Biz Kimiz</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection">
        <div class="container">
            <?= htmlspecialchars_decode($data->content) ?>
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