<?php
    $con = mysqli_connect("lochost", "root", "", "nhahangsushi");

    if(mysqli_connect_errno()){
        echo "Fail to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_set_charset($con, "utf8");
?>