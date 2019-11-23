<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header">
            <h5 class="m-0 font-weight-light">Detail Produk</h5>
        </div>
        <div class="card-body">
            <?php foreach ($barang as $b) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/uploads/' . $b->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-hover">
                            <tr>
                                <td>Nama</td>
                                <td><strong><?= $b->nama; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $b->keterangan; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $b->kategori; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $b->stok; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>
                                    <strong>
                                        <div class="btn btn-sm btn-outline-default">
                                            Rp. <?= number_format($b->harga, 0, ',', '.') ?>
                                        </div>
                                    </strong>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>

                                </td>
                            </tr> -->
                        </table>
                        <?= anchor('item', '<div class="btn btn-sm btn-outline-info mt-3"> Kembali </div>') ?>
                        <?= anchor('item/edit/' . $b->id, '<div class="btn btn-sm btn-outline-success mt-3"> Edit </div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>