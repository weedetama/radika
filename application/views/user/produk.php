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
    <!-- login area end -->
    <div class="shop-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <!-- <div class="single-sidebar">
                            <h3 class="sidebar-title">Choose Price</h3>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price" />
                                </div>
                            </div>
                        </div> -->
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-list">
                                <ul>
                                    <li><a href="<?= base_url('category/pertanian') ?>">Pertanian </a></li>
                                    <li><a href="<?= base_url('category/peternakan') ?>">Peternakan </a></li>
                                    <!-- <li><input type="checkbox"> <a href="#">Tops (3)</a></li> -->
                                </ul>
                            </div>
                        </div>

                        <!-- TAG -->
                        <!-- <div class="single-sidebar">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <div class="tag">
                                <ul>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">footwear</a></li>
                                    <li><a href="#">kid</a></li>
                                    <li><a href="#">View All Tags</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- END TAG -->

                        <!-- <div class="single-sidebar">
                            <div class="sidebar-img-text">
                                <div class="sidebar-img">
                                    <a href="#">
                                        <img src="<?= base_url(); ?>assets/home/assets/img/shop/2.jpg" alt="">
                                    </a>
                                    <div class="sidebar-text">
                                        <h3>Hemat sampai </h3>
                                        <h2>25% </h2>
                                        <h3>cap</h3>
                                        <a href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
                                        <!-- <li>
                                            <a href="#list" data-toggle="tab">
                                                <i class="fa fa-align-justify"></i>
                                                List
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- <div class="tab-sort">
                                    <label>Urutkan : </label>
                                    <select>
                                        <option value="">Harga</option>
                                        <option value="">Nama</option>
                                        <option value="">Stok</option>
                                    </select>
                                </div> -->
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
                                                            <div class="button-group">
                                                                <a href="<?= base_url(); ?>produk/add/<?= $b->id; ?>" title="Add to Cart">
                                                                    <i class="pe-7s-cart"></i>
                                                                    add to cart
                                                                </a>
                                                            </div>
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
                                                                <span class="price f-left">
                                                                    <span class="new">
                                                                        Rp. <?= number_format($b->harga, 0, ',', '.') ?>
                                                                    </span>
                                                                </span>
                                                                <span class="price f-right">
                                                                    <span class="new">
                                                                        Stok : <?= $b->stok; ?>
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
                                                                                                                        <?= $b->stok; ?>
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
                                                                                                                    <a href="<?= base_url(); ?>produk/add/<?= $b->id; ?>">
                                                                                                                        <i class="pe-7s-cart"></i>
                                                                                                                        add to cart
                                                                                                                    </a>
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

                                    <!-- pagination -->
                                    <!-- <div class="page-pagination text-center">
                                        <ul>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-double-right"></i>
                                                </a></li>
                                        </ul>
                                    </div> -->
                                    <!-- end pagination -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->