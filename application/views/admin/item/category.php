<!-- container-fluid -->
<div class="container-fluid">

    <div class="page-title">
        <h4>
            <i class="ei-file-text text-warning mr-1"></i>
            <?= $title; ?>
        </h4>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= form_error('category', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-inverse btn-success mb-3" data-toggle="modal" data-target="#InputCategory">
                <i class="ei-file-add"></i> Tambah Kategori</a>

            <!-- TABLE ON CARD -->

            <div class="card">
                <div class="card-block">
                    <div class="table-overflow">
                        <table class="table table-sm table-hover" id="dt-opt">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <!-- READ KATEGORI -->
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($category as $c) : ?>
                                    <tr>
                                        <th>
                                            <div class="relative mrg-top-10">
                                                <?= $i; ?>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="relative mrg-top-10">
                                                <?= $c['category']; ?>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="relative mrg-top-10">
                                                <!-- EDIT CATEGORY -->
                                                <a href="<?= base_url(); ?>category/edit/<?= $c['id']; ?>" class="btn">
                                                    <i class="ei-edit pdd-right-10 text-success"></i>
                                                    <span class="text-secondary">Edit</span>
                                                </a>
                                                <!-- DELETE CATEGORY -->
                                                <a href="" class=" btn" data-toggle="modal" data-target="#deleteModal<?= $c['id']; ?>">
                                                    <i class=" ei-delete pdd-right-10 text-danger"></i>
                                                    <span class="text-secondary">Delete</span>
                                                </a>
                                            </div>
                                        </td>
                                        <!-- END EDIT & DELETE CATEGORY -->
                                    </tr>
                                    <?php $i++; ?>
                                    <!-- Modal Delete Categoy -->
                                    <div class="modal fade" id="deleteModal<?= $c['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 id="exampleModalLabel">
                                                        <p class="text-danger">Apakah anda akan menghapus Kategori</p>
                                                        <strong><?= $c['category']; ?></strong> ?
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-info" type="button" data-dismiss="modal">Tidak</button>
                                                    <a class="btn btn-outline-success" href="<?= base_url(); ?>category/delete/<?= $c['id']; ?>">Ya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Delete Category -->
                                <?php endforeach; ?>
                            </tbody>
                            <!-- END READ -->
                        </table>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- END CARD -->
            </div>
        </div>

    </div>
    <!-- /.container-fluid  -->

    <!-- Modal Input Category-->
    <div class="modal fade" id="InputCategory" tabindex="-1" role="dialog" aria-labelledby="InputCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="InputCategoryModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('category'); ?>" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <table class="table table-borderless">
                            <div class="form-group row">
                                <label for="nama" class="font-weight-bold col-md-2 mrg-top-10">Kategori</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="category" name="category" placeholder="tulis disini..">
                                </div>
                            </div>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-outline-success" id="btn-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Input Category -->