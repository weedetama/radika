<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header">
            <h5 class="m-0 font-weight-light">Detail Invoice | inv#<?= $invoice->id ?></h5>
        </div>
        <div class="card-body">
            <div class="row">
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
                </div>
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
                                <img class="thumb-img" src="<?= base_url() . '/uploads/pembayaran/' . $invoice->buktifoto ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Catatan</td>
                            <td><strong><?= $invoice->catatan ?></strong></td>
                        </tr>
                    </table>
                    <?= anchor('invoice', '<div class="btn btn-sm btn-outline-info mt-3"> Kembali </div>') ?>
                </div>
            </div>
            <!-- endforeach -->
        </div>
    </div>
</div>