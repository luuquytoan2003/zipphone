<?php
    if(!empty($cart)){
        extract($cart);
    }
?>
  <div class="container-fluid">
        <div>
            <h3 class="alert alert-success">Chi tiết đơn hàng <?= $code ?></h3>
        </div>
        <div class="card bg-light text-dark mb-4 mt-3">
            <div class="card-body">
                <p>Mã hóa đơn: <?= $code ?>
                </p>
                <p>Người đặt: <span class="fw-bold">
                        <?= get_user_by_id($user_id)['user_name'] ?>
                    </span></p>
                <p>Email: <?= get_user_by_id($user_id)['email'] ?></p>
                <p>Địa chỉ nhận hàng: <?= $address ?>
                </p>
                <p>Số điện thoại: 0<?= $phone_number ?></p>
                <p>Ngày đặt: <?= $date_time ?>
                </p>
                <p>Thành tiền: <span class="text-dark font-weight-bold">
                        <?= number_format($price_all) ?>₫
                    </span></p>
                <p>Phương thức thanh toán:
                    <span class="text-primary fw-bold"> <?php if ($payment == 0) {
                                                            echo "Thanh toán khi nhận hàng";
                                                        } else if ($payment == 1) {
                                                            echo "Chuyển khoản ngân hàng";
                                                        } else {
                                                            echo "Không tìm thấy phương thức thanh toán";
                                                        } ?></span>
                </p>
                <p>Trạng thái đơn hàng: <span class="text-warning fw-bold"><?php if ($role == 0) {
                                                                                echo "Đơn hàng mới";
                                                                            } else if ($role == 1) {
                                                                                echo "Đang xử lý";
                                                                            } else if ($role == 2) {
                                                                                echo "Đang giao hàng";
                                                                            } else if ($role == 3) {
                                                                                echo "Đã giao hàng";
                                                                            } else if ($role == 4) {
                                                                                echo "Đã hủy";
                                                                            } else {
                                                                                echo "Lỗi trạng thái";
                                                                            } ?>
                    </span>
                </p>
            </div>
        </div>

        <div class="table-content table-responsive mt-3 mb-3">
            <table class="table">
                <thead>
                    <tr>
                        <th class="jb-product-thumbnail">Hình ảnh</th>
                        <th class="cart-product-name">Sản phẩm</th>
                        <th class="jb-product-price">Đơn giá</th>
                        <th class="jb-product-quantity">Số lượng</th>
                        <th class="jb-product-subtotal">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $cart_detail = get_cartdetail_by_code($code);
                    foreach ($cart_detail as $product) {
                        extract($product);
                    ?>
                        <tr>
                            <td class="jb-product-thumbnail"><img src="../public/img/product/<?= getProductId($product_id)['image'] ?>" alt="Ultraphone Product" width="80px"></img></td>
                            <td class="jb-product-name">
                                <?= getProductId($product_id)['product_name'] ?>
                            </td>
                            <td class="jb-product-price"><span class="amount">
                                    <?= number_format(getProductId($product_id)['price']) ?>₫
                                </span></td>
                            <td class="quantity">
                                <?= $product['quantity'] ?>
                            </td>
                            <td class="product-subtotal"><span class="amount">
                                    <?= number_format($product['total_price']) ?>₫
                                </span></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="btn-function">
            <a href="index.php?action=donhang" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Quay lại
                danh sách</a>
        </div>
    </div>
