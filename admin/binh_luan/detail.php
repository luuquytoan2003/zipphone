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
<?php
    if(isset($list_cm)){
        $stt =0;
    }
?>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Tên sản phẩm: <?= getProductId($_GET['id_product'])['product_name'] ?></h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Nội dung</th>
                        <th>Ngày BL</th>
                        <th>Người BL</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_cm as $cmt) {
                        extract($cmt);
                        $stt +=1;
                    ?>
                        <tr>
                            <td><?= $stt ?></td>
                            <td><?= $note ?></td>
                            <td><?= $datetime ?></td>
                            <td><?= get_user_by_id($user_id)['user_name'] ?></td>
                            <td>
                                <a href="index.php?action=deleteBL&id_comment=<?=$comment_id?>" class="btn btn-primary status pending">Xóa</a>
                            </td>
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