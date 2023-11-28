
<form method="POST" enctype="multipart/form-data" action="index.php?action=add_user">
    <div class="" role="document">
        <div class="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm quản trị viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_user" value="<?= $user_id ?>">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="user_name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mật khẩu:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="password">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Hình ảnh: </label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="email">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" id="recipient-name"  name="phone">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="address">
                </div>
                <input type="hidden" name="role" id="" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="btn_add_user">Update</button>
            </div>
        </div>
    </div>
</form>