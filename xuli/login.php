<?php
include_once('connect.php');
session_start();
if(isset($_POST['dangnhap']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM tbl_user WHERE user_email = '$email' AND user_password = '$password'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 0)
    {
        echo 'Vui lòng nhập đầy đủ email và mật khẩu';
        exit;
    }else
    {
    /// Lấy mật khẩu từ database ra
    $row = mysqli_fetch_array($result);

    ////Kiểm tra mật khẩu có trùng khớp không
    if($password != $row['user_password'])
    {
        echo 'Mật khẩu không đúng. Vui lòng nhập lại!!!!';
        exit;
    }
    $_SESSION['user_email'] = $email;
    echo '<script language="javascript">alert("Bạn đã đăng nhập thành công. Chào mừng bạn đến với nhà hàng SUSHI");window.location="../index.php";</script>';
    }

}

?>