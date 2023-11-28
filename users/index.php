<?php
    session_start();
    ob_start();
    include_once '../users/header.php';
    require_once '../model/user.php';
    require_once '../model/brand.php';
    require_once '../model/cart.php';
    require_once '../model/comment.php';
    require_once '../model/product.php';
    require_once '../controller/controller.php';
    if(isset($_GET['action'])&& ($_GET['action']!='')){
        $act = $_GET['action'];
        switch($act){
            case 'login':
                if(isset($_POST['login']) && $_POST['login']){
                    $user_name = $_POST['user_name'];
                    $pass = $_POST['pass'];
                    $user = check_login($user_name,$pass);
                    if(is_array($user)){
                        $_SESSION['user']= $user;
                        echo '<script>alert("Đăng nhập thành công!");window.location="index.php";</script>';    
                    }
                    else{
                        echo '<script>alert("Tài khoản sai hoặc không tồn tại!"); window.location="login.php";</script>';
                    }
                }
                
                break;
            case 'fgpass':
                if(isset($_POST['btn_forgot_pass'])){
                    $user = $_POST['user_name'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $check_user = get_user_by_user($user);
                    if(!empty($check_user)){   
                        if($pass1 != $pass2){
                            echo '<script>alert("Nhập mật khẩu không chính xác"); window.location="login.php";</script>';
                        }
                        else{
                            try {
                                user_forgot_pass($pass2,$user);
                                echo '<script>alert("Đổi mật khẩu thành công! vui lòng đăng nhập"); window.location="login.php";</script>';   
                            } catch (\Throwable $th) {
                                echo '<script>alert("Đổi mật khẩu thất bại"); window.location="login.php";</script>';
                            }
                        }
                    }else{
                        echo '<script>alert("Tài khoản không tồn tại"); window.location="login.php";</script>';
                    }
                    
                }
                break;
            case 'logout':
                session_destroy();
                header('Location: index.php');
                break;
            case 'register':
                if(isset($_POST['btn-register'])&&$_POST['btn-register']){
                    $user_name = $_POST['user_name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $img = 'user.png';
                    if(user_check($user_name) == 1){
                        echo '<script>alert("Tên đăng nhập đã tồn tại"); window.location="register.php";</script>';
                    }else{
                        if($pass1 == $pass2){
                            register($user_name,$img,$email,$phone,$pass2);
                            echo '<script>alert("Đăng kí thành công! Đến trang đăng nhập");window.location="login.php";</script>';    
                        }
                        else{
                            echo '<script>alert("Mật khẩu không trùng khớp"); window.location="register.php";</script>';
                        }
                    }
                }
                break;
            case 'myacc':
                if(isset($_POST['btn_update_user'])){
                    $user_name = $_POST['user_name'];
                    $email = $_POST['email'];
                    if ($_FILES['img']['size'] == 0) {
                        $img = $_SESSION['user']['image'];
                    } else {
                        $img = $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], '../public/img/user/' . $img);
                    }
                    $phone = $_POST['phone'];
                    $add = $_POST['add'];
                    $role = $_SESSION['user']['role'];
                    $pass = $_SESSION['user']['password'];
                    try {
                        user_update($user_name,$img,$email,$phone,$add,$pass,$role,$_SESSION['user']['user_id']);
                        $_SESSION['user'] = get_user_by_id($_SESSION['user']['user_id']);
                        echo '<script>alert("Cập nhật thành công");window.location="index.php";</script>';    
                    } catch (\Throwable $th) {
                        echo '<script>alert("Lỗi");</script>';   
                    }
                }
                break;
            case 'addgiohang':
                if(!isset($_SESSION['user'])){
                    echo '<script>alert("Đăng nhập để tiếp tục");window.location="login.php";</script>';    
                }
                else{
                    if (!isset($_SESSION['cart'])) {
                        $_SESSION['cart'] = array();
                    }
                    if(isset($_POST['add_to_cart'])||isset($_GET['id_pro'])){
                        $product_id = isset($_POST['product_id'])?$_POST['product_id']:$_GET['id_pro'];
                        $quantity = isset($_POST['quantity'])?$_POST['quantity']:'1';
                        $date = date('Y-d-m');
                        if(isset($_SESSION['cart'][$product_id])){
                            if(($_SESSION['cart'][$product_id]['quantity']+$quantity)>3){
                            }
                            else{
                            $_SESSION['cart'][$product_id]['quantity'] +=$quantity;
                            $_SESSION['cart'][$product_id]['total_price'] = $_SESSION['cart'][$product_id]['price'] * $_SESSION['cart'][$product_id]['quantity'];
                            }
                        }
                        else{
                            $product = getProductId($product_id);
                            $_SESSION['cart'][$product_id] =[
                                'product_name' => $product['product_name'],
                                'price' => $product['price'],
                                'image' => $product['image'],
                                'cart_id' => $cart_id,
                                'quantity' => $quantity,
                                'total_price' => $product['price'] * $quantity,
                                'date' => $date
                            ];
                            
                        }
                    }
                    header('location: index.php?action=giohang');
                }
                break;
            case 'cong_cart':
                if(isset($_GET['id_pro'])){
                    $id_product=$_GET['id_pro'];
                    if(isset($_SESSION['cart'][$id_product])){
                        
                        if($_SESSION['cart'][$id_product]['quantity'] < 3 ){
                        $_SESSION['cart'][$id_product]['quantity']+=1;
                        $_SESSION['cart'][$id_product]['total_price'] = $_SESSION['cart'][$id_product]['quantity'] * $_SESSION['cart'][$id_product]['price'];
                        }
                        header('location: index.php?action=giohang');
                    }
                    
                }
                break;
            case 'tru_cart':
                if (isset($_GET['id_pro'])) {
                    $id_product = $_GET['id_pro'];
                    if (isset($_SESSION['cart'][$id_product])) {
                        if($_SESSION['cart'][$id_product]['quantity'] <= 3 && $_SESSION['cart'][$id_product]['quantity'] >= 0){
                        $_SESSION['cart'][$id_product]['quantity'] -= 1;
                        $_SESSION['cart'][$id_product]['total_price'] = $_SESSION['cart'][$id_product]['quantity'] * $_SESSION['cart'][$id_product]['price'];
                        }
                        if($_SESSION['cart'][$id_product]['quantity'] == 0){
                            unset($_SESSION['cart'][$id_product]);
                        }
                        header('location: index.php?action=giohang');
                    }
                }
                break;
            case 'delete_cart':
                if(isset($_GET['id'])){
                    unset($_SESSION['cart'][$_GET['id']]);
                    header('location: index.php?action=giohang');
                }
                break;
            case 'giohang':
                include_once '../users/giohang/giohang.php';
                break;
            case 'thanhtoan':
                if(isset($_POST['btn_thanhtoan'])){
                    $id_user = $_SESSION['user']['user_id'];
                    $randomNum = substr(str_shuffle("1234567890abcdeghikxyzABCDEGHIKXYZ"), 0, 5);
                    $code = $randomNum;
                    foreach(get_all_cart() as $cart){
                        if($cart['code'] == $code){
                            $code = substr(str_shuffle("1234567890abcdeghikxyzABCDEGHIKXYZ"), 0, 5);
                        }
                    }
                    $date = date('Y-m-d H:s:i');
                    $note = !empty($_POST['message'])?$_POST['message']:'';
                    $phone = $_POST['number'];
                    $add = $_POST['add1'];
                    $tong_tien = 50000;
                    foreach($_SESSION['cart'] as $product ){
                        $tong_tien += $product['total_price'];
                    }
                    $payment = $_POST['selector'];
                    cart_insert($code,$phone,$add,$id_user,$tong_tien,$note,$date,$payment);
                    foreach($_SESSION['cart'] as $product_id => $product){
                        extract($product);
                        product_update_quantity($quantity,$product_id);
                        createCartDetail($product_id,$code,$quantity,$total_price);
                    }
                    unset($_SESSION['cart']);

                    header('location: index.php?action=history');
                }
                include_once '../users/giohang/thanhtoan.php';
                break;
            case 'history':
                include_once '../users/history.php';
                break;
            case 'huydon':
                if(isset($_GET['id_cart'])){
                    $role = 5;
                    update_cart($role,$_GET['id_cart']);
                    header('location: index.php?action=history');
                }
                break;
            case 'lienhe':
                include_once '../users/lienhe.php';
                break;
            case 'sanpham':
                $brands = getAllbrands();
                if(isset($_POST['btn-search'])){
                    $products = product_select_keyword($_POST['key-search']);
                }else if(isset($_GET['id_brand'])&&($_GET['id_brand'])){
                    $products = get_pro_by_brand($_GET['id_brand']);
                }else{
                    $products = getAllproduct();
                }
                include_once '../users/sanpham/sanpham.php';
                include_once '../users/sanpham/brand_sp.php';
                break;
            case 'chitietsp':

                if(isset($_GET['id_product'])){
                    $product = getProductId($_GET['id_product']);
                    product_update_view($_GET['id_product']);
                }
                 
                renderUS('sanpham/sanphamct',['product'=>$product]);
                break;
            case 'comment':
                if (isset($_SESSION['user'])) {
                    if (isset($_POST['btn_gui'])) {
                        $noi_dung = $_POST['note'];
                        $ngay_bl = date_format(date_create(), "Y/m/d");
                        $ma_kh = $_SESSION['user']['user_id'];
                        $ma_hh = $_POST['id_product'];
                        try {
                            comment_insert($noi_dung, $ngay_bl, $ma_hh, $ma_kh);
                            header('location: index.php?action=chitietsp&id_product='.$ma_hh) ;
                        } catch (\Throwable $th) {
                            echo '<script>alert("haxx");</script>';    
                        }
                    }
                } else {
                    echo '<script>alert("Đăng nhập để tiếp tục");window.location="login.php";</script>';    
                }
                break;
            case 'gioithieu':
                include_once '../users/gioithieu.php';
                break;
            case 'tttk':
                include_once '../users/tttk.php';
                break;
            default:
                include_once '../users/content.php';
        }
    }
    else{
    include_once '../users/content.php';
    }
    include_once '../users/footer.php';
    ob_end_flush();
