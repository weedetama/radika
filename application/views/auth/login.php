    <!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">Halaman Login</h2>
                <ul>
                    <li>
                        <a class="active" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li>login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- login area end -->
    <div class="login-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-content">
                        <div class="login-title">
                            <h4>login</h4>
                            <?= $this->session->flashdata('pesan') ?>
                            <!-- <p>Please login using account detail bellow.</p> -->
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url('auth/login'); ?>" method="post">
                                <input name="username" placeholder="Username" type="text">
                                <?= form_error('username', '<div class="text-danger small pb-20">', '</div>'); ?>
                                <input name="password" placeholder="Password" type="password">
                                <?= form_error('password', '<div class="text-danger small">', '</div>'); ?>
                                <div class="button-remember">
                                    <!-- <div class="checkbox-remember">
                                        <input id="checkbox" type="checkbox">
                                        <label>Remember me</label>
                                        <a href="">Forgot your Password?</a>
                                    </div> -->
                                    <button class="login-btn" type="submit">Login</button>
                                </div>
                                <div class="new-account">
                                    <p><a href="">Belum punya akun ? Daftar !</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->