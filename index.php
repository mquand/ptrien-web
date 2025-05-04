<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANGGANG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="css/assets/images/banner_logo/favicon.ico">



</head>

<body>

    <div class="wrapper">
        <header class="header">
            <div class="inner-header container">

                <nav class="header_navbar">
                    <ul class="main-menu">
                        <!-- btn MENU-->

                        <li class="header_navbar-item">
                            <a class="show__modal" style="cursor:pointer" data-modal="modal1">&#9776;&ensp; Menu</a>
                        </li>

                        <!-- search  -->

                        <li class="header_navbar-item">
                            <a class="show__modal" style="cursor:pointer" data-modal="modal2">
                                <i class="fa-solid fa-magnifying-glass"></i> &ensp;
                                Search</a>
                        </li>
                    </ul>



                    <!--tieu de -->
                    <a href="index.php" id="logo">GANGGANG</a>

                    <ul class="main-menu">
                        <li class="header_navbar-item">
                            <a style="cursor:pointer" class="show__modal" data-modal="modal3">Contact Us</a>
                        </li>
                        <!--  <li class="header_navbar-item"><a href="">thông báo</a></li>-->
                        <li>
                            <?php
                            if (isset($_SESSION['login_userName'])) {
                                echo "
                                <li
                                class='header_navbar-item'><a style='cursor:pointer' class='show__modal' data-modal='modal4' > Welcome <b> {$_SESSION['login_userName']} </b' </a>
                                </li>
                                ";
                                // echo "Xin chao <b> {$_SESSION["login_userName"]} </b";
                            } else {
                                echo "
                                    <li
                                        class='header_navbar-item'><a style='cursor:pointer' class='show__modal' data-modal='modal4' >MyGG</a>
                                    </li>
                                ";
                            }
                            ?>

                        </li>
                    </ul>

                </nav>
            </div>

        </header>
    </div>



    <!--

    modal
-->
    <!--MODAL MENU-->
    <div id="modal1" class="modal hide ">
        <div class="modal__overlay">
            <div class="modal__body">
                <div class="modal__inner">



                    <div class="overlay_menu">

                        <div style="cursor: pointer;" class="close_tagmenu">
                            <a class="close_modal--btn">
                                <i class="fa-solid fa-xmark"></i>&ensp;<span>Close</span> </a>
                        </div>

                        <div class="  overlay_menu--content  ">
                            <ul class="menu-hind">
                                <li class="menu_list-item"> <a href="products_page.php">New</a></li>
                                <li class="menu_list-item"><a href="products_page.php">Nike</a></li>
                                <li class="menu_list-item"><a href="">Asic</a></li>
                                <li class="menu_list-item"> <a href="">Puma</a></li>
                                <li class="menu_list-item"><a href="">Adidas</a></li>
                                <li class="menu_list-item"> <a href="">Reebok</a></li>
                                <li class="menu_list-item"><a href="">Converse</a></li>
                                <li class="menu_list-item"><a href="">Skechers</a></li>
                                <li class="menu_list-item"><a href="">New Balance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MOdal SEARCH-->
    <div id="modal2" class="modal hide ">
        <div class="modal__overlay">
            <div class="modal__body">
                <div class="modal__inner">
                    <div class="overlay_search">
                        <div class="header_search">

                            <div class="  header_search--box  ">
                                <a class="header_search--icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <input class="header_search--input" type="text" placeholder="Search.." name="search">
                            </div>

                            <div class="close_tagsearch">
                                <a style="cursor: pointer;" class="close_modal--btn">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </div>
                        </div>
                        <div class="search_content">
                            <div class="search_content--left">

                            </div>
                            <div class="search_content--right">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MOdal LOGIN-->
    <div id="modal4" class="modal hide ">
        <div class="modal__overlay">
            <div class="modal__body">
                <div class="modal__inner">
                    <div class="overlay_login">
                        <div class="header_login">
                            <div class="header_login--title">
                                <span>Thông tin xác nhận</span>
                            </div>
                            <div class="close_taglogin">
                                <a style="cursor: pointer;" class="close_modal--btn">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </div>
                        </div>
                        
                        <?php
                        if (isset($_SESSION['login_userName'])) {
                            echo "
                                    <div class='login_content'> 
                                        <div class='login_content--title' id='cart'>
                                            <div class='head-mygg'><p>Yêu thích</p>
                                        </div>
                                        <div id='cartItem'>Your cart is empty</div>
                                            <div class='foot'>
                                                <h3>Total</h3>
                                                <h2 id='total'> 0.00đ</h2>
                                            </div>               
                                        </div>
                                    </div>
                                    <button class='header_navbar-item'><a style='cursor:pointer' class='show__modal' data-modal='modal4' ><a href='log_out.php'>log out</a></a></button>
                                ";
                        } else {
                            echo "
                                <div class='login_content'>
                                    <form class='form-login' action='login_signup.php' method='post'>
                                        <div class='login_content--title'>
                                            <span>Tôi đã có tài khoản</span>
                                        </div>
                                        <div class='form_login'>
                                            <span> Tên đăng nhập*</span><br>
                                            <input class='login' type='text' id='username' name='username' required>
                                        </div>
                                        <div class='form_login'>
                                            <span>Mật khẩu*</span><br>
                                            <input class='login' type='password' id='password' name='password' required>
                                        </div>
                                        <div class='form_login'>
                                            <input type='submit' value='Đăng Nhập' id='btn-login' name='login'>
                                        </div>
                                    </form>
                                </div>
                                <div class='login_footer'>
                                <div class='login_footer--title'>
                                    <span>Tôi Không có tài khoản</span>
                                </div>
                                <div class='login_footer--text'>
                                    <span>Tận hưởng nhiều lợi ích và trải nghiệm phong phú hơn bằng cách tạo tài
                                        khoản cá nhân</span>
                                </div>
                                <div class='login_footer--content'>
                                    <button><a href='sign_up.html' id='btn-signUp'>Tạo tài khoản cho riêng
                                            mình</a></button>
                                </div>
    
                            </div>
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MOdal CONTACT-->
    <div id="modal3" class="modal hide ">
        <div class="modal__overlay">
            <div class="modal__body">
                <div class="modal__inner">
                    <div class="overlay_contact">
                        <div class="overlay_contact--header">
                            <div class="overlay_contact--title">
                                <span>Liên hệ với chúng tôi</span>
                            </div>
                            <div class="close_tagcontact">
                                <a style="cursor: pointer;" class="close_modal--btn">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </div>
                        </div>
                        <div class="overlay_contact--content">
                            <ul class="contact_list-item">
                                <li class="contact_list--title">
                                    <span>Hãy cho chúng tôi biết có thể làm gì để giúp bạn.</span>
                                </li>
                                <li class="contact_list"><a>
                                        <i class="fa-solid fa-location-dot"></i>
                                        384 Cổ Nhuế - Q.Bắc Từ Liêm - Hà Nội Việt Nam</a>
                                </li>
                                <li class="contact_list"><a>
                                        <i class="fa-solid fa-phone"></i>
                                        +84 09469668119</a>
                                </li>
                                <li class="contact_list"><a>
                                        <i class="fa-regular fa-envelope"></i>
                                        doanquan087@gmail.com </a>
                                </li>
                                <li class="contact_list"><a href="https://www.instagram.com/qr/" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                        Instagram </a>
                                </li>
                                <li class="contact_list"><a href="https://www.facebook.com/profile.php?id=100011088480990&mibextid=2JQ9oc" target="_blank">
                                        <i class="fa-brands fa-facebook"></i>
                                        Facebook </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Content Page-->

    <div class="content ">
        <div class="banner">
            <div class="banner1">
                <div class="content_banner">
                    <div class="banner_title">
                        <span><a href="products_page.php">Mẫu sản phẩm mới nhất ra mắt năm 2023</a></span>
                    </div>
                    <div class="center-button">
                        <button><a href="products_page.php">Khám phá thêm</a> </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner">
            <div class="banner2">
                <div class="content_banner">
                    <div class="banner_title">
                        <span><a href="products_page.php"> Sản phẩm bán chạy nhất tháng 12</a></span>
                    </div>
                    <div class="center-button">
                        <button><a href="product1_detail.php">Khám phá thêm</a> </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="banner3">
                <div class="content_banner">
                    <div class="banner_title">
                        <span><a href="#"> Chuẩn bị ra mắt tháng 1 năm 2024</a></span>
                    </div>
                    <div class="center-button">
                        <button><a href="#">Khám phá thêm</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer page-->
    <footer>
        <div class="footer">
            <div class="title_footer">
                <div class="footer_row">
                    <h3 class="footer_heading">Hỗ trợ</h3>
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="" class="footer-link">Câu hỏi thường gặp</a>
                            <a href="" class="footer-link">Chăm sóc sản phẩm</a>
                            <a href="" class="footer-link">Cửa hàng</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_row">
                    <h3 class="footer_heading">Dịch vụ</h3>
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="" class="footer-link">Dịch vụ bảo dưỡng</a>
                            <a href="" class="footer-link">Dịch vụ cá nhân hóa</a>
                            <a href="" class="footer-link">Ứng dụng</a>
                        </li>

                    </ul>
                </div>
                <div class="footer_row">
                    <h3 class="footer_heading">Thông tin</h3>
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="" class="footer-link">Tin mới nhất</a>
                            <a href="" class="footer-link">Nghề nghiệp</a>
                            <a href="" class="footer-link">Nghệ thuật</a>
                        </li>

                    </ul>
                </div>
                <div class="footer_row">
                    <h3 class="footer_heading">Theo dõi</h3>
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="" class="footer-link">Facebook</a>
                            <a href="" class="footer-link">Instagram</a>
                            <a href="" class="footer-link">Locket</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="logo_footer">
                <div class="logo_footer-name">
                    <span class="logo_footer-text">Việt Nam</span>
                    <span class="logo_footer-text"></span>
                    <span class="logo_footer-text"></span>
                    <span class="logo_footer-text">Pháp lý & quyền riêng tư</span>

                </div>
                <div class="logo_footer-linklogo">
                    <a href="index.php">GANGGANG</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- script-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="app.js"></script>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('header').addClass('sticky');
                } else {
                    $('header').removeClass('sticky');

                }
            });
        });
    </script>


    <script src="JS/app.js"></script>


</body>

</html>