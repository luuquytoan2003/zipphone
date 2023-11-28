<?php
if (is_array($brand)) {
    extract($brand);
}
?>
<form method="POST" action="index.php?action=update_brand">
    <div class="" role="document">
        <div class="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Danh Mục Sản Phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <input type="hidden" class="form-control"  name="id_brand" value="<?= $brand_id ?>" >
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên danh mục </label>
                    <input type="text" class="form-control" id="recipient-name" name="brand_name" value="<?= $brand_name ?>">
                </div>
            </div>
            <div class="modal-footer">
                <a href="./index.php?action=danhmuc" class="btn btn-secondary" data-dismiss="modal">Return</a>
                <!-- <input type="submit" value="Add" class="btn btn-primary" name="btn_brand_create"> -->
                <button type="submit" class="btn btn-primary" name="btn_brand_update">Add</button>
            </div>
        </div><span><?= isset($mes) ? $mes : '' ?></span>
    </div>

</form>