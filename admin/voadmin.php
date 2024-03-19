<?php
include_once "../admin/models/pdo.php";
include_once "../admin/models/taikhoan.php";

if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
    $user=$_POST['user'];
    $pass=$_POST['pass'];   
    $taikhoan=dangnhap($user,$pass);  
    if(is_array($taikhoan) && $taikhoan['vai_tro']==1){
        $_SESSION['user']=$user;
        header("location:indexx.php");
    }
        
else{
    $thongbao="Sai tên đăng nhập hoặc mật khẩu. Vui lòng nhập lại.";
    include_once "index.php";
} 

}
if(isset($_POST['dangky']) && $_POST['dangky']){
    $email=$_POST['email'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $role=$_POST['role'];
    include_once "../admin/models/taikhoan.php";
    insert_taikhoan($email,$user,$pass,$role);
    $thongbao="alert('Đăng ký thành công')";
    include_once "register.php"; 
}

?>