<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/css2/style.css" type="text/css">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href=""><img src="<?= base_url('')?>/assets/img/ADAKAH.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Indonesia</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Indonesia</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Kontak</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> adakah.com</li>
                <li>Temukan barang yang kamu cari disini</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?= base_url('')?>/assets/img/ADAKAH.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a href="<?= base_url('');?>">Beranda</a></li>
                            <li><a href="<?= base_url('beranda/barang');?>">Barang</a></li>
                            <li><a href="<?= base_url('beranda/toko');?>">Toko</a></li>
                            <li><a href="<?= base_url('beranda/blog');?>">Blog</a></li>
                            <li><a href="<?= base_url('beranda/kontak');?>">Kontak</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    