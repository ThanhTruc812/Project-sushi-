<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!$email || !$password){
        echo '<script language="javascript">alert("Vui lòng nhập đầy đủ thông tin!");window.location="../login_form.php?p=dn";</script>';
    }
    $password = md5($password);
    $sql = "SELECT * FROM tbl_user WHERE user_email = '$email' AND user_password = '$password'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 0)
    {
        echo '<script language="javascript">alert("Tên đăng nhập/mật khẩu không đúng hoặc tài khoản chưa được kích hoạt !");window.location="../login_form.php?p=dn";</script>';
    }else
    {
    /// Lấy mật khẩu từ database ra
    $row = mysqli_fetch_array($result);

    ////Kiểm tra mật khẩu có trùng khớp không
        if($password != $row['user_password'])
        {
            echo '<script language="javascript">alert("Mật khẩu không đúng!");window.location="../login_form.php?p=dn";</script>';
        }
        
        $_SESSION['user_email'] = $email;
        $_SESSION['user_password'] = $mk;
        //lưu lại thông tin của người đăng nhập để điền vào trang đặt hàng
		echo '<script language="javascript">alert("Đăng nhập thành công!");window.location="../index.php";</script>';
    }



}

?>