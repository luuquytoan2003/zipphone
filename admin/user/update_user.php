<?php
if (isset($user) && is_array($user)) {
    extract($user);
}
?>
<form method="POST" enctype="multipart/form-data" action="index.php?action=update_user">
    <div class="" role="document">
        <div class="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Thông Tin User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_user" value="<?= $user_id ?>">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $user_name ?>" name="user_name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mật khẩu:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $password ?>" name="password">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Hình ảnh: (<?= $image ?>)</label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $email ?>" name="email">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" id="recipient-name" value="<?= $phone_number ?>" name="phone">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $address ?>" name="address">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Role:<?= $role == 1 ? 'Admin' : 'Thành viên' ?></label>
                    <select required class="form-control" name="role" id="">
                        <?php $arr = array('0' => 'Thành Viên', '1' => 'Admin'); ?>
                        <?php foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>" <?php echo $key ==  $role ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="btn_update_user">Update</button>
            </div>
        </div>
    </div>
</form>