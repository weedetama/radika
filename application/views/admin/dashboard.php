<div class="container-fluid">
    <div class="row">

        <div class="col-lg-5 col-md-12">
            <!-- Item -->
            <div class="card shadow-lg">
                <div class="card-block">
                    <div class="card-heading">
                        <h4 class="card-title inline-block pdd-top-5">Data Barang</h4>
                        <a href="<?= base_url('item') ?>" class="btn btn-default pull-right no-mrg">Lihat</a>
                    </div>
                    <div class="pdd-horizon-20 pdd-vertical-5">
                        <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                            <table class="table table-lg table-hover">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th>Nama</th>
                                        <th class="text-center">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($barang as $b) : ?>
                                        <tr>
                                            <th>
                                                <div class="relative mrg-top-15">
                                                    <?= $i; ?>.
                                                </div>
                                            </th>
                                            <td>
                                                <div class="mrg-top-15">
                                                    <?php
                                                        $stoks = $b->stok;
                                                        if ($stoks <= 5) { ?>
                                                        <a href="<?= base_url(); ?>item/detail/<?= $b->id; ?>">
                                                            <p class="text-danger"> <strong> <?= $b->nama; ?> </strong> </p>
                                                        <?php } else {  ?>
                                                            <p class="text-primary"> <strong> <?= $b->nama; ?> </strong> </p>
                                                        <?php } ?>
                                                        </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="mrg-top-15">
                                                    <?php
                                                        // $stoks = $b->stok;
                                                        if ($stoks <= 5) { ?>
                                                        <span class="text-danger">
                                                            <b><?= $stoks ?></b>
                                                        </span>
                                                    <?php } else {  ?>
                                                        <span class="text-primary">
                                                            <b><?= $stoks ?></b>
                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item -->

            <!-- category -->
            <div class="card shadow-lg">
                <div class="card-block">
                    <div class="card-heading">
                        <h4 class="card-title inline-block pdd-top-5">Kategori</h4>
                        <a href="<?= base_url('category') ?>" class="btn btn-default pull-right no-mrg">Lihat</a>
                    </div>
                    <div class="pdd-horizon-20 pdd-vertical-5">
                        <div class="overflow-y-auto relative scrollable" style="max-height: 200px">
                            <table class="table table-lg table-hover">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($category as $c) : ?>
                                        <tr>
                                            <th>
                                                <div class="relative mrg-top-15">
                                                    <?= $i; ?>.
                                                </div>
                                            </th>
                                            <td>
                                                <div class="mrg-top-15">
                                                    <?= $c['category']; ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end category -->
        </div>

        <div class="col-lg-7 col-md-12">
            <!-- Transaksi Terbaru -->
            <div class="card shadow-lg">
                <div class="card-heading">
                    <h4 class="card-title inline-block pdd-top-5">Transaksi Terbaru</h4>
                    <a href="<?= base_url('invoice') ?>" class="btn btn-default pull-right no-mrg">Lihat</a>
                </div>
                <div class="pdd-horizon-20 pdd-vertical-5">
                    <div class="overflow-y-auto relative scrollable" style="max-height: 500px">
                        <table class="table table-lg table-hover " id="dt-opt">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Tanggal</th>
                                    <th>Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($invoice as $inv) : ?>
                                    <tr>
                                        <th>
                                            <?= $i; ?>
                                        </th>
                                        <td>
                                            <div class="list-info">
                                                <div class="info">
                                                    <span class="title"> <?= $inv->nama; ?></span>
                                                    <span class="sub-title"> inv#<?= $inv->id; ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mrg-top-10">
                                                <span><?= $inv->tgl_pesan; ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-10">
                                                <?php
                                                    $status = $inv->status;
                                                    if ($status == 0) { ?>
                                                    <span class='status away'></span><span class='pdd-left-20'>Pending</span>
                                                <?php  } else {  ?>
                                                    <span class='status online'></span><span class='pdd-left-20'>Approve</span>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end transaksi -->
        </div>
    </div>
</div>