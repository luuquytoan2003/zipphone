<?php
    require_once 'pdo.php';
    function tk_hang_hoa()
    {
        $sql = "select lo.brand_id, lo.brand_name , count(*)so_luong,min(hh.price)gia_min,max(hh.price)gia_max,avg(hh.price)gia_avg
                from product hh join brand lo on lo.brand_id= hh.brand_id group by lo.brand_id,lo.brand_name ";
        return pdo_query($sql);
    }
    function tk_binh_luan()
    {
        $sql = "select hh.product_id,hh.product_name,count(*)so_luong,min(bl.datetime)cu_nhat,max(bl.datetime)moi_nhat
                    from comment bl join product hh on hh.product_id=bl.product_id group by hh.product_id, hh.product_name having so_luong>0";
        return pdo_query($sql);
    }
    function so_luong_hang(){
        $sql = "select count(*) from product";
        return pdo_query_value($sql);
    }
    function so_luong_user(){
        $sql = "select count(*) from user";
        return pdo_query_value($sql);
    }
    function so_luong_don_hang(){
        $sql = "select count(*) from cart";
        return pdo_query_value($sql);
    }
    function tong_doanh_thu(){
        $sql = "select sum(price_all) as tong from cart";
        return pdo_query_value($sql);
    }

?>