<?php $this->load->view("include/header") ?>
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="/">Anasayfa</a> - Galeri</h4>
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection porfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec_title">Yurdumuz</h2>
                    <p class="sec_desc">
                        Otel konforu Ev rahatlığı
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php if (empty($rows)): ?>
                        <div class="alert alert-danger">Galeriye ait resim Bulunamadı!</div>
                    <?php else: ?>
                        <div class="gridPhotoGallery-container">
                            <div class="gridPhotoGallery mfp-gallery misc gridPhotoGallery--ratio-square gridPhotoGallery--cols-3"
                                 data-cols="3">
                                <div class="gridPhotoGallery__item gridPhotoGallery__item--sizer">
                                </div>
                                <?php foreach ($rows as $row): ?>
                                    <div class="gridPhotoGallery__item gridPhotoGalleryItem--w1 ">
                                        <a title="<?=$row->title?>"
                                           class="gridPhotoGalleryItem--h1 gridPhotoGallery__link hoverBorder"
                                           data-lightbox="mfp" data-mfp="image"
                                           href="<?= base_url("admin/$row->image") ?>">
                                            <div class="gridPhotoGallery__img"
                                                 style="background-image:url(<?= base_url("admin/$row->image") ?>)">
                                            </div>
                                            <i class="kl-icon glyphicon glyphicon-search circled-icon ci-large"></i>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view("include/footer") ?>