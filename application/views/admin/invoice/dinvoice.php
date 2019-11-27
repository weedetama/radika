<div class="container-fluid">
    <div class="page-title">
        <h4>
            <i class="ti-file text-warning mr-1"></i>Detail Invoice
        </h4>
    </div>
    <div class="card shadow mb-2">
        <div class="card-header">
            <div class="btn btn-sm btn-outline-info mt-2">ID : inv#<?= $invoice->id ?></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-hover">
                        <tr>
                            <td>Nama Pemesan</td>
                            <td><strong><?= $invoice->nama ?></strong></td>
                        </tr>
                        <tr>
                            <td>Alamat Pemesan</td>
                            <td><strong><?= $invoice->alamat ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><strong><?= $invoice->kota ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td><strong><?= $invoice->kodepos ?></strong></td>
                        </tr>
                        <tr>
                            <td>No. Telf</td>
                            <td><strong><?= $invoice->notelf ?></strong></td>
                        </tr>
                        <tr>
                            <td>Pengiriman</td>
                            <td><strong><?= $invoice->pengiriman ?></strong></td>
                        </tr>
                        <tr>
                            <td>Bank</td>
                            <td><strong><?= $invoice->bank ?></strong></td>
                        </tr>
                        <tr>
                            <td>Bukti Upload</td>
                            <td>
                                <div class="row masonry-grid">
                                    <figure class="masonry-brick">
                                        <a href="<?= base_url() . '/uploads/pembayaran/' . $invoice->buktifoto ?>" class="gallery-item" data-size="700x1000">
                                            <img class="img-fluid" src="<?= base_url() . '/uploads/pembayaran/' . $invoice->buktifoto ?>" alt="">
                                            <div class="overlay">
                                                <div class="overlay-content">
                                                    <div class="inline-block">
                                                        <h4 class="caption-title">Bukti upload</h4>
                                                        <span class="caption-date"><?= $invoice->tgl_pesan ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Catatan</td>
                            <td><strong><?= $invoice->catatan ?></strong></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-left">Nama Barang</th>
                                <th class="text-center">Jumlah Pesanan</th>
                                <th class="text-right">Harga Satuan</th>
                                <th class="text-right">Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php
                            $total = 0;
                            foreach ($pesanan as $pesan) :
                                $subtotal = $pesan->jumlah * $pesan->harga;
                                $total += $subtotal;
                                ?>
                                <tr>
                                    <th>
                                        <?= $i; ?>.
                                    </th>
                                    <td><?= $pesan->namabarang ?></td>
                                    <td class="text-center"><?= $pesan->jumlah ?></td>
                                    <td class="text-right"><?= number_format($pesan->harga, 0, ',', '.') ?></td>
                                    <td class="text-right"><?= number_format($subtotal, 0, ',', '.') ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4" class="text-right">
                                    <strong>
                                        Total :
                                    </strong>
                                </td>
                                <td class="text-right">
                                    <strong>
                                        Rp. <?= number_format($total, 0, ',', '.') ?>,-
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="text-right">
                        <?= anchor('invoice', '<div class="btn btn-sm btn-outline-info mt-3"> Kembali </div>') ?>
                        <?= anchor('invoice/print/' . $invoice->id, '<div class="btn btn-sm btn-outline-success mt-3"> Print </div>') ?>
                    </div>
                </div>

            </div>
            <!-- endforeach -->
        </div>
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <!-- <button class="pswp__button pswp__button--share" title="Share"></button> -->
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <!-- <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button> -->
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>