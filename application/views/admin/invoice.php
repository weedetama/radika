<!-- container-fluid -->
<div class="container-fluid">

    <div class="page-title">
        <h4>
            <i class="ti-file text-warning mr-1"></i>Invoice
        </h4>
    </div>

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
                                    <th>Nama Pemesan</th>
                                    <th>Alamat Pemesan</th>
                                    <th>Kota</th>
                                    <!-- <th>Kode Pos</th> -->
                                    <!-- <th>No. Telf</th> -->
                                    <!-- <th>Pengiriman</th> -->
                                    <!-- <th>Bank</th> -->
                                    <!-- <th>Bukti Upload</th> -->
                                    <!-- <th>Catatan</th> -->
                                    <th>Tanggal Pesan</th>
                                    <th>Waktu Pesan </th>
                                    <!-- <th>Batas Bayar</th> -->
                                </tr>
                            </thead>
                            <!-- READ ITEM -->
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($invoice as $inv) : ?>
                                    <tr>
                                        <th>
                                            <div class="relative mrg-top-15">
                                                <?= $i; ?>.
                                            </div>
                                        </th>
                                        <td>
                                            <div class="mrg-top-15">
                                                <?= $inv->nama; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $inv->alamat; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $inv->kota; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $inv->tgl_pesan; ?>
                                            </div>
                                        </td>
                                        <!-- <div>
                                            <div class="relative mrg-top-15">
                                                <?= $inv->jam_pesan; ?>
                                            </div>
                                        </div> -->
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $inv->jam_pesan; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <!-- Modal Delete Barang -->
                                    <!-- <div class="modal fade" id="deleteModal<?= $inv->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 id="exampleModalLabel">
                                                        <p class="text-danger">Apakah anda akan menghapus</p>
                                                        <strong><?= $inv->nama; ?></strong> ?
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-info" type="button" data-dismiss="modal">Tidak</button>
                                                    <a class="btn btn-outline-success" href="<?= base_url(); ?>item/delete/<?= $inv->id; ?>">Ya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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