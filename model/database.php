<?php
    function pdo_get_connection(){
        $severname = "localhost";
    $username = "root";
    $password = "";
    try {
        //code...
        $conn = new PDO("mysql:host=$severname;dbname=duan_1;charset=utf8",$username.$password);// mở kết nối pdo
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// khai báo phương thức và kiểu trả vể kết quả lỗi
        return $conn;
    } catch (\Throwable $th) {
        //throw $th;
        echo "Connection failed: " . $th->getMessage();
    } 
    } 
?>