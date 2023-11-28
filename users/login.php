<?php
if (isset($_SESSION['mes'])) {
    $mes = $_SESSION['mes'];
    unset($_SESSION['mes']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../public/css/dangnhap.css">
    <link rel="icon" type="image/x-icon" href="../public/images/logo.jpg">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
</head>

<body>
    <section class="d-flex">
        <div class="img-bg">
            <img src="../public/img/sign.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="index.php?action=login" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user_name">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập" name="login">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="register.php">Đăng Ký</a></p>
                    </div>
                    <div class="input-form">
                        <a style="cursor: pointer;" data-toggle="modal" data-target="#quen-mat-khau">Quên mật khẩu</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!--MODAL thêm danh mục sản phẩm BOOTSTRAP-->
    <div class="modal fade" id="quen-mat-khau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="POST" action="index.php?action=fgpass">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Quên mật khẩu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="recipient-name" name="user_name" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="recipient-name" name="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" id="recipient-name" name="pass2" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span><?=isset($mes)&& !empty($mes)?$mes:''?></span>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <input type="submit" value="Add" class="btn btn-primary" name="btn_brand_create"> -->
                        <button type="submit" class="btn btn-primary" name="btn_forgot_pass">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../public/js/jquery-3.2.1.min.js"></script>
    <script src="../public/js/popper.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/stellar.js"></script>
    <script src="../public/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../public/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../public/vendors/isotope/isotope-min.js"></script>
    <script src="../public/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.ajaxchimp.min.js"></script>
    <script src="../public/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="../public/vendors/counter-up/jquery.counterup.js"></script>
    <script src="../public/js/mail-script.js"></script>
    <script src="../public/js/theme.js"></script>


</body>

</html>