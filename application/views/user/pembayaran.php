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
            <?php $grandtotal = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $items) {
                    $grandtotal = $grandtotal + $items['subtotal'];
                } ?>
                <div class="row">
                    <div class="col-md-5">
                        <div class="your-order-payment">
                            <div class="your-order">
                                <h2>Pembelian Anda</h2>
                                <ul>
                                    <?php
                                        foreach ($this->cart->contents() as $items) : ?>
                                        <li>
                                            [ <?= $items['name'] ?> ] &times [ <?= $items['qty'] ?> ]
                                            <span>
                                                Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                    <li class="order-total">
                                        Total Pembelian
                                        <span>
                                            Rp. <?= number_format($grandtotal, 0, ',', '.'); ?>,-
                                        </span>
                                    </li>
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
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-warning " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong> <?= validation_errors(); ?> </strong>
                            </div>
                        <?php endif; ?>
                        <div class="billing-details-area">
                            <h2>Masukan Data diri</h2>
                            <form action="<?= base_url('produk/proses'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="billing-input">
                                            <label>
                                                Nama Lengkap
                                                <span class="required">*</span>
                                            </label>
                                            <input placeholder="" type="text" name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="billing-input">
                                            <label>
                                                Alamat Lengkap
                                                <span class="required">*</span>
                                            </label>
                                            <input placeholder="" type="text" name="alamat">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="billing-input">
                                            <label>
                                                Kota
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" name="kota">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="billing-input">
                                            <label>
                                                Kode Pos
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" name="kodepos">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="billing-input">
                                            <label>
                                                No. Telepon
                                                <span class="required">*</span>
                                            </label>
                                            <input placeholder="" type="text" name="notelf">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="billing-input">
                                            <label>
                                                Jasa Pengiriman
                                                <span class="required">*</span>
                                            </label>
                                            <select name="pengiriman">
                                                <option disabled selected>--Pilih Pengiriman--</option>
                                                <option value="Gojek">Gojek</option>
                                                <option value="Grab">Grab</option>
                                                <option value="JNE">JNE</option>
                                                <option value="TIKI">TIKI</option>
                                                <option value="POS INDONESIA">POS INDONESIA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="billing-input">
                                            <label>
                                                Pilih Bank
                                                <span class="required">*</span>
                                            </label>
                                            <select name="bank">
                                                <option selected disabled>--Pilih Bank--</option>
                                                <option value="MANDIRI">MANDIRI</option>
                                                <option value="BCA">BCA</option>
                                                <option value="BRI">BRI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="billing-input form-group">
                                            <label>
                                                Upload bukti pembayaran
                                                <span class="required">*</span>
                                            </label>
                                            <input type="file" class="form-control" name="buktifoto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="billing-input">
                                            <label>
                                                Catatan
                                            </label>
                                            <textarea id="checkout-mess" placeholder="Tambahkan catatan tentang pesanan anda" name="catatan"></textarea>
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
            <?php
            } else {
                echo "<div class='text-center alert alert-warning'><h4><i class='pe-7s-like'></i> <strong>Keranjang belanja</strong> anda masi kosong</h4></div>";
            }
            ?>
        </div>
    </div>

    <!-- checkout area end -->