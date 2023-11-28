<?php
    if(is_array($pro)){
        extract($pro);
    }
?>
<form method="POST" enctype="multipart/form-data" action="index.php?action=updateproduct">
    <div class="" role="document">
        <div class="">
            <div class="modal-body">
                <input type="hidden" value="<?=$product_id?>" name="id_pro">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" id="recipient-name" name="pro_name" value="<?=$product_name?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Ảnh: (<?=$image?>)</label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Giá tiền:</label>
                    <input type="text" class="form-control" id="recipient-name" name="price" value="<?=$price?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Loại:</label>
                    <select name="brand" id="" class="form-control">
                        <?php
                        foreach (getAllbrands() as $brand) {
                            extract($brand) ?>
                            <option value="<?= $brand_id ?>" <?=($brand_id == $pro['brand_id']?'selected':'')?>><?= $brand_name ?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mô tả</label>
                    <input type="text" class="form-control" id="recipient-name" name="des" value="<?=$description?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Chi tiết</label>
                    <input type="text" class="form-control" id="recipient-name" name="detail" value="<?=$detail?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số lượng</label>
                    <input type="text" class="form-control" id="recipient-name" name="quantity"value="<?=$quantity?>">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="btn_update_pro" class="btn btn-primary">Update</button>
            </div>
            <span><?= (isset($MES) && !empty($MES)) ? $MES : '' ?></span>
        </div>
    </div>
</form>