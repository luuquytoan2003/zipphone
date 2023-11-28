<?php
    require_once 'pdo.php';
function check_login($ma_kh, $pass)
{
    $sql = "select *from user where user_name = ? and password = ?";
    return pdo_query_one($sql, $ma_kh, $pass);
}
function get_user_by_user($user){
    $sql = "select * from user where user_name = ? ";
    return pdo_query_one($sql,$user);
}
function user_forgot_pass($pass,$user){
    $sql = "update user set password = ? where user_name= ? ";
    pdo_execute($sql,$pass,$user);
}
function getalluser(){
    $sql ="select * from user";
    return pdo_query($sql);
}
function get_user_by_id($id_user){
    $sql = "select * from user where user_id = ?";
    return pdo_query_one($sql,$id_user);
}
function user_insert($user_name,$image,$email,$phone,$address,$password,$role)
{
    $sql = "insert into user(user_name,image,email,phone_number,address,password,role) value(?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $image, $email, $phone, $address, $password, $role);
}
function register($user_name, $image, $email, $phone, $password)
{
    $sql = "insert into user(user_name,image,email,phone_number,password) value(?,?,?,?,?)";
    pdo_execute($sql, $user_name, $image, $email, $phone, $password);
}

function user_update($user_name, $image,$email,$phone_number,$address,$password,$role,$user_id)
{
    $sql = "update user set user_name = ?, image =?, email = ?,phone_number=?,address=?,password=?,role=? where user_id = ?";
    pdo_execute($sql,$user_name, $image, $email, $phone_number, $address, $password, $role, $user_id);
}
function user_delete($ma_kh)
{
    $sql = "delete from user where user_id = ?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else
        pdo_execute($sql, $ma_kh);
}
function user_check($user){
    $sql ="select count(*) from user where user_name = ? ";
    return pdo_query_value($sql,$user);
}
?>