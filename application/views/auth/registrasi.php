<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">Halaman Registrasi</h2>
            <ul>
                <li>
                    <a class="active" href="<?= base_url('home'); ?>">Home</a>
                </li>
                <li>register</li>
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
                        <h4>Daftar akun</h4>
                        <?= $this->session->flashdata('pesan') ?>
                    </div>
                    <div class="login-form">
                        <form action="<?php echo base_url('registrasi/index') ?>" method="post">
                            <input name="nama" placeholder="Nama anda" type="text">
                            <?= form_error('nama', '<div class="text-danger small ml-2 mt-2 pb-20">', '</div>') ?>
                            <input name="username" placeholder="Username" type="text">
                            <?= form_error('username', '<div class="text-danger small ml-2 mt-2 pb-20">', '</div>') ?>
                            <input name="password1" placeholder="Password" type="password">
                            <?= form_error('password1', '<div class="text-danger small ml-2 mt-2 pb-20">', '</div>') ?>
                            <input name="password2" placeholder="Ulangi password" type="password">
                            <div class="button-remember">
                                <button class="login-btn" type="submit">register</button>
                            </div>
                            <div class="new-account">
                                <a href="<?= base_url('auth/login'); ?>">
                                    <p>Sudah punya akun? Silakan login !</p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>