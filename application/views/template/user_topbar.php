<!-- header start -->
<header class="header-area home-style-2">
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="<?= base_url('home'); ?>">
                            <img src="assets/img/logo/logo-black.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-6">
                    <div class="cart-menu">
                        <div class="user user-style-3 f-right">
                            <a href="">
                                <i class="pe-7s-add-user"></i>
                            </a>
                            <div class="currence-user-page">
                                <div class="user-page">
                                    <ul>
                                        <li><a href=""><i class="pe-7s-like"></i> My Wishlist</a></li>
                                        <li><a href=""><i class="pe-7s-check"></i> Checkout</a></li>
                                        <li><a href=""><i class="pe-7s-next-2"></i> Sign In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="shopping-cart f-right">
                            <?php $keranjang;  ?>
                            <a class="top-cart" href="<?= base_url() ?>produk/cart">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <span>
                                <?= $keranjang =  $this->cart->total_items(); ?>
                            </span>
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
                                <li>
                                    <p class="buttons">
                                        <a class="my-cart" href="<?= base_url('produk/cart') ?>">Lihat Keranjang</a>
                                        <a class="checkout" href="<?= base_url('produk/checkout'); ?>">Pembayaran</a>
                                    </p>
                                </li>

                            </ul>
                        </div>
                        <!-- menu -->
                        <div class="main-menu f-right">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="<?= base_url('home'); ?>">home</a>
                                    </li>
                                    <li><a href="<?= base_url('produk'); ?>">Belanja</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('category/pertanian'); ?>">Pertanian</a></li>
                                            <li><a href="<?= base_url('category/peternakan'); ?>">Peternakan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">blog</a>
                                    </li>
                                    <li><a href="">about</a></li>
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
                                    <li><a href="<?= base_url('category/pertanian') ?>">Pertanian</a></li>
                                    <li><a href="<?= base_url('category/peternakan') ?>">Peternakan</a></li>
                                </ul>
                            </li>
                            <li class="active1"><a class="active1" href="#">Blog</a>
                            </li>
                            <li><a href="">about</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->