<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Bình Luận</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý Bình Luận</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách bình luận</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Mới nhất</th>
                        <th>Cũ nhất</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($list_cmt as $cmt){
                            extract($cmt);
                    ?>
                    <tr>
                        <td><?=$product_name?></td>
                        <td><?=$so_luong?></td>
                        <td><?=$moi_nhat?></td>
                        <td><?=$cu_nhat?></td>
                        <td>
                            <a href="index.php?action=detail_comment&id_product=<?=$product_id?>" class="btn btn-primary status pending">Chi tiết</a>
                        </td>
                    </tr>
                    <?php
                }?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>