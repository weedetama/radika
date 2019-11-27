<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="pdd-vertical-5 pdd-horizon-10 border bottom print-invisible">
                <ul class="list-unstyle list-inline text-right">
                    <li class="list-inline-item">
                        <a href="" class="btn text-gray text-hover display-block padding-10 no-mrg-btm" onclick="window.print();">
                            <i class="ti-printer text-info pdd-right-5"></i>
                            <b>Print</b>
                        </a>
                    </li>
                    <!-- <li class="list-inline-item">
                        <a href="#" class="text-gray text-hover display-block padding-10 no-mrg-btm">
                            <i class="fa fa-file-pdf-o text-danger pdd-right-5"></i>
                            <b>Export PDF</b>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="card-body">
                <div class="pdd-horizon-30">
                    <div class="mrg-top-15">
                        <div class="inline-block">
                            <img class="img-responsive" src="<?= base_url(); ?>assets/dist/assets/images/logo/logo.png" alt="">
                            <address class="pdd-left-10 mrg-top-20">
                                <b class="text-dark">PT. Tri Radika Karya</b><br>
                                <!-- <span>9498 Harvard Street</span><br>
                                <span>Fairfield, Chicago Town 06824</span><br>
                                <abbr class="text-dark" title="Phone">Phone:</abbr>
                                <span>(123) 456-7890</span> -->
                            </address>
                        </div>
                        <div class="pull-right">
                            <h2>INVOICE</h2>
                        </div>
                    </div>
                    <div class="row mrg-top-20">
                        <div class="col-md-9 col-sm-9">
                            <h3 class="pdd-left-10 mrg-top-10">Invoice Untuk:</h3>
                            <address class="pdd-left-10 mrg-top-10">
                                <b class="text-dark"><?= $invoice->nama; ?></b><br>
                                <span><?= $invoice->kodepos; ?> <?= $invoice->kota; ?> </span><br>
                                <span><?= $invoice->alamat; ?></span>
                            </address>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="mrg-top-80">
                                <div class="text-dark text-uppercase inline-block"><b>No. Invoice :</b></div>
                                <div class="pull-right"> inv#<?= $invoice->id ?></div>
                            </div>
                            <div class="">
                                <div class="text-dark text-uppercase inline-block"><b>Tanggal :</b></div>
                                <div class="pull-right"><?= $invoice->tgl_pesan ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mrg-top-20">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
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
                                            <td><?= $pesan->jumlah ?></td>
                                            <td><?= number_format($pesan->harga, 0, ',', '.') ?></td>
                                            <td class="text-right"><?= number_format($subtotal, 0, ',', '.') ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="row mrg-top-30">
                                <div class="col-md-12">
                                    <div class="pull-right text-right">
                                        <!-- <p>Sub - Total amount: $2,325</p>
                                        <p>vat (10%) : $232 </p> -->
                                        <hr>
                                        <h3><b>Total :</b> Rp. <?= number_format($total, 0, ',', '.') ?>,-</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mrg-top-30">
                                <div class="col-md-12">
                                    <div class="border top bottom pdd-vertical-20">
                                        <p class="text-opacity"><small>In exceptional circumstances, Financial Services can provide an urgent manually processed special cheque. Note, however, that urgent special cheques should be requested only on an emergency basis as manually produced cheques involve duplication of effort and considerable staff resources. Requests need to be supported by a letter explaining the circumstances to justify the special cheque payment.</small></p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row mrg-vertical-20">
                                <div class="col-md-6">
                                    <img class="img-responsive text-opacity mrg-top-5" width="100" src="<?= base_url(); ?>assets/dist/assets/images/logo/logo.png" alt="">
                                </div>
                                <div class="col-md-6 text-right">
                                    <small><b>Phone:</b> (123) 456-7890</small>
                                    <br>
                                    <small>support@themenate.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>