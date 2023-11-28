<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý User</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý User</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách user</h3>
                <a href="index.php?action=add_user" class="btn btn-primary btn-add-sp">Thêm quản trị viên</a>

            </div>

            <table>
                <thead>
                    <tr>
                        <th>Tên Đăng Nhập</th>
                        <th>Hình ảnh</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Role</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($user as $us) {
                        extract($us);
                    ?>
                        <tr>
                            <td>
                                <?= $user_name ?>
                            </td>
                            <td><img src="../public/img/user/<?= $image ?>" alt=""></td>
                            <td>
                                <?= $email ?>
                            </td>
                            <td><?= $phone_number ?></td>
                            <td><?= $address ?></td>
                            <td>
                                <?php if ($role == 1) {
                                    echo "<span class='badge badge-danger'>Admin</span>";
                                } else {
                                    echo "<span class='badge badge-success'>Thành Viên</span>";
                                } ?>
                            </td>
                            <td>
                                <a href="index.php?action=edit_user&id_user=<?= $user_id ?>" class="btn btn-primary status pending">Sửa</a>
                                <a href="index.php?action=delete_user&id_user=<?= $user_id ?>" class="btn btn-primary status process" onclick="return confirm('bạn chắc chắn xóa chứ!');">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</main>