            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <div class="side-nav-logo">
                        <a href="<?= base_url('dashboard'); ?>">
                            <div class="logo logo-dark" style="background-image: url('assets/images/logo/logo.png')">
                            </div>
                            <div class="logo logo-white" style="background-image: url('assets/images/logo/logo-white.png')"></div>
                        </a>
                        <div class="mobile-toggle side-nav-toggle">
                            <a href="#">
                                <i class="ti-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item active">
                            <a class="mrg-top-30" href="<?= base_url('dashboard'); ?>">
                                <span class="icon-holder">
                                    <i class="ti-home"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="ti-package"></i>
                                </span>
                                <span class="title">Barang</span>
                                <span class="arrow">
                                    <i class="ti-angle-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= base_url('item'); ?>">List Barang</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('category'); ?>">List Kategori</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="ti-file"></i>
                                </span>
                                <span class="title">Invoices</span>
                                <span class="arrow">
                                    <i class="ti-angle-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= base_url('invoice') ?>">List Invoice</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->