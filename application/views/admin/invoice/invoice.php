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
                                    <th class="text-center"># </th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Invoice</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Kota</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Waktu </th>
                                    <th class="text-center"></th>
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
                                            <div class="relative mrg-top-15">
                                                <?php
                                                    $status = $inv->status;
                                                    if ($status == 0) {
                                                        echo "<span class='status away'></span><span class='pdd-left-20'>Pending</span>";
                                                    } else {
                                                        echo "<span class='status online'></span><span class='pdd-left-20'>Aprove</span>";
                                                    }
                                                    ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mrg-top-5 text-center">
                                                <ul class="portlet-item navbar list-unstyled">
                                                    <li class="dropdown inline-block">
                                                        <a href="" class="btn btn-icon btn-flat dropdown-toggle btn-inverse btn-warning active" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="ei-menu-alt-2"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="<?= base_url(); ?>invoice/detail/<?= $inv->id; ?>">
                                                                    <i class="ei-search-alt pdd-right-10 text-info"></i>
                                                                    <span>Detail</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <?php
                                                                    $status = $inv->status;
                                                                    if ($status == 1) {
                                                                        echo anchor('invoice/print/' . $inv->id, '<i class="ei-printer pdd-right-15 text-success"></i><span>Print</span>');
                                                                    }
                                                                    ?>
                                                            </li>
                                                            <li>
                                                                <a href="" data-toggle="modal" data-target="#deleteModal<?= $inv->id; ?>">
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
                                            <div class="mrg-top-15 text-center">
                                                <a href="<?= base_url(); ?>invoice/detail/<?= $inv->id; ?>">
                                                    inv#<?= $inv->id; ?>
                                                    <a>
                                            </div>
                                        </td>
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
                                                <?php
                                                    $tanggal = $inv->tgl_pesan; ?>
                                                <?= date($tanggal); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="relative mrg-top-15">
                                                <?= $inv->jam_pesan; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="toggle-checkbox toggle-success checkbox-inline toggle-sm mrg-top-20">
                                                <input id="toggle-switch<?= $inv->id; ?>" class="switch-status" <?= status($inv->id); ?> data-id="<?= $inv->id; ?>" data-active="<?= $inv->status; ?>" type="checkbox">
                                                <label for="toggle-switch<?= $inv->id; ?>"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <!-- Modal Delete Invoice -->
                                    <div class="modal fade" id="deleteModal<?= $inv->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 id="exampleModalLabel">
                                                        <p class="text-danger">Apakah anda akan menghapus</p>
                                                        <strong>inv#<?= $inv->id; ?></strong> ?
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-info" type="button" data-dismiss="modal">Tidak</button>
                                                    <a class="btn btn-outline-success" href="<?= base_url(); ?>invoice/delete/<?= $inv->id; ?>">Ya</a>
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