<?php $settings = getSettings(); ?>

<footer class="footer_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 col-md-5">
                <aside class="widget aboutwidget">
                    <a href="#"><img src="<?= base_url("assets/images/logo-foter.png") ?>" alt=""></a>
                    <p>
                        <?= $settings->about ?>
                    </p>
                </aside>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4">
                <aside class="widget contact_widgets">
                    <h3 class="widget_title">İletişim</h3>
                    <p>
                        <?= $settings->adress ?>
                    </p>
                    <p>Tel: <?= $settings->phone ?></p>
                    <p><E-mail></E-mail>: <a href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a></p>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-2 col-md-3">
                <aside class="widget social_widget">
                    <h3 class="widget_title">Sosyal Medyada Biz</h3>
                    <ul>
                        <?php if ($settings->facebook):?>
                        <li><a href="<?= $settings->facebook ?>"><i class="fa fa-facebook-square"></i>Facebook</a>
                        </li>
                        <?php endif;?>
                        <?php if ($settings->twitter):?>
                            <li><a href="<?= $settings->twitter ?>"><i class="fa fa-twitter"></i>Twitter</a></li>
                            </li>
                        <?php endif;?>
                        <?php if ($settings->instagram):?>
                            <li><a href="<?= $settings->instagram ?>"><i class="fa fa-instagram"></i>İnstagram</a></li>
                            </li>
                        <?php endif;?>
                        <?php if ($settings->youtube):?>
                            <li><a href="<?= $settings->youtube ?>"<i class="fa fa-youtube-play"></i>Youtube</a></li>
                            </li>
                        <?php endif;?>
                        <?php if ($settings->whatsapp):?>
                            <li><a href="<?= $settings->whatsapp ?>"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
                            </li>
                        <?php endif;?>

                    </ul>
                </aside>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="copyright">
                    © <?=$settings->companyName?> Tüm Hakları Saklıdır 2019. Tasarım <a
                            href="https://www.urasdigital.com/">Uras Digital</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>
<?php $this->load->view("include/script") ?>
</body>
</html>