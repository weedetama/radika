    <!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title"> Pembayaran</h2>
                <ul>
                    <li>
                        <a class="active" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li>
                        <a class="active" href="<?= base_url('produk'); ?>">Belanja</a>
                    </li>
                    <li>
                        <a class="active" href="<?= base_url('produk/cart'); ?>">Keranjang</a>
                    </li>
                    <li>Pembayaran</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- checkout area start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-5">
                    <div class="customer-coupon">
                        <h3><i class="fa fa-square-o"></i> Have a coupon? <span id="coupon">Click here to enter your code</span></h3>
                        <div id="have-coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <label>
                                            Coupon code
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" />
                                        <input class="coupon-submit" type="submit" value="Apply Coupon" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-7 f-right">
                    <div class="returning-customer">
                        <h3><i class="fa fa-user"></i> Returning customer? <span id="customer">Click here to login</span></h3>
                        <div id="customer-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row">
                                        <input type="submit" value="Login" />
                                        <label>
                                            <input type="checkbox" />
                                            Remember me
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2>Pembelian Anda</h2>
                            <ul>
                                <?php
                                foreach ($this->cart->contents() as $items) : ?>
                                    <li><?= $items['name'] ?> x <?= $items['qty'] ?> <span>Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></span></li>
                                <?php endforeach; ?>
                                <li class="order-total">Total Pembelian <span> Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>,-</span></li>

                            </ul>
                        </div>
                        <div class="your-payment">
                            <h2>Metode Pembayaran</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Transfer Melalui ATM MANDIRI
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>
                                                        A/n = Tri Radika Karya
                                                    </p>
                                                    <p>
                                                        Nomer Rekening = xxxx-xxxx-xxxx
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Transfer Melalui ATM BCA
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>
                                                        A/n = Tri Radika Karya
                                                    </p>
                                                    <p>
                                                        Nomer Rekening = xxxx-xxxx-xxxx
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Transfer Melalui ATM BRI
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>
                                                        A/n = Tri Radika Karya
                                                    </p>
                                                    <p>
                                                        Nomer Rekening = xxxx-xxxx-xxxx
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="billing-details-area">
                        <h2>Masukan Data diri</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="billing-input">
                                        <label>
                                            Nama Lengkap
                                            <span class="required">*</span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="billing-input">
                                        <label>
                                            Alamat Lengkap
                                            <span class="required">*</span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="billing-input">
                                        <label>
                                            Kota
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="billing-input">
                                        <label>
                                            Kode Pos
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="billing-input">
                                        <label>
                                            No. Telepon
                                            <span class="required">*</span>
                                        </label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="billing-input">
                                        <label>
                                            Jasa Pengiriman
                                            <span class="required">*</span>
                                        </label>
                                        <select>
                                            <option selected disabled>--pengiriman--</option>
                                            <option value="">Gojek</option>
                                            <option value="">Grab</option>
                                            <option value="">JNE</option>
                                            <option value="">TIKI</option>
                                            <option value="">POS INDONESIA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="billing-input">
                                        <label>
                                            Pilih Bank
                                            <span class="required">*</span>
                                        </label>
                                        <select>
                                            <option selected disabled>--bank--</option>
                                            <option value="">MANDIRI</option>
                                            <option value="">BCA</option>
                                            <option value="">BRI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="billing-input form-group">
                                        <label>
                                            Upload bukti pembayaran
                                            <span class="required">*</span>
                                        </label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="billing-input">
                                        <label>
                                            Catatan
                                            <span class="required">*</span>
                                        </label>
                                        <textarea id="checkout-mess" placeholder="Tambahkan catatan tentang pesanan anda"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <input type="submit" value="Pesan" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->