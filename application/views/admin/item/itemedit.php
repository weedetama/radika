<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="page-title">
        <h4>
            <i class="ei-edit mr-1 text-success"></i>
            <?= $title; ?>
        </h4>
    </div>
    <?php foreach ($barang as $b) : ?>
        <div class="row">
            <div class="col-md-8">
                <form action="<?= base_url('item/update'); ?>" method="post" enctype="multipart/form-data" role="form" id="form-validation" class="form-horizontal">
                    <input type="hidden" name="id" value="<?= $b->id ?>">
                    <table class="table table-borderless">
                        <!-- Nama Barang -->
                        <div class="form-group row">
                            <label for="nama" class="font-weight-bold col-md-2">
                                <div class="mrg-top-10">
                                    Nama Barang
                                </div>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama barang" value="<?= $b->nama; ?>" required>
                            </div>
                        </div>
                        <!-- Keterangan -->
                        <div class="form-group row">
                            <label for="keterangan" class="font-weight-bold col-md-2">
                                <div class="mrg-top-10">
                                    Keterangan
                                </div>
                            </label>
                            <div class="col-md-10">
                                <textarea class="form-control text-justify" id="keterangan" name="keterangan" rows="3" placeholder="keterangan" required><?= $b->keterangan; ?></textarea>
                            </div>
                        </div>
                        <!-- Kategori -->
                        <div class="form-group row">
                            <label for="kategori" class="font-weight-bold col-md-2">
                                <div class="mrg-top-10">
                                    Kategori
                                </div>
                            </label>
                            <div class="col-md-10">
                                <select name="kategori" id="kategori" class="form-control custom-select">
                                    <?php foreach ($category as $c) : ?>
                                        <?php if ($c->category == $b->kategori) : ?>
                                            <option value="<?= $c->category; ?>" selected><?= $c->category; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $c->category; ?>"><?= $c->category; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Harga -->
                        <div class="form-group row">
                            <label for="harga" class="font-weight-bold col-md-2">
                                <div class="mrg-top-10">
                                    Harga
                                </div>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" value="<?= $b->harga; ?>" required>
                            </div>
                        </div>
                        <!-- Stok -->
                        <div class="form-group row">
                            <label for="stok" class="font-weight-bold col-md-2">
                                <div class="mrg-top-10">
                                    Stok
                                </div>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="stok" name="stok" placeholder="stok" value="<?= $b->stok; ?>" required>
                            </div>
                        </div>
                        <!-- Gambar -->
                    </table>
                    <div class="form-group">
                        <a class=" btn btn-outline-info" href="<?= base_url('item') ?>">Back</a>
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>