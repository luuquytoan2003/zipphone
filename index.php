<?php
// require_once './controller/brandController.php';
// require_once './model/brand.php';
// $url = isset($_GET['url']) ? $_GET['url'] : '/';
// switch ($url) {
//     case '/':
//         include './view/user/header.php';
//         $action = isset($_GET['action']) ? $_GET['action'] : 'trangchu';
//         if ($action == 'trangchu') {
//             include './view/user/banner.php';
//             require './view/user/products.php';
//         }
//         if ($action == 'lienhe') {
//             include './view/user/banner.php';
//             require './view/user/lienhe.php';
//         }
//         if ($action == 'gioithieu') {
//             include './view/user/banner.php';
//             require_once './view/user/gioithieu.php';
//         }
//         if ($action == 'dangnhap') {
//             include_once './view/user/dangnhap.php';
//         }
//         if ($action == 'dangki') {
//             include_once './view/user/dangky.php';
//         }

//         include './view/user/footer.php';
//         break;
//     case 'admin':
//         include_once './view/admin/header.php';
//         include_once './view/admin/sidebar.php';
//         $action = isset($_GET['action']) ? $_GET['action'] : 'trangchu';
//         switch ($action) {
//             case 'trangchu':
//                 break;
//             case 'danhmuc':
//                 // indexbrand();
//                 // 
//                 include_once './view/admin/danh_muc/add_brand.php';
//                 break;
//             case 'createBrand':
//                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//                     createbrand();
//                 }
//                 break;
//             case 'deleteBrand':
//                 include_once '';
//                 // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id-brand'])) {
//                 //     deletebrand($_GET['id-brand']);
//                 // }
//                 break;
//             case 'sanpham':
//                 include_once './view/admin/san_pham/san_pham.php';
//                 break;
//             case 'donhang':
//                 include_once './view/admin/don_hang/don_hang.php';
//                 break;
//             default:
//                 # code...
//                 break;
//         }
//         include_once './view/admin/footer.php';
//         break;
//     default:
//         # code...
//         break;
// }
header('location: users/');
?>