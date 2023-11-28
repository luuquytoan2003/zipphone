<main>
    <div class="head-title">
        <div class="left">
            <h1>Thống kê</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thống kê sản phẩm theo thương hiệu</a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3><?=so_luong_don_hang()?></h3>
                <p>Đơn Hàng</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3><?=so_luong_user()?></h3>
                <p>User</p>
            </span>
        </li>
        <li>
            <i class='bx bxl-product-hunt'></i>
            <span class="text">
                <h3><?=so_luong_hang()?></h3>
                <p>sản phẩm</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3><?=number_format(+(tong_doanh_thu()))?>đ</h3>
                <p>Doanh Thu</p>
            </span>
        </li>
    </ul>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Thống kê sản phẩm theo thương hiệu</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thương hiệu</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tks as $tk) {
                        extract($tk);
                    ?>
                        <tr>
                            <td>1</td>
                            <td><?= $brand_name ?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= number_format($gia_max) ?></td>
                            <td><?= number_format($gia_min) ?></td>
                            <td><?= number_format($gia_avg) ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>

    </div>




</main>
<!-- MAIN -->
</section>