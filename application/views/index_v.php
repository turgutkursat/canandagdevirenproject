<?php $this->load->view("include/header") ?>

    <?php if (empty($rows)): ?>
        <div class="alert alert-danger">Slider Bulunamadı!</div>
    <?php else: ?>

        <section class="rev_slider slider_2">
            <div class="rev_slider_wrapper">
                <div id="rev_slider_2" class="rev_slider" data-version="5.4.5">
                    <ul>

                        <?php foreach ($rows as $row): ?>
                            <li data-transition="random" data-masterspeed="1000">
                                <img src="<?= base_url("admin/$row->image") ?>"
                                     alt="İstanbul Kız Öğrenci Yurdu"
                                     class="rev-slidebg">
                                <div class="tp-caption tp-resizeme normalWraping layer_1"
                                     data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                     {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-x="left"
                                     data-y="center"
                                     data-hoffset="['0', '100', '120', '0']"
                                     data-voffset="['-184', '-170', '-140', '-90']"
                                     data-width="100%"
                                     data-height="['auto]"
                                     data-whitesapce="['normal']"
                                     data-fontsize="20"
                                     data-lineheight="36"
                                     data-fontweight="400"
                                     data-letterspacing="2"
                                     data-color="#000"
                                     data-textAlign="['left', 'left', 'left', 'center']"
                                ></div>
                                <div class="tp-caption tp-resizeme normalWraping layer_2"

                                     data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                     {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                                     data-x="left"
                                     data-y="center"
                                     data-hoffset="['0', '100', '120', '0']"
                                     data-voffset="['8', '0', '0', '0']"
                                     data-width="100%"
                                     data-height="['auto]"
                                     data-whitesapce="['normal']"
                                     data-word-wrap="['normal']"
                                     data-white-break="['break-all']"
                                     data-fontsize="['110', '80', '70', '40']"
                                     data-lineheight="['112', '90', '80', '44']"
                                     data-fontweight="700"
                                     data-letterspacing="['4.4', '4.4', '4.4', '2']"
                                     data-color="#000"
                                     data-textAlign="['left', 'left', 'left', 'center']"
                                ><br><br></div>
                                <div class="tp-caption tp-resizeme normalWraping layer_3"

                                     data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                     {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                                     data-x="left"
                                     data-y="center"
                                     data-hoffset="['0', '100', '120', '0']"
                                     data-voffset="['273', '220', '190', '140']"
                                     data-width="100%"
                                     data-height="['auto]"
                                     data-whitesapce="['normal']"
                                     data-fontsize="16"
                                     data-lineheight=""
                                     data-fontweight="400"
                                     data-textAlign="['left', 'left', 'left', 'center']"
                                ></div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="service_section commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title red_color">Canan Dağdeviren Kız Öğrenci Yurdu</h4>
                    <h2 class="sec_title white">Farkında olmanın yeni yüzü</h2>
                    <p class="sec_desc color_aaa">
                        Siz Değerli Öğrencilerimize <br> Neler Sunuyoruz?
                    </p>
                </div>
            </div>
            <div class="row custom_column">
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                <h3>Mini Bar</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                <h3>Mini Bar</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-television" aria-hidden="true"></i>
                                <h3>Lcd Tv</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-television" aria-hidden="true"></i>
                                <h3>Lcd Tv</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                <h3>Wifi</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                <h3>Wifi</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <h3>Sauna</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <h3>Sauna</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-universal-access" aria-hidden="true"></i>
                                <h3>Fitness</h3>
                            </div>
                            <div class="back">
                                <i class="mei-app-development"></i>
                                <h3>Fitness</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                                <h3>Parmak İzi</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                                <h3>Parmak İzi</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-simplybuilt" aria-hidden="true"></i>
                                <h3>Çamaşırhane</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-simplybuilt" aria-hidden="true"></i>
                                <h3>Çamaşırhane</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <h3>Valiz Odası</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <h3>Valiz Odası</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                <h3>Temizlik</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                <h3>Temizlik Hizmeti</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                <h3>Jenaratör</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                <h3>Jenaratör</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-film" aria-hidden="true"></i>
                                <h3>Sinema</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-film" aria-hidden="true"></i>
                                <h3>Sinema</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                <h3>Revir</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                <h3>Revir</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                <h3>Teknik Destek</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                <h3>Teknik Destek</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                                <h3>Misafirhane</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                                <h3>Misafirhane</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h3>Restaurant</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h3>Cafe Restaurant</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <h3>Hamam</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <h3>Hamam</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <h3>Kütüphane</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <h3>Kütüphane</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <h3>Asansör</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <h3>Asansör</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <h3>Güvenlik</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <h3>Güvenlik</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="fa fa-car" aria-hidden="true"></i>
                                <h3>Servis</h3>
                            </div>
                            <div class="back">
                                <i class="fa fa-car" aria-hidden="true"></i>
                                <h3>Ücretsiz Servis</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection chooseUs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">Canan Dağdeviren Öğrenci Yurdu</h4>
                    <h2 class="sec_title">Yurt Hakkında Bilgiler</h2>
                    <p class="sec_desc">
                        öğrencilerimiz ve konuklarımız için 7/24 karşılama ve danışma hizmeti vermekteyiz.
                    </p>
                </div>
            </div>
            <div id="tabs">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <ul class="chooseUs_title">
                            <li class="active"><a href="#tes_tab_1" data-toggle="tab">Tek Kişilik Oda</a></li>
                            <li><a href="#tes_tab_2" data-toggle="tab">3 Kişilik Oda</a></li>
                            <li><a href="#tes_tab_3" data-toggle="tab">4 ve 5 Kişilik Oda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content clearfix">
                        <div class="tab-pane fade in active" id="tes_tab_1">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="wh_choose">
                                    <p>
                                        Canan Dağdeviren Kız Öğrenci Yurdu özellikleri ve kapsamlı hizmetleri ile
                                        sizlere
                                        hizmet sunuyor.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-square"></i>24 Saat Sıcak Su</li>
                                        <li><i class="fa fa-check-square"></i>Kütüphane, Etüt Odası</li>
                                        <li><i class="fa fa-check-square"></i>Sinema Salonu, Restaurant</li>
                                        <li><i class="fa fa-check-square"></i>Çamaşırhane ve Ütü Odası</li>
                                        <li><i class="fa fa-check-square"></i>Fitness Salonu, Hamam, Sauna</li>
                                        <li><i class="fa fa-check-square"></i>Masa Tenisi, Bavul Odası</li>
                                        <li><i class="fa fa-check-square"></i>Teknik Destek, Dahili Telefon</li>
                                        <li><i class="fa fa-check-square"></i>Parmak İzi Okuma Sistemi, Wifi - İnternet
                                        </li>
                                        <li><i class="fa fa-check-square"></i>Revir, Ücretsiz Servis, Akşam Yemeği
                                            (İsteğe
                                            Bağlı)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5 col-md-5">
                                <div class="chose_img">
                                    <img src="<?= base_url("assets/") ?>images/istanbul-kiz-ogrenci-yurdi-odalar/1.jpg"
                                         alt="İstanbul Kız Öğrenci Yurdu"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tes_tab_2">
                            <div class="col-lg-5 col-sm-5 col-md-5">
                                <div class="chose_img">
                                    <img src="<?= base_url("assets/") ?>images/istanbul-kiz-ogrenci-yurdi-odalar/2.jpg"
                                         alt="İstanbul Kız Öğrenci Yurdu"/>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="wh_choose">
                                    <p>
                                        Canan Dağdeviren Kız Öğrenci Yurdu özellikleri ve kapsamlı hizmetleri ile
                                        sizlere
                                        hizmet sunuyor.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-square"></i>24 Saat Sıcak Su</li>
                                        <li><i class="fa fa-check-square"></i>Kütüphane, Etüt Odası</li>
                                        <li><i class="fa fa-check-square"></i>Sinema Salonu, Restaurant</li>
                                        <li><i class="fa fa-check-square"></i>Çamaşırhane ve Ütü Odası</li>
                                        <li><i class="fa fa-check-square"></i>Fitness Salonu, Hamam, Sauna</li>
                                        <li><i class="fa fa-check-square"></i>Masa Tenisi, Bavul Odası</li>
                                        <li><i class="fa fa-check-square"></i>Teknik Destek, Dahili Telefon</li>
                                        <li><i class="fa fa-check-square"></i>Parmak İzi Okuma Sistemi, Wifi - İnternet
                                        </li>
                                        <li><i class="fa fa-check-square"></i>Revir, Ücretsiz Servis, Akşam Yemeği
                                            (İsteğe
                                            Bağlı)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tes_tab_3">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="wh_choose">
                                    <p>
                                        Canan Dağdeviren Kız Öğrenci Yurdu özellikleri ve kapsamlı hizmetleri ile
                                        sizlere
                                        hizmet sunuyor.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-square"></i>24 Saat Sıcak Su</li>
                                        <li><i class="fa fa-check-square"></i>Kütüphane, Etüt Odası</li>
                                        <li><i class="fa fa-check-square"></i>Sinema Salonu, Restaurant</li>
                                        <li><i class="fa fa-check-square"></i>Çamaşırhane ve Ütü Odası</li>
                                        <li><i class="fa fa-check-square"></i>Fitness Salonu, Hamam, Sauna</li>
                                        <li><i class="fa fa-check-square"></i>Masa Tenisi, Bavul Odası</li>
                                        <li><i class="fa fa-check-square"></i>Teknik Destek, Dahili Telefon</li>
                                        <li><i class="fa fa-check-square"></i>Parmak İzi Okuma Sistemi, Wifi - İnternet
                                        </li>
                                        <li><i class="fa fa-check-square"></i>Revir, Ücretsiz Servis, Akşam Yemeği
                                            (İsteğe
                                            Bağlı)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5 col-md-5">
                                <div class="chose_img">
                                    <img src="<?= base_url("assets/") ?>images/istanbul-kiz-ogrenci-yurdi-odalar/3.jpg"
                                         alt="İstanbul Kız Öğrenci Yurdu"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12  col-md-5">
                    <div class="features_content">
                        <h4 class="sub_title">Canan Dağdeviren</h4>
                        <h2 class="sec_title">Kız Öğrenci Yurdu</h2>

                        <div class="singleFeature">
                            <div class="f_count">01</div>
                            <h3>Rahatlığınız için</h3>
                            <p>
                                Depreme dayanıklı yapılan yurdumuzda öğrencilerimizin yurt yaşamını kolaylaştırmak ve
                                rahat
                                etmeleri tüm odalarımızda banyo,wc, bazalı yatak (ortopedik), çalışma masası-sandalyesi,
                                kitaplık, giysi dolabı, komodin, mini buzdolabı, telefon, 2 adet televizyon, 7/24 sıcak
                                su,
                                saç kurutma makinesi, wifi ve merkezi ısıtma bulunmaktadır.
                            </p>
                        </div>
                        <div class="singleFeature">
                            <div class="f_count">02</div>
                            <h3>Öğrencilerimiz için</h3>
                            <p>
                                Yurt içerisinde sauna, fitness, sinema , Türk hamamı, revir, mescit, kütüphane,
                                restaurant,
                                bavul odası ve çamaşır yıkama- kurutma odaları alanlarımız mevcuttur.
                            </p>
                        </div>
                        <div class="singleFeature">
                            <div class="f_count">03</div>
                            <h3>Öğrencilerimizin Güvenliği</h3>
                            <p>
                                Yurda giriş ve çıkışlar da parmak izinin yanı sıra 24 saat gece görüşlü kamera sistemi
                                ve
                                profesyonel güvenlik ekibiyle takip edilmektedir.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 col-md-7 noPaddingRight">
                    <div class="features_img">
                        <iframe width="1032" height="661" src="https://www.youtube.com/embed/8DHYp-uUIfA?controls=0"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="img_details">
                            <h4>Canan Dağdeviren<br> Kız Öğrenci Yurdu</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection porfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">Canan Dağdeviren Kız Öğrenci Yurdu</h4>
                    <h2 class="sec_title">Odalarımız</h2>
                    <p class="sec_desc">
                        Tek kişik oda, 3 kişilik oda, 4 kişilik oda, 5 kişilik odalarımız mevcuttur.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="gridPhotoGallery-container">
                        <?php if (empty($images)): ?>
                            <div class="alert alert-danger">Resim Bulunamadı!</div>
                        <?php else: ?>
                            <?php foreach ($images as $image): ?>
                                <div class="gridPhotoGallery mfp-gallery misc gridPhotoGallery--ratio-square gridPhotoGallery--cols-3"
                                data-cols="3">
                                <div class="gridPhotoGallery__item gridPhotoGallery__item--sizer">
                                </div>
                                <div class="gridPhotoGallery__item gridPhotoGalleryItem--w1 ">
                                    <a title="<?= $image->title ?>"
                                       class="gridPhotoGalleryItem--h1 gridPhotoGallery__link hoverBorder"
                                       data-lightbox="mfp"
                                       data-mfp="image"
                                       href="<?= base_url("admin/") ?><?= $image->image ?>">
                                        <div class="gridPhotoGallery__img"
                                             style="background-image:url(<?= base_url("admin/") ?><?= $image->image ?>)">
                                        </div>
                                        <i class="kl-icon glyphicon glyphicon-search circled-icon ci-large"></i>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection testimonial_2">
        <div class="container">
            <div class="row">
                <div id="tabs" class="testimoniTab">
                    <div class="col-lg-5 col-sm-5">
                        <h4 class="sub_title color_aaa">Canan Dağdeviren Kız Öğrenci Yurdu</h4>
                        <h2 class="sec_title white">Neredeyiz?</h2>
                        <div>
                            <a href="https://www.google.com/maps/place/Avc%C4%B1lar+Belediyesi+Canan+Da%C4%9Fdeviren+K%C4%B1z+%C3%96%C4%9Frenci+Yurdu/@40.9965697,28.711211,18z/data=!4m5!3m4!1s0x14caa13a7e7b30b5:0x67f18b5397f88451!8m2!3d40.9965498!4d28.7121111">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12045.246906229037!2d28.7121111!3d40.9965498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67f18b5397f88451!2sAvc%C4%B1lar%20Belediyesi%20Canan%20Da%C4%9Fdeviren%20K%C4%B1z%20%C3%96%C4%9Frenci%20Yurdu!5e0!3m2!1str!2str!4v1566746125890!5m2!1str!2str"
                                        width="450" height="450" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade in active testi_con" id="tab_1"
                                 style="margin: 5px;padding: 20px;border-style: solid;border-width: 1px;border-color: gold;">
                                <p style="font-size: 14px">
                                    “İstanbul üniversitesine 1.8 km uzaklıkta olup araç ile 5 dakika, yürüyerek 20
                                    dakika
                                    mesafedeyiz.
                                    <br>

                                    “Gelişim üniversitesine 1.9 km uzaklıkta olup araç ile 5 dakika, yürüyerek 21 dakika
                                    mesafedeyiz.
                                    <br>


                                    “Mustafa kemal paşa metrobüs durağına 750 metre uzaklıkta olup 9 dakika yürüme
                                    mesafesindeyiz.
                                    <br>


                                    “Esenyurt üniversitesine 5.2 km uzaklıkta olup 11 dakika mesafedeyiz.
                                    <br>


                                    “Beykent üniversitesine 8.9 km uzaklıkta olup 15 dakika mesafedeyiz.
                                    <br>

                                    “İstanbul arel üniversitesi tepekent yerleşkesine 23.6 km olup 40 dakika mesafedeyiz
                                    <br>


                                    “İstanbul arel üniversitesi sefaköy yerleşkesine 10.9 km olup 23 dakika mesafedeyiz.

                                    <br>


                                    “Aydın üniversitesine 9.8 km uzaklıkta olup 20 dakika mesafedeyiz.

                                    <br>

                                    “Kültür üniversitesine 12.8 km uzaklıkta olup 28 dakika mesafedeyiz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection what_wedo_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec_title">Sık Sorulan Sorular</h2>

                </div>
            </div>
            <div class="row">
                <?php if (empty($sss)): ?>
                    <div class="alert alert-danger">Resim Bulunamadı!</div>
                <?php else: ?>
                    <?php foreach ($sss as $sss): ?>
                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="single_wedo">
                                <img src="<?= base_url("assets/") ?>images/istanbul-kiz-ogrenci-yurdi-blog/1.jpg"
                                     alt="İstanbul Kız Öğrenci Yurdu"/>
                                <div class="overlay_wedo">
                                    <a href="/sss"><?= $sss->title ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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
<?php $this->load->view("include/footer") ?>