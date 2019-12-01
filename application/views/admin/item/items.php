<!-- container-fluid -->
<div class="container-fluid">

    <div class="page-title">
        <h4>
            <i class="ti-package text-warning mr-1"></i><?= $title; ?>
        </h4>
    </div>

    <!-- Message Alert -->
    <?= $this->session->flashdata('message'); ?>
    <!-- END Message -->
    <!-- Required -->
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- end required -->

    <a href="" class="btn btn-inverse btn-success mb-3" data-toggle="modal" data-target="#InputBarang"><i class="ei-file-add"></i> Tambah Barang</a>
    <!-- TABLE ON CARD -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border">
                <div class="card-block">
                    <div class="table-overflow">
                        <table class="table table-lg table-hover" id="dt-opt">
                            <thead>
                                <!-- Begin Page Content -->
                                <tr>
                                    <th># </th>
                                    <th class="text-center">Aksi</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <!-- READ ITEM -->
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
                                            <div class="mrg-top-5 text-center">
                                                <ul class="portlet-item navbar list-unstyled">
                                                    <li class="dropdown inline-block">
                                                        <a href="" class="btn btn-icon btn-flat dropdown-toggle btn-inverse btn-warning active" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="ei-menu-alt-2"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="<?= base_url(); ?>item/detail/<?= $b->id; ?>">
                                                                    <i class="ei-search-alt pdd-right-10 text-info"></i>
                                                                    <span>Detail</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="<?= base_url(); ?>item/edit/<?= $b->id; ?>">
                                                                    <i class="ei-edit pdd-right-10 text-success"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="" data-toggle="modal" data-target="#deleteModal<?= $b->id; ?>">
                                                                    <i class=" ei-delete pdd-right-10 text-danger"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mrg-top-15">
                                                <?= $b->nama; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $b->keterangan; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $b->kategori; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="list-info mrg-top-10">
                                                <span class="sub-title"> Rp. </span>
                                                <span class="title"> <?= number_format($b->harga, 0, ',', '.') ?> </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mrg-top-15">
                                                <span class="text-info">
                                                    <b><?= $b->stok; ?></b>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mrg-top-15 list-info">
                                                <img class="thumb-img" src="<?= base_url() . '/uploads/' . $b->gambar ?>" alt="">
                                                <div class="info">
                                                    <span class="sub-title"><?= $b->gambar; ?></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <!-- Modal Delete Barang -->
                                    <div class="modal fade" id="deleteModal<?= $b->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 id="exampleModalLabel">
                                                        <p class="text-danger">Apakah anda akan menghapus</p>
                                                        <strong><?= $b->nama; ?></strong> ?
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-info" type="button" data-dismiss="modal">Tidak</button>
                                                    <a class="btn btn-outline-success" href="<?= base_url(); ?>item/delete/<?= $b->id; ?>">Ya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Delete Barang -->
                                <?php endforeach; ?>
                            </tbody>
                            <!-- END READ -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card -->
</div>
<!-- /.container-fluid  -->

<!-- Modal Input Category-->
<div class="modal fade" id="InputBarang" tabindex="-1" role="dialog" aria-labelledby="InputBarangModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="InputBarangModalLabel">Form Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- FORM INPUT -->
            <form action="<?= base_url('item'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="modal-body">
                    <table class="table table-borderless">
                        <!-- Nama Barang -->
                        <div class="form-group row">
                            <label for="nama" class="font-weight-bold col-md-2">Nama Barang</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama barang">
                            </div>
                        </div>
                        <!-- Keterangan -->
                        <div class="form-group row">
                            <label for="keterangan" class="font-weight-bold col-md-2 mrg-top-10">Keterangan</label>
                            <div class="col-md-10">
                                <!-- <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan"> -->
                                <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="keterangan"></textarea>
                            </div>
                        </div>
                        <!-- Kategori -->
                        <div class="form-group row">
                            <label for="selectize-dropdown" class="font-weight-bold col-md-2 mrg-top-10">Kategori</label>
                            <div class="col-md-10">
                                <select name="kategori" id="selectize-dropdown" class="form-control custom-select">
                                    <option value="" disabled selected>--Pilih Kategori--</option>
                                    <?php foreach ($category as $c) : ?>
                                        <option value="<?= $c->category; ?>"><?= $c->category; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Harga -->
                        <div class="form-group row">
                            <label for="harga" class="font-weight-bold col-md-2 mrg-top-10">Harga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga">
                            </div>
                        </div>
                        <!-- Stok -->
                        <div class="form-group row">
                            <label for="stok" class="font-weight-bold col-md-2 mrg-top-10">Stok</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="stok" name="stok" placeholder="stok">
                            </div>
                        </div>
                        <!-- Gambar -->
                        <div class="form-group row">
                            <label for="gambar" class="font-weight-bold col-md-2">Gambar Produk</label>
                            <div class="col-md-10">
                                <input type="file" name="gambar" id="gambar" class="form-control-file">
                            </div>
                        </div>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
<!-- End Input Category -->