<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Đơn Hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý Đơn Hàng</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách đơn hàng</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên Người Nhận</th>
                        <th>Thành tiền</th>
                        <th>Thời Gian</th>
                        <th>Phương thức Thanh Toán</th>
                        <th>Trạng Thái Đơn hàng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($list_cart)) {
                        foreach ($list_cart as $cart) {
                            extract($cart);
                    ?>
                            <tr>
                                <td><?= $code ?></td>
                                <td><?= get_user_by_id($user_id)['user_name'] ?></td>
                                <td><?= number_format($price_all) ?></td>
                                <td><?= $date_time ?></td>
                                <td><span class="status completed">
                                        <?php
                                        if ($payment == 0) {
                                            echo "Thanh toán khi nhận hàng";
                                        } else echo 'Chuyển khoản ngân hàng';
                                        ?>
                                    </span></td>
                                <td><span class="status pending">
                                        <?php
                                        if ($role == 0) {
                                            echo 'Chờ xác nhận';
                                        } elseif ($role == 1) {
                                            echo 'Đang xử lí';
                                        } elseif ($role == 2) {
                                            echo 'Đang giao';
                                        } else if ($role == 3) {
                                            echo 'Đã nhận được hàng';
                                        } else if($role == 4) {
                                            echo 'Đã hủy';
                                        } else if($role == 5){
                                            echo 'Yêu cầu hủy đơn';
                                        }
                                        ?>
                                    </span></td>
                                <td>
                                    <a href="index.php?action=edit_cart&id_cart=<?= $cart_id ?>" class="btn-sm btn btn-success">Sửa</a>
                                    <a href="index.php?action=detail_cart&id_cart=<?= $cart_id ?>" class="btn btn-sm btn-danger">Chi tiết</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->