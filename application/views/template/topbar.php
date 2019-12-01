            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                <div class="header navbar">
                    <div class="header-container">
                        <ul class="nav-left">
                            <li>
                                <a class="side-nav-toggle" href="javascript:void(0);">
                                    <i class="ti-view-grid"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- <img class="profile-img img-fluid" src="<?= base_url() ?>assets/dist/assets/images/user.jpg" alt=""> -->
                                    <div class="user-info">
                                        <span class="name pdd-right-5"><?= $this->session->userdata('username') ?></span>
                                        <i class="ti-angle-down font-size-10"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- <li>
                                        <a href="#">
                                            <i class="ti-user pdd-right-10"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li> -->
                                    <!-- <li role="separator" class="divider"></li> -->
                                    <li>
                                        <a href="<?= base_url('auth/logout') ?>">
                                            <i class="ti-power-off pdd-right-10"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="notifications dropdown">
                                <span class="counter">
                                    <?php
                                    $notifikasi = $notif->num_rows();
                                    ?>
                                    <?= $notifikasi; ?>
                                </span>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li class="notice-header">
                                        <i class="ti-bell pdd-right-10"></i>
                                        <span>Notifications</span>
                                    </li>
                                    <li>
                                        <ul class="list-info overflow-y-auto relative scrollable">
                                            <li>
                                                <?php
                                                if ($notifikasi > 0) { ?>
                                                    <a href="<?= base_url('invoice') ?>">
                                                        <div class="info">
                                                            <span class="title">
                                                                <span class="font-size-14 text-semibold">
                                                                    <?= $notifikasi; ?> Pesanan
                                                                </span>
                                                                <span class="text-gray">
                                                                    yang masih
                                                                    <span class="text-dark">
                                                                        pending
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                <?php } else { ?>
                                                    <a href="">
                                                        <div class="info">
                                                            <span class="title">
                                                                <span class="font-size-14 text-semibold text-left">
                                                                    Tidak ada pesanan !
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="notice-footer">
                                        <span>
                                            <a href="<?= base_url('invoice') ?>" class="text-gray">Invoice <i class="ei-right-chevron pdd-left-5 font-size-10"></i></a>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header END -->

                <!-- theme configurator START -->
                <div class="theme-configurator">
                    <div class="configurator-wrapper">
                        <div class="config-header">
                            <h4 class="config-title">Config Panel</h4>
                            <button class="config-close">
                                <i class="ti-close"></i>
                            </button>
                        </div>
                        <div class="config-body">
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Header Color</p>
                                <div class="theme-colors header-default">
                                    <input type="radio" id="header-default" name="theme">
                                    <label for="header-default"></label>
                                </div>
                                <div class="theme-colors header-primary">
                                    <input type="radio" class="primary" id="header-primary" name="theme">
                                    <label for="header-primary"></label>
                                </div>
                                <div class="theme-colors header-info">
                                    <input type="radio" id="header-info" name="theme">
                                    <label for="header-info"></label>
                                </div>
                                <div class="theme-colors header-success">
                                    <input type="radio" id="header-success" name="theme">
                                    <label for="header-success"></label>
                                </div>
                                <div class="theme-colors header-danger">
                                    <input type="radio" id="header-danger" name="theme">
                                    <label for="header-danger"></label>
                                </div>
                                <div class="theme-colors header-dark">
                                    <input type="radio" id="header-dark" name="theme">
                                    <label for="header-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Sidebar Color</p>
                                <div class="theme-colors sidenav-default">
                                    <input type="radio" id="sidenav-default" name="sidenav">
                                    <label for="sidenav-default"></label>
                                </div>
                                <div class="theme-colors side-nav-dark">
                                    <input type="radio" id="side-nav-dark" name="sidenav">
                                    <label for="side-nav-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal no-mrg-btm">RTL</p>
                                <div class="toggle-checkbox checkbox-inline toggle-sm mrg-top-10">
                                    <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                    <label for="rtl-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- theme configurator END -->

                <!-- Theme Toggle Button START -->
                <button class="theme-toggle btn btn-rounded btn-icon">
                    <i class="ti-palette"></i>
                </button>
                <!-- Theme Toggle Button END -->

                <!-- Content Wrapper START -->
                <div class="main-content">