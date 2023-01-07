

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

        a{
            text-decoration: none;
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
            margin-top: 50px;
        }
        
        .form-container form .fix button{
            padding: 15px 20px;
            border-radius: 10px;
            margin: 0 50px;
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
 
    </style>
</head>
<body>
    <div class="form-container">
        <form action="xuli/register.php" method="POST" onSubmit="return validate(this)">
            <h3>ĐĂNG KÍ TÀI KHOẢN KHÁCH HANG</h3>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" require placeholder="Enter your email">


            <label for="password"><b>Password</b></label>
            <input type="password" name="password" require placeholder="Enter your password">

            <label for="fullname"><b>Fullname</b></label>
            <input type="text" name="fullname" require placeholder="Enter your fullname">

            <label for="gender"><b>Gender</b></label>
            <select name="gender" id="gender">
                <option value="">Chưa xác định</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>

            <label for="phone"><b>Telephone</b></label>
            <input type="text" name="telephone" require placeholder="Enter your telephone">

            <label for="address"><b>Address</b></label>
            <input type="text" name="address" require placeholder="Enter your address">
            <label>
            <input type="checkbox" checked="checked" name="remember" id="remember"><p>Remember me</p> 
            </label>

            <div class="fix">
                <button type="button" class="cannel"><a href="login_form.php">Cannel</a></button>
                <button type="submit" name="submit" class="signup">Sign Up</button>
            </div>

        </form>
    </div>

        

      
  </script>
</body>
</html>