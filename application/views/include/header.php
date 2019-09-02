<?php $settings = getSettings(); ?>
<!DOCTYPE HTML>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?= $settings->companyName ?></title>
    <meta name="viewport" content="width=device-width">
    <?php $this->load->view("include/style") ?>
    <meta name="description"
          content="<?= $settings->description ?>"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
          content="<?= $settings->keywords ?>"/>
    <meta name="robots" content="index, follow"/>
    <meta name="google-site-verification" content="zN4PbZdDR3tdfhqDsaV40f1YC0YBC3X8IN26qnCAUMg"/>
    <link rel="canonical" href="<?=base_url()?>"/>
    <meta name="author" content="<?=base_url()?>"/>
    <meta name="allow-search" content="yes"/>
    <meta name="audience" content="all"/>
    <meta name="distribution" content="global"/>
    <meta name="Revisit-After" content="1 days"/>
    <meta name="author" content="Uras Digital"/>
    <meta name="publisher" content="VS 2017"/>
    <meta name="generator" content="<?= $settings->companyName ?>"/>
    <meta name="copyright" content="<?= $settings->copyright ?>"/>
    <meta name="rating" content="all"/>
    <meta name="Identifier-Url" content="<?=base_url()?>"/>
    <meta name="url" content="<?=base_url()?>"/>
    <link href="<?=base_url()?>" hreflang='tr' rel='alternate'/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <
    <link rel="icon" type="image/png" href="<?= base_url("assets/images/favicon.png") ?>">
</head>
<body>
<div style="  position: fixed;
	bottom: 0px;
	right: 70px;
	font-size: 0px;
	z-index: 999998;
	margin-bottom: 5px !important;
	padding: 0px 0px;">
    <a href="https://api.whatsapp.com/send?phone=905339597022">
        <img style="border-radius: 25px" src="<?= base_url("assets/images/whatsapp-icons.png") ?>"></a>
</div>
<div class="preloader text-center" style="z-index: 999999;">
    <div class="la-ball-circus la-2x">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<header class="header_01" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url("assets/images/logo2.png") ?>"
                                              alt="İstanbu Canan Dağdeviren Kız Öğrenci Yurdu"/></a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-7 col-md-7">
                <nav class="mainmenu text-center">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>">Anasayfa</a>
                        </li>
                        <li><a href="<?= base_url("kurumsal") ?>">Kurumsal</a></li>
                        <li><a href="<?= base_url("galeri") ?>">Galeri</a>
                        </li>
                        <li><a href="<?= base_url("sss") ?>">S.S.S</a>
                        </li>
                        <li><a href="<?= base_url("iletisim") ?>">İletişim</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <div class="navigator text-right">
                    <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg"><i
                                class="mei-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>