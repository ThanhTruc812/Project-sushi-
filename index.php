<?php
        include "xuli/connect.php";
        session_start();
        class Thongtin
        {
            public $home_caption;
            public $home_img;
        }
        
        
        
        $sql = "SELECT home_caption, home_img FROM tbl_home ";
        $result = $con->query($sql);
        $array = [];
        
        if ($result->num_rows > 0) {
            // Load dữ liệu lên website
            while ($row = $result->fetch_assoc()) {
                $thongtin = new Thongtin();
                $thongtin->home_caption = $row["home_caption"];
                $thongtin->home_img = $row["home_img"];
                array_push($array, $thongtin);
            }
        
            
        } else {
            echo "0 results";
        }
        $con->close();
        
        function RenderColunCardMaThue($value)
        {
            ob_start();
         ?>
            <nav class="container">
            
                <div class="home__left">
                    <div class="home__left_title">
                        <h1>Thưởng Thức Các Món 
                            <div>
                                <img src="img/home-sushi-title.png" alt=""> Sushi Ngon
                            </div>
                        </h1>
                    </div>

                    <div class="title">
                        <p> <?= $value->home_caption ?></p>
                    </div>
                    
                    <a href="about.php" class="button">
                        Tìm hiểu ngay <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

               <div class="home__right">
                    <a href="#" class="home__img">
                        <img src='http://localhost:8080/Project-sushi-/<?= $value->home_img ?>'>
                    </a>
               </div>
            </nav>

        <?php
            return ob_get_clean();
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ============= FAVION ======================= -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sushi</title>
    <style>
        .container{
            margin-top: 200px;
        }

        

        .home__left{
            float: left;
            font-family: "Poppins", sans-serif;
            display: block;
            margin-left: 200px;
        }

        .home__left_title{
            text-align: center;
            font-size: 25px;
            column-gap: .5rem;
            text-shadow: 5px 2px 4px grey;
            font-weight: bold;
            
        }

        .home__left_title img{
            width: 40px;
        }
        .home__left .title p{
            width: 350px;
            margin-top: 30px;
        }

        .home__left .button{
            display: inline-flex;
            text-align: center;
            column-gap: .5rem;
            background-color: hsl(19, 64%, 54%);
            padding: 1rem 1.5rem;
            border-radius: 4rem;
            color: #fff;
            font-weight: 500;
            transition: background .3s;
            margin-top: 3rem;
            margin-left: 2.5rem;
            box-shadow: 3px 5px 5px 0px hsl(19, 8%, 55%);
        }

        .home__left .button i{
            font-size: 1.5rem;
            transition: transform .3s;
        }

        .home__left .button:hover{
            background-color: hsl(19, 64%, 52%);
        }

        .home__left .button:hover i{
            transform: translateX(.25rem);
        }


        .container .home__right{
            float: right;
        }

        .container .home__right .home__img img{
            width: 400px;
        }
        
        
    </style>
    
</head>
<body>
    <!-- ============= HEADER ======================= -->
    <header class="header" id="header">
        <nav class="nav">
            <a href="#" class="nav__logo">
                <img src="img/logo.png" alt="logo image">
                Sushi
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="about.php" class="nav__link">About us</a>
                    </li>

                    <li class="nav__item">
                        <a href="popular.php" class="nav__link">Popular</a>
                    </li>

                    <li class="nav__item">
                        <a href="recently.php" class="nav__link">Recently</a>
                    </li>
                    <li class="nav__item" id="account">
                        <a href="account.php" class="nav__link">Acount</a>
                    </li>
                    
                </ul>


                <!-- ======== close ========= -->
                <!-- <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div> -->

            

            </div>
            

            <!-- <div class="nav__button">
                Theme change button
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                Toggle button
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-apps-2-line"></i>
                </div>
            </div> -->
        </nav>
    </header>

    <!-- ============= MAIN ======================= -->
    <main class="main" id="main">
        <section class="home">
                <?php

                foreach ($array as $key => $value) {
                    echo RenderColunCardMaThue($value);
                }
                ?>
        </section>

        <section class="about">

        </section>

        <section class="popular">

        </section>

        <section class="recently">

        </section>

        <section class="account">
        
        </section>
    </main>

    <!-- ============= FOOTER ======================= -->
    <footer class="footer">

    </footer>

    <!-- ============= CROLLREVEAL ======================= -->
    <script src="">
        
    </script>


    <!-- ============= MAIN JS ======================= -->
    <script src="main.js"></script>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
</body>
</html>