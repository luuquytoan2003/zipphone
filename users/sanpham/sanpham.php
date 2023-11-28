<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Tất cả sản phẩm</h2>
                    <p>Những sản phẩm trong shop đều ở đây hết đó ...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_gap">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">

                <div class=" product_top_barlatest_product_inner">
                    <div class="row">
                            <?php
                                if(is_array($products)){
                                    foreach($products as $product){
                                        extract($product);
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img class="card-img" src="../public/img/product/<?=$image?>" alt="" />
                                        <div class="p_icon">
                                            <a href="index.php?action=chitietsp&id_product=<?=$product_id?>">
                                                <i class="ti-eye" title="Chi tiết sản phẩm"></i>
                                            </a>
                                            <a href="index.php?action=addgiohang&id_pro=<?=$product_id?>">
                                                <i class="ti-shopping-cart" title="Thêm vào giỏ hàng"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4><?=$product_name?></h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4"><?= number_format($price, 0, ',', '.')?></span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }}
                            ?>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Hãng</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Iphone</a>
                                </li>
                                <li>
                                    <a href="#">Samsung</a>
                                </li>
                                <li>
                                    <a href="#">Oppo</a>
                                </li>
                                <li>
                                    <a href="#">Xiaomi</a>
                                </li>
                                <li>
                                    <a href="#">Vivo</a>
                                </li>
                                <li>
                                    <a href="#">Nokia</a>
                                </li>
                                <li>
                                    <a href="#">Realme</a>
                                </li>
                                <li>
                                    <form class="form-inline">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-success btn-sm" type="button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </aside>


                </div>
            </div> -->
        <!-- </div>
    </div>
</section> -->
<!--================End Category Product Area =================-->