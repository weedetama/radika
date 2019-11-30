    <!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">Produk</h2>
                <ul>
                    <li>
                        <a class="active" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li>
                        Belanja
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="shop-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-list">
                                <ul>
                                    <li><a href="<?= base_url('kategori/pertanian') ?>">Pertanian </a></li>
                                    <li><a href="<?= base_url('kategori/peternakan') ?>">Peternakan </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="blog-wrapper shop-page-mrg">
                        <div class="tab-menu-product">
                            <div class="tab-menu-sort">
                                <div class="tab-menu">
                                    <ul role="tablist">
                                        <li class="active">
                                            <a href="<?= base_url('produk'); ?>">
                                                <i class="fa fa-th-large"></i>
                                                Produk
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-product">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="row">
                                            <?php foreach ($barang as $b) : ?>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="single-shop mb-40">
                                                        <div class="shop-img">
                                                            <a href="">
                                                                <img src="<?= base_url() . '/uploads/' . $b->gambar ?>" alt="" />
                                                            </a>
                                                            <div class="shop-quick-view">
                                                                <a href="" data-toggle="modal" data-target="#quick-view<?= $b->id; ?>" title="Quick View">
                                                                    <i class="pe-7s-look"></i>
                                                                </a>
                                                            </div>
                                                            <?php
                                                                $soldout = $b->stok;
                                                                if ($soldout == 0) { ?>
                                                                <div class='price-up-down'><span class='sale-new'>Habis</span></div>
                                                            <?php } ?>
                                                            <?php
                                                                $soldout = $b->stok;
                                                                $userdata = $this->session->userdata('username');
                                                                if ($userdata) {
                                                                    if ($soldout == 0) { ?>
                                                                <?php } else { ?>
                                                                    <div class="button-group">
                                                                        <a href="<?= base_url(); ?>produk/add/<?= $b->id; ?>" title="Add to Cart">
                                                                            <i class="pe-7s-cart"></i>
                                                                            add to cart
                                                                        </a>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="shop-text-all">
                                                            <div class="title-color fix">
                                                                <div class="shop-title f-left">
                                                                    <h3>
                                                                        <a href="">
                                                                            <?= $b->nama; ?>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div class="price-ratting fix">
                                                                <span class="price f-right">
                                                                    <span class="new">
                                                                        Rp. <?= number_format($b->harga, 0, ',', '.') ?>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- quick view start -->
                                                <div class="quick-view modal fade in" id="quick-view<?= $b->id; ?>">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div id="view-gallery">
                                                                <div class="col-xs-12">
                                                                    <div class="d-table">
                                                                        <div class="d-tablecell">
                                                                            <div class="modal-dialog">
                                                                                <div class="main-view modal-content">
                                                                                    <div class="modal-footer" data-dismiss="modal">
                                                                                        <span>x</span>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-xs-12 col-sm-5">
                                                                                            <div class="quick-image">
                                                                                                <div class="single-quick-image tab-content text-center">
                                                                                                    <div class="tab-pane fade in active" id="sin-pro-1">
                                                                                                        <img src="<?= base_url() . '/uploads/' . $b->gambar ?>" alt="" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-7">
                                                                                            <div class="quick-right">
                                                                                                <div class="quick-right-text">
                                                                                                    <h3>
                                                                                                        <strong>
                                                                                                            <?= $b->nama; ?>
                                                                                                        </strong>
                                                                                                    </h3>
                                                                                                    <div class="amount">
                                                                                                        <h4>
                                                                                                            Rp. <?= number_format($b->harga, 0, ',', '.') ?>
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <p>
                                                                                                        <?= $b->keterangan; ?>
                                                                                                    </p>
                                                                                                    <div class="row m-p-b">
                                                                                                        <div class="col-sm-12 col-md-6">
                                                                                                            <div class="por-dse responsive-strok clearfix">
                                                                                                                <ul>
                                                                                                                    <li>
                                                                                                                        <span>Stok</span><strong>:</strong>
                                                                                                                        <?php
                                                                                                                            $stok = $b->stok;
                                                                                                                            if ($stok >= 1) {
                                                                                                                                echo " Tersedia";
                                                                                                                            } else {
                                                                                                                                echo " Habis";
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                    </li>
                                                                                                                    <li><span>Kategori</span><strong>:</strong>
                                                                                                                        <?= $b->kategori; ?>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="dse-btn">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-12 col-md-6">
                                                                                                                <div class="por-dse clearfix add-to">
                                                                                                                    <a href="" data-dismiss="modal">
                                                                                                                        <i class="pe-7s-back"></i>
                                                                                                                        close
                                                                                                                    </a>
                                                                                                                    <?php
                                                                                                                        $soldout = $b->stok;
                                                                                                                        $userdata = $this->session->userdata('username');
                                                                                                                        if ($userdata) {
                                                                                                                            if ($soldout == 0) { ?>
                                                                                                                        <?php } else {  ?>
                                                                                                                            <a href="<?= base_url(); ?>produk/add/<?= $b->id; ?>">
                                                                                                                                <i class="pe-7s-cart"></i>
                                                                                                                                add to cart
                                                                                                                            </a>
                                                                                                                        <?php } ?>
                                                                                                                    <?php } ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- quick view end -->
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->