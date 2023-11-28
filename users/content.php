<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="col-lg-12">
                    <p class="sub text-uppercase">Zipphone</p>
                    <h3> <span>Iphone </span> chính hãng<br />Bảo hành <span>trọn đời</span></h3>
                    <h4>Giảm đến 1 triệu đồng cho khách hàng thanh toán lần đầu.</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-money"></i>
                        <h3>Giá tiền hợp lý</h3>
                    </a>
                    <p>Khuyến mãi đến 1 triệu đồng</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-truck"></i>
                        <h3>Miễn phí vận chuyển</h3>
                    </a>
                    <p>Cho đơn hàng có giá trị lớn</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-support"></i>
                        <h3>Hỗ trợ khách hàng</h3>
                    </a>
                    <p>Liên hệ CSKH 24/7</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title">
                        <i class="flaticon-blockchain"></i>
                        <h3>Thanh toán an toàn</h3>
                    </a>
                    <p>Mọi thanh toán đều được bảo mật</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Được xem nhiều nhất</span></h2>

                </div>
            </div>
        </div>

        <div class="row">
            <?php
            foreach (get_3_hot_view() as $pro_view) :
                extract($pro_view);
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="../public/img/product/<?= $image ?>" alt="" />
                            <div class="p_icon">
                                <a href="index.php?action=chitietsp&id_product=<?= $product_id ?>">
                                    <i class="ti-eye" title="Chi tiết sản phẩm"></i>
                                </a>
                                <a href="index.php?action=addgiohang&id_pro=<?= $product_id ?>">
                                    <i class="ti-shopping-cart" title="Thêm vào giỏ hàng"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="index.php?action=chitietsp&id_product=<?= $product_id ?>" class="d-block">
                                <h4 title="Chi tiết sản phẩm"><?= $product_name ?> </h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4"><?= number_format($price, 0, ',', '.') ?>đ</span>
                                <del>14.000.000 đ</del>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!--================ Inspired Product Area =================-->
<section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Gợi ý hôm nay</span></h2>
                    <p>Có thể bạn sẽ cảm thấy thú vị với những sản phẩm của chúng tôi</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            foreach (get8productnew() as $pro_view) :
                extract($pro_view);
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="../public/img/product/<?= $image ?>" alt="" />
                            <div class="p_icon">
                                <a href="index.php?action=chitietsp&id_product=<?= $product_id ?>">
                                    <i class="ti-eye" title="Chi tiết sản phẩm"></i>
                                </a>
                                <a href="index.php?action=addgiohang&id_pro=<?= $product_id ?>">
                                    <i class="ti-shopping-cart" title="Thêm vào giỏ hàng"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="index.php?action=chitietsp&id_product=<?= $product_id ?>" class="d-block">
                                <h4><?= $product_name ?></h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4"><?= number_format($price, 0, ',', '.') ?> đ</span>
                                <del>$35.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!--================ End Inspired Product Area =================-->