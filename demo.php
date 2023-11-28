<?php
    include_once '../nhom6DA1/model/cart.php';
$user_id = '5';
$cart = cart_insert($user_id);
echo $cart;
?>