<?php $this->load->view("include/header") ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/") ?>css/preset.css"/>
    <link rel="stylesheet" href="<?= base_url("assets/") ?>css/template1.css" type="text/css" media="all">
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="/">Anasayfa</a> - S.S.S</h4>
                        <h2>Sıkça Sorulan Sorular</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="commonSection blogDetails">

        <div class="container">
            <?php if (empty($rows)): ?>
                <div class="alert alert-danger">Sıkça Sorulan Sorular Bulunamadı!</div>
            <?php else: ?>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="kl-title-block text-center">
                            <h3 class="tbk__title fs-xxl fw-thin">
								<span class="fw-semibold fs-xxxl fs-xs-xl tcolor">
									S.S.S</span>
                            </h3>
                            <h3 class="tbk__title">
                            </h3>
                            <div style="height: 50px;"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="hg_accordion_element style4">
                            <h3>
                                S.S.S
                            </h3>
                            <div class="th-accordion">
                                <?php foreach ($rows as $row): ?>
                                    <div class="acc-group">
                                        <div id="heading<?= $row->id ?>">
                                            <a data-toggle="collapse" data-target="#acc<?= $row->id ?>"
                                               class="collapsed"
                                               aria-expanded="false" aria-controls="acc<?= $row->id ?>">
                                                <?= $row->title ?><span class="acc-icon"></span>
                                            </a>
                                        </div>
                                        <div id="acc<?= $row->id ?>" class="collapse"
                                             aria-labelledby="heading<?= $row->id ?>"
                                             data-parent=".style4">
                                            <div class="content">
                                                <p>
                                                    <?= $row->message ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php $this->load->view("include/footer") ?>