<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="page-title">
        <h4>
            <i class="ei-edit mr-1 text-success"></i>
            <?= $title; ?>
        </h4>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="" method="post" class="form-horizontal">
                <input type="hidden" name="id" value="<?= $category['id']; ?>">
                <div class="form-group row">
                    <label for="category" class="col-md-2 font-weight-bold">
                        <div class="mrg-top-10">
                            Nama Kategori
                        </div>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="category" name="category" value="<?= $category['category']; ?>" required>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <a href="<?= base_url('category'); ?>" class="btn btn-outline-info">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-outline-success">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>