<div class="-fluid">
    <?php
    if (is_array($cart)) {
        extract($cart);
    }
    ?>
    <div class=" shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cập nhật hóa đơn</h6>
        </div>
        <div class="card-body">
            <div class="form-addcate">
                <form action="./index.php?action=update_cart" method="post">
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Mã hóa đơn</label>
                        <input type="text" name="id_bill" class="form-control" value="<?= $code ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Người đặt</label>
                        <input type="text" name="user_name" class="form-control" placeholder="Mã sản phẩm" value="<?= get_user_by_id($user_id)['user_name'] ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Địa chỉ nhận hàng</label>
                        <input type="text" name="user_name" class="form-control" placeholder="Mã sản phẩm" value="<?= $address ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Ngày đặt</label>
                        <input type="text" name="order_date" class="form-control" placeholder="Ngày đặt hàng" value="<?= $date_time ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Thành tiền</label>
                        <input type="text" name="total_amount" class="form-control" placeholder="Tổng thành tiền sản phẩm" value="<?= number_format($price_all) ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Phương thức thanh toán</label>
                        <input type="text" name="payment" class="form-control" placeholder="Phương thức thanh toán" value="<?php if ($payment == 0) {
                                                                                                                                echo "Thanh toán khi nhận hàng";
                                                                                                                            } else if ($payment == 1) {
                                                                                                                                echo "Chuyển khoản ngân hàng";
                                                                                                                            } else {
                                                                                                                                echo "Không tìm thấy phương thức thanh toán";
                                                                                                                            }  ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Trạng thái</label>
                        <select required class="form-control" name="status" id="">
                            <option value="0" <?= $role == 0 ? "selected" : "" ?>>Đơn hàng mới</option>
                            <option value="1" <?= $role == 1 ? "selected" : "" ?>>Đang xử lý</option>
                            <option value="2" <?= $role == 2 ? "selected" : "" ?>>Đang giao hàng</option>
                            <option value="3" <?= $role == 3 ? "selected" : "" ?>>Đã giao hàng</option>
                            <option value="4" <?= $role == 4 ? "selected" : "" ?>>Đã hủy</option>
                            <option value="5" <?= $role == 5 ? "selected" : "" ?>>Yêu cầu hủy</option>

                        </select>
                    </div>

                    <div class="wrap-btn">
                        <input type="hidden" name="cart_id" class="form-control" value="<?= $cart_id ?>">
                        <input type="submit" name="btn_update" class="btn btn-success mt-3" value="Cập nhật">
                        <input type="reset" class="btn btn-danger mt-3" value="Nhập lại">
                    </div>
                </form>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
            </div>
            <div class="table-content table-responsive">
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
                        // var_dump($bill);
                        foreach ($cart_detail as $product) {
                            extract($product)
                        ?>
                            <tr>
                                <td class="jb-product-thumbnail"><img src="../public/img/product/<?= getProductId($product_id)['image'] ?>" alt="Ultraphone Product" width="80px"></img></td>
                                <td class="jb-product-name"><a href=""><?= getProductId($product_id)['product_name'] ?></a></td>
                                <td class="jb-product-price"><span class="amount"><?= number_format(getProductId($product_id)['price']) ?> ₫</span></td>
                                <td class="quantity"><?= $quantity ?></td>
                                <td class="product-subtotal"><span class="amount"><?= number_format($total_price) ?>₫</span></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->