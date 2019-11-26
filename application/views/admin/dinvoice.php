<div class="container-fluid">
    <div class="card shadow mb-2">
        <div class="card-header">
            <h5 class="m-0 font-weight-light">Detail Invoice</h5>
        </div>
        <div class="card-body">
            <!-- foreach -->
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-hover">
                        <tr>
                            <td>Nama Pemesan</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Alamat Pemesan</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>No. Telf</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Pengiriman</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Bank</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Bukti Upload</td>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <td>Catatan</td>
                            <td><strong></strong></td>
                        </tr>


                    </table>
                    <?= anchor('invoice', '<div class="btn btn-sm btn-outline-info mt-3"> Kembali </div>') ?>
                </div>
                <div class="col-md-4">
                    <tr>
                        <td>Catatan</td>
                        <td><strong></strong></td>
                    </tr>
                </div>
            </div>
            <!-- endforeach -->
        </div>
    </div>
</div>