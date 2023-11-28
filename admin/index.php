<?php
    include 'header.php';
    include 'sidebar.php'; 
    include 'nav.php'; 
    include_once '../controller/controller.php';
    include_once '../model/product.php';
    include_once '../model/user.php';
    include_once '../model/brand.php';
    include_once '../model/comment.php';
    include_once '../model/thongke.php';
    include_once '../model/cart.php';
    if(isset($_GET['action'])){
        $url = $_GET['action'];
        switch($url){
            case 'sanpham':
                $pro = getAllproduct();
                renderAD('san_pham/list',['listpro'=>$pro]);
                break;
            case 'createproduct':
                if (isset($_POST['btn_add_pro'])) {
                    $pro_name = $_POST['pro_name'];
                    $images = $_FILES['img']['name'];
                    move_uploaded_file($_FILES['img']['tmp_name'], '../public/img/product/' . $images);
                    $price = $_POST['price'];
                    $brand = $_POST['brand'];
                    $des = $_POST['des'];
                    $detail = $_POST['detail'];
                    $create_date = date('Y-m-d');
                    $quantity = $_POST['quantity'];
                    try {
                        create_product($pro_name, $images, $des, $detail, $create_date, $quantity, $price, $brand);
                        echo "<script>alert('Đã thêm thành công!');window.location='index.php?action=sanpham'</script>";
                    } catch (\Throwable $th) {
                        echo "<script>alert('Thêm thất bại!')</script>";
                    }
                }
                renderAD('san_pham/add_sp');
                break;
            case 'edit_product':
                if(isset($_GET['id_pro'])&& ($_GET['id_pro'])){
                    $pro = getProductId($_GET['id_pro']);
                    renderAD('san_pham/update_sp',['pro'=>$pro]);
                }
                break;
            case 'updateproduct':
                if (isset($_POST['btn_update_pro'])) {
                    $product_id = $_POST['id_pro'];
                    $pro_name = $_POST['pro_name'];
                    if ($_FILES['img']['size'] == 0) {
                        $img = getProductId($_POST['id_pro'])['image'];
                    } else {
                        $img = $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], '../public/img/product/' . $img);
                    }
                    $price = $_POST['price'];
                    $brand = $_POST['brand'];
                    $des = $_POST['des'];
                    $detail = $_POST['detail'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $update_date = date('Y-m-d');
                    $quantity = $_POST['quantity'];
                    try {
                        update_product($pro_name, $img, $des, $detail, $update_date, $quantity, $price, $brand, $product_id);
                        echo "<script>alert('Đã sửa thành công!');window.location='index.php?action=sanpham'</script>";
                    } catch (\Throwable $th) {
                        echo "<script>alert('Sửa thất bại!');</script>";
                    }
                }
                break;
            case 'deleteproduct';
                if (isset($_GET['id_pro']) && $_GET['id_pro']) {
                    hide_product_by_id($_GET['id_pro']);
                    echo "<script>alert('Đã xóa thành công!');window.location='index.php?action=sanpham'</script>";
                }
                break;
            case 'danhmuc':
                $brands = getAllbrands();
                renderAD('danh_muc/list',['list_brand'=>$brands]);
                break;
            case 'createbrand':
            // createbrand();
            // include_once '../admin/danh_muc/add_brand.php';
                if (isset($_POST['btn_brand_create'])) {

                    $brand_name = $_POST['brand_name'];
                    try {
                        create_brand($brand_name);
                        echo "<script>alert('Thêm thành công!');window.location='index.php?action=danhmuc'</script>";
                    } catch (\Throwable $th) {
                        echo "<script>alert('thất bại');</script>";
                    }
                    
                }
                renderAD('danh_muc/add_brand');
                break;
            case 'editBrand':
                if(isset($_GET['id_brand'])){
                    $brand = getBrandId($_GET['id_brand']);
                    renderAD('danh_muc/update_brand',['brand'=>$brand]);
                }
                break;
            case 'update_brand':
                if (isset($_POST['btn_brand_update'])) {
                    $brand_id = $_POST['id_brand'];
                    $brand_name = $_POST['brand_name'];
                    try {
                        //code...
                        brand_update($brand_name, $brand_id);
                        echo "<script>alert('Sửa thành công!');window.location='index.php?action=danhmuc'</script>";
                    } catch (\Throwable $th) {
                        echo "<script>alert('Sửa thất bại');</script>";
                    }
                }
                break;
            case 'deletebrand':
                if (isset($_GET['id_brand']) && $_GET['id_brand']) {
                    delete_productbyIdbrand($_GET['id_brand']);
                    delete_brand($_GET['id_brand']);
                    echo "<script>alert('Đã xóa thành công!');window.location='index.php?action=danhmuc'</script>";
                }
                break;
            case 'user':
                $user = getalluser();
                renderAD('user/list',['user'=>$user]);
                break;
            case 'add_user';
                if(isset($_POST['btn_add_user'])){
                    $user_name = $_POST['user_name'];
                    if($_FILES['img']['size'] == 0){
                        $img = 'user.png';
                    }
                    else{
                        $img = $_FILES['img']['name'];;
                        move_uploaded_file($_FILES['img']['tmp_name'],'../public/img/user/'.$img);
                    }
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $phone = $_POST['phone'];
                    $add = $_POST['address'];
                    $role = $_POST['role'];
                    try {
                        user_insert($user_name,$img,$email,$phone,$add,$pass,$role);
                        echo "<script>alert('Đã thêm thành công!');window.location='index.php?action=user'</script>";
                    } catch (\Throwable $th) {
                        echo "<script>alert('Thất bại!')</script>";
                    }
                }
                renderAD('user/add_user');
                break;
            case 'edit_user':
                if(isset($_GET['id_user'])){
                    $user = get_user_by_id($_GET['id_user']);
                    renderAD('user/update_user',['user'=>$user]);
                }
                break;
            case 'update_user':
                if(isset($_POST['btn_update_user'])){
                    $id_user = $_POST['id_user'];
                    $user_name =$_POST['user_name'];
                    $pass = $_POST['password'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $add = $_POST['address'];
                    $role = $_POST['role'];
                    if($_FILES['img']['size'] == 0){
                        $img = get_user_by_id($id_user)['image'];
                    }
                    else{
                        $img = $_FILES['img']['name'];
                    move_uploaded_file($_FILES['img']['tmp_name'],'../public/img/user/'.$img);
                    }
                    user_update($user_name,$img,$email,$phone,$add,$pass,$role,$id_user);
                    echo "<script>alert('Đã sửa thành công!');window.location='index.php?action=user'</script>";
                }
                break;
            case 'delete_user':
                if(isset($_GET['id_user'])){
                    user_delete($_GET['id_user']);
                    echo "<script>alert('Đã xóa thành công!');window.location='index.php?action=user'</script>";
                }
                break;
            case 'comment':
                $cmt = tk_binh_luan();
                renderAD('binh_luan/list',['list_cmt'=>$cmt]);
                break;
            case 'detail_comment';
                if(isset($_GET['id_product'])){
                    $list_cm_pro = comment_select_by_product($_GET['id_product']);
                    renderAD('binh_luan/detail',['list_cm'=>$list_cm_pro]);
                }
                break;
            case 'deleteBL':
                if(isset($_GET['id_comment'])){
                    comment_delete_by_comment_id($_GET['id_comment']);
                    header('location: index.php?action=comment');
                }
                break;
            case 'donhang':
                $cart = get_all_cart();
                renderAD('don_hang/list',['list_cart' => $cart]);
                break;
            case 'edit_cart':
                if(isset($_GET['id_cart'])){
                    $cart = get_cart_by_id($_GET['id_cart']);
                    renderAD('don_hang/update_cart',['cart'=>$cart]);
                }
                break;
            case 'update_cart':
                if(isset($_POST['btn_update'])){
                    $role = $_POST['status'];
                    $cart_id = $_POST['cart_id'];
                    update_cart($role,$cart_id);
                    echo "<script>alert('Cập nhật thành công!');window.location='index.php?action=donhang'</script>";
                }
                break;
            case 'detail_cart':
                if(isset($_GET['id_cart'])){
                    $cart = get_cart_by_id($_GET['id_cart']);
                    renderAD('don_hang/detail',['cart'=>$cart]);
                }
                break;
            case 'thongke':
                $tk = tk_hang_hoa();
                renderAD('thong_ke/list',['tks'=>$tk]);
                break;
            default:
                include "../view/home/dangnhap.php";
                break;
        }
    }else 
        header('location: index.php?action=sanpham');
?>
<?php include 'footer.php'?>