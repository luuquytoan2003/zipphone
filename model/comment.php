<?php
    require_once 'pdo.php';
    function comment_insert($note,$datetime,$product_id,$user_id){
        $sql = "insert into comment(note,datetime,product_id,user_id) value(?,?,?,?)";
        pdo_execute($sql, $note, $datetime, $product_id, $user_id);
    }
    function comment_update($note, $datetime, $product_id, $user_id, $comment_id){
        $sql ="update comment set note =?, datetime=?,product_id=?,user_id=? where comment_id=?";
        pdo_execute($sql, $note, $datetime, $product_id, $user_id, $comment_id);
    }
    function comment_delete_by_comment_id($comment_id){
        $sql = "delete from comment where comment_id = ?";
        pdo_execute($sql,$comment_id);
    }
    function comment_select_all(){
        $sql = "select * from comment";
        return pdo_query($sql);
    }
    function comment_select_by_product_id($product_id){
        $sql = "select * from comment where product_id = ?";
        return pdo_query($sql,$product_id);
    }
    function comment_select_by_product($product_id){
        $sql = "select c.*,p.product_name from comment c join product p on p.product_id=c.product_id where c.product_id = ? order by datetime desc";
        return pdo_query($sql,$product_id);
    }

?>