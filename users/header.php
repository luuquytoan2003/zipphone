<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../public/img/logo.jpg" type="image/png" />
    <title>Zipphone</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/themify-icons.css">
    <link rel="stylesheet" href="../public/css/flaticon.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <style>
        .pd-wrap {
            padding: 40px 0;
            font-family: 'Poppins', sans-serif;
        }

        .heading-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .sub-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            display: block;
            font-weight: 600;
            color: #2e9ca1;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .heading-section h2 {
            font-size: 32px;
            font-weight: 500;
            padding-top: 10px;
            padding-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }

        .user-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: relative;
            min-width: 80px;
            background-size: 100%;
        }

        .carousel-testimonial .item {
            padding: 30px 10px;
        }

        .quote {
            position: absolute;
            top: -23px;
            color: #2e9da1;
            font-size: 27px;
        }

        .name {
            margin-bottom: 0;
            line-height: 14px;
            font-size: 17px;
            font-weight: 500;
        }

        .position {
            color: #adadad;
            font-size: 14px;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            outline: none;
            height: 25px;
        }

        .owl-nav button svg {
            width: 25px;
            height: 25px;
        }

        .owl-nav button.owl-prev {
            left: 25px;
        }

        .owl-nav button.owl-next {
            right: 25px;
        }

        .owl-nav button span {
            font-size: 45px;
        }

        .product-thumb .item img {
            height: 100px;
        }

        .product-name {
            font-size: 22px;
            font-weight: 500;
            line-height: 22px;
            margin-bottom: 4px;
        }

        .product-price-discount {
            font-size: 22px;
            font-weight: 400;
            padding: 10px 0;
            clear: both;
        }

        .product-price-discount span.line-through {
            text-decoration: line-through;
            margin-left: 10px;
            font-size: 14px;
            vertical-align: middle;
            color: #a5a5a5;
        }

        .display-flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .product-info {
            width: 100%;
        }

        .reviews-counter {
            font-size: 13px;
        }

        .reviews-counter span {
            vertical-align: -2px;
        }

        .rate {
            float: left;
            padding: 0 10px 0 0;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 15px;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 21px;
            color: #ccc;
            margin-bottom: 0;
            line-height: 21px;
        }

        .rate:not(:checked)>label:before {
            content: '\2605';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .product-dtl p {
            font-size: 14px;
            line-height: 24px;
            color: #7a7a7a;
        }

        .product-dtl .form-control {
            font-size: 15px;
        }

        .product-dtl label {
            line-height: 16px;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .product-count {
            margin-top: 15px;
        }

        .product-count .qtyminus,
        .product-count .qtyplus {
            width: 34px;
            height: 34px;
            background: #212529;
            text-align: center;
            font-size: 19px;
            line-height: 36px;
            color: #fff;
            cursor: pointer;
        }

        .product-count .qtyminus {
            border-radius: 3px 0 0 3px;
        }

        .product-count .qtyplus {
            border-radius: 0 3px 3px 0;
        }

        .product-count .qty {
            width: 60px;
            text-align: center;
        }

        .round-black-btn {
            border-radius: 4px;
            background: #212529;
            color: #fff;
            padding: 7px 45px;
            display: inline-block;
            margin-top: 20px;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
        }

        .round-black-btn:hover,
        .round-black-btn:focus {
            background: transparent;
            color: #212529;
            text-decoration: none;
        }

        .product-info-tabs {
            margin-top: 25px;
        }

        .product-info-tabs .nav-tabs {
            border-bottom: 2px solid #d8d8d8;
        }

        .product-info-tabs .nav-tabs .nav-item {
            margin-bottom: 0;
        }

        .product-info-tabs .nav-tabs .nav-link {
            border: none;
            border-bottom: 2px solid transparent;
            color: #323232;
        }

        .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
            border: none;
        }

        .product-info-tabs .nav-tabs .nav-item.show .nav-link,
        .product-info-tabs .nav-tabs .nav-link.active,
        .product-info-tabs .nav-tabs .nav-link.active:hover {
            border: none;
            border-bottom: 2px solid #d8d8d8;
            font-weight: bold;
        }

        .product-info-tabs .tab-content .tab-pane {
            padding: 30px 20px;
            font-size: 15px;
            line-height: 24px;
            color: #7a7a7a;
        }

        .review-form .form-group {
            clear: both;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .review-form .rate {
            float: none;
            display: inline-block;
        }

        .review-heading {
            font-size: 24px;
            font-weight: 600;
            line-height: 24px;
            margin-bottom: 6px;
            text-transform: uppercase;
            color: #000;
        }

        .review-form .form-control {
            font-size: 14px;
        }

        .review-form input.form-control {
            height: 40px;
        }

        .review-form textarea.form-control {
            resize: none;
        }

        .review-form .round-black-btn {
            text-transform: uppercase;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="float-left">
                            <p>Phone: +84 374659924</p>
                            <p>email: zipphonemobile@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="float-right">
                            <div class="right_side">
                                <?php
                                if (isset($_SESSION['user'])) :
                                    extract($_SESSION['user']);
                                ?>
                                    <li><a href="../admin/">
                                            <?php
                                            if ($role == 1) {
                                                echo 'Tới trang quản trị';
                                            }
                                            ?>
                                        </a>
                                    </li>
                                    <li><a href="index.php?action=history">Lịch sử mua hàng</a></li>
                                    <li><a href="index.php?action=logout">Đăng xuất</a></li>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php">
                        <img src="../public/img/logo.jpg" style="height: 60px;" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=sanpham">Sản Phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=gioithieu">giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=lienhe">liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-5 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                    <form class="form-inline" action="index.php?action=sanpham" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search" name="key-search">
                                            <div class="input-group-append">
                                                <button class="btn btn-success btn-sm" type="submit" name="btn-search">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>


                                    <li class="nav-item">
                                        <a href="index.php?action=giohang" class="icons">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">

                                        <?php
                                        if (isset($_SESSION['user'])) {
                                        ?>
                                            <a data-toggle="modal" data-target="#sua-user"><img class="icons " src="../public/img/user/<?= $_SESSION['user']['image'] ?>" alt="" style="width: 30px; height:30px; border-radius: 100%; margin-right: -15px;cursor:pointer;"></a>
                                            <a data-toggle="modal" data-target="#sua-user" class="icons " style="cursor: pointer;"><?= $_SESSION['user']['user_name'] ?></a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="login.php" class="icons">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--MODAL sửa user BOOTSTRAP-->
    <div class="modal fade" id="sua-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="index.php?action=myacc" method="POST" enctype="multipart/form-data">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        }
                        ?>
                        <div class="text-center" style="border-radius: 100%;">
                            <img src="../public/img/user/<?= $image ?>" alt="" style="width: 80px;" />
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?= $user_name ?>" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?= $email ?>" name="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?= $phone_number ?>" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?= $address ?>" name="add">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Hình ảnh:</label>
                            <input type="file" class="form-control" id="recipient-name" value="<?= $address ?>" name=image>
                        </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="btn_update_user" class="btn btn-primary">Lưu lại</button>
    </div>
    </div>
    </div>
    </form>
    </div>
    <!--MODAL sửa sản phẩm BOOTSTRAP-->