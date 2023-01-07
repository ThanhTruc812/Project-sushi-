<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .form-container{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background-color: #eee;
        }

        .form-container form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            background: #fff;
            text-align: center;
            width: 500px;
        }

        .form-container form h3{
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #333;
        }

        .form-container form label{
            float: left;
            margin-left: 10px;
            margin-bottom: 5px;

        }

        .form-container form input,
        .form-container form select{
            width: 100%;
            padding: 10px 15px;
            color: #333;
            font-size: 17px;
            margin: 5px 0;
            background: #eee;
        }

        .form-container form select option{
            background: #fff;
        }

        .form-container form .fix{
            margin-top: 20px;
        }
        
        .form-container form .fix button{
            padding: 15px 20px;
            border-radius: 10px;
            margin: 5px 50px;
            background: #eee;
            font-size: 18px;
            color: #333;
            transform: background .4s;
        }

        .form-container form .fix button:hover{
            background: red;
            border: red;
            color: #fff;
        }

        .form-container form .fix p a{
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="xuli/login.php" method="POST">
            <h3>ĐĂNG NHẬP TÀI KHOẢN KHÁCH HÀNG</h3>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" require placeholder="Enter your email">

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" require placeholder="Enter your password">

            <div class="fix">
                <button type="submit" name="submit" class="signup">Login up</button>
                <p>Don't have an account? <a href="register_form.php">Register</a></p>
            </div>

        </form>
    </div>

    <script>
    function validateform() {
      var email = document.form.email.value;
      var password = document.form.password.value;
      var email_input = document.getElementById('email');
      var password_input = document.getElementById('password');

      if (email == null || email == "") {
        alert("Email không được để trống !");
        return false;
      } else if (password == null || password == "") {
        alert("Password không được để trống !");
        return false;
      }

      var test_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!test_email.test(email_input.value)) {
        alert('Vui lòng nhập địa chỉ email hợp lệ .\nExample@gmail.com');
        email_input.focus;
        return false;
      }

      var test_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
      if (!test_password.test(password_input.value)) {
        alert(' Vui lòng nhập Mật khẩu phải ít nhất 8 kí tự, trong đó phải có ít nhất: 1 chữ hoa, 1 chữ số và 1 ký tự đặc biệt. !');
        password_input.focus;
        return false;
      }
    }
  </script>
</body>
</html>