<!-- header start -->
<header class="header-area home-style-2">
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="<?= base_url('home'); ?>">
                            <img src="<?= base_url() ?>assets/home/assets/img/logo/logo-black.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-6">
                    <div class="cart-menu">
                        <div class="user user-style-3 f-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <a href="">
                                    <i class="pe-7s-user"></i>
                                </a>
                            <?php } else { ?>
                                <a href="<?= base_url('auth/login') ?>">
                                    <i class="pe-7s-add-user"></i>
                                </a>
                            <?php } ?>
                            <div class="currence-user-page">
                                <div class="user-page">
                                    <ul>
                                        <?php if ($this->session->userdata('username')) { ?>
                                            <li>
                                                <div class="alert alert-warning" role="alert">
                                                    selamat datang !
                                                    <strong><?= $this->session->userdata('username') ?></strong>
                                                </div>
                                                <!-- </a> -->
                                            </li>
                                            <li><a class="my-cart" href="<?= base_url('produk/cart'); ?>">
                                                    <i class="pe-7s-cart"></i>
                                                    Keranjang
                                                </a>
                                            </li>
                                            <li><a class="checkout" href="<?= base_url('produk/checkout'); ?>">
                                                    <i class="pe-7s-check"></i>
                                                    Pembayaran
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('auth/logout'); ?>">
                                                    <i class="pe-7s-back"></i>
                                                    Logout
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?= base_url('auth/login'); ?>">
                                                    <i class="pe-7s-next-2"></i>
                                                    Login
                                                </a>
                                            </li>
                                            <li><a href="<?= base_url('registrasi'); ?>">
                                                    <i class="pe-7s-add-user"></i>
                                                    Daftar
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('username')) { ?>
                            <div class="shopping-cart f-right">
                                <?php $keranjang;  ?>
                                <a class="top-cart" href="<?= base_url() ?>produk/cart">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <span>
                                    <?= $keranjang =  $this->cart->total_items(); ?>
                                </span>
                                <?php if ($keranjang == 0) { } else { ?>
                                    <ul>
                                        <?php
                                                foreach ($this->cart->contents() as $items) : ?>
                                            <li>
                                                <div class="cart-img-price">
                                                    <!-- <div class="cart-img">
                                                    <a href="">
                                                        <img src="<?= base_url() . '/uploads/' . $items['image'] ?>" alt="" width="120px;">
                                                    </a>
                                                </div> -->
                                                    <div class="cart-content">
                                                        <h3>
                                                            <a href="">
                                                                <?= $items['name'] ?>
                                                            </a>
                                                        </h3>
                                                        <span class="cart-price">
                                                            <?= $items['qty'] ?> x <?= number_format($items['price'], 0, ',', '.') ?>
                                                        </span>
                                                    </div>
                                                    <!-- <div class="cart-del">
                                                    <i class="pe-7s-close-circle"></i>
                                                </div> -->
                                                </div>
                                            </li>
                                            <li>
                                                <p class="total">
                                                    Subtotal:
                                                    <span>
                                                        <?= number_format($items['subtotal'], 0, ',', '.') ?>
                                                    </span>
                                                </p>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <!-- menu -->
                        <div class="main-menu f-right">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="<?= base_url('home'); ?>">home</a>
                                    </li>
                                    <li><a href="<?= base_url('produk'); ?>">Belanja</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('kategori/pertanian'); ?>">Pertanian</a></li>
                                            <li><a href="<?= base_url('kategori/peternakan'); ?>">Peternakan</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">
                                            blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            about
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a class="active1" href="<?= base_url('home'); ?>">Home</a>
                            </li>
                            <li class="active1"><a class="active1" href="<?= base_url('produk'); ?>">Belanja</a>
                                <ul>
                                    <li><a href="<?= base_url('kategori/pertanian') ?>">Pertanian</a></li>
                                    <li><a href="<?= base_url('kategori/peternakan') ?>">Peternakan</a></li>
                                </ul>
                            </li>
                            <li class="active1"><a class="active1" href="#">Blog</a>
                            </li>
                            <li>
                                <a href="">
                                    about
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->