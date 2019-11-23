    <!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">Daftar Keranjang</h2>
                <ul>
                    <li>
                        <a class="active" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li>
                        <a class="active" href="<?= base_url('produk'); ?>">Belanja</a>
                    </li>
                    <li>Keranjang</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- shopping-cart-area start -->
    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th class="product-price">Gambar</th> -->
                                        <th class="product-name">Produk</th>
                                        <th class="product-price">Harga</th>
                                        <th class="product-quantity">Jumlah</th>
                                        <th class="product-subtotal">Subtotal</th>
                                        <!-- <th class="product-name">remove</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($this->cart->contents() as $items) : ?>
                                        <tr>
                                            <!-- <td class="product-thumbnail">
                                                <img src="<?= base_url() . '/uploads/' . $items['image'] ?>" alt="" width="120px;">
                                            </td> -->
                                            <td class="product-name">
                                                <a href="">
                                                    <?= $items['name'] ?>
                                                </a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">
                                                    <?= number_format($items['price'], 0, ',', '.') ?>
                                                </span>
                                            </td>
                                            <td class="product-quantity">
                                                <input class="text-center" value="<?= $items['qty'] ?>" type="number" readonly>

                                            </td>
                                            <td class="product-subtotal">
                                                <?= number_format($items['subtotal'], 0, ',', '.') ?>
                                            </td>

                                            <!-- <td class="product-remove">
                                                <a href="<?= base_url() ?>/produk/remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td> -->

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-5 col-sm-12 col-xs-12 f-right">
                    <div class="cart-total">
                        <ul>
                            <li class="cart-black">
                                Total
                                <span> Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>,-</span>
                            </li>
                        </ul>
                        <div class="cart-total-btn">
                            <div class="cart-total-btn1 f-left">
                                <a href="<?= base_url('produk/delete'); ?>">Hapus Keranjang</a>
                            </div>
                            <div class="cart-total-btn1">
                                <a href="<?= base_url('produk'); ?>">Lanjut Belanja</a>
                            </div>
                            <div class="cart-total-btn2 f-right">
                                <a href="<?= base_url('produk/checkout'); ?>">Pembayaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area end -->