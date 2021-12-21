<?php   ob_start(); 
        session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home - Travel</title>
    <link rel="stylesheet" type="text/css" href="../styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="../styles/css/Animation.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script>
    window.onscroll = function() {
        scrollFunction(),
            backTop()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
            $(document).ready(function() {
                $(".top_bar").hide('slow');
            });

        } else {
            $(document).ready(function() {
                $(".top_bar").show();
            });
        }
    }

    $(function() {
        $("#tabs").tabs();
    });

    $(document).ready(function() {
        $(".search__item").click(function() {
            $(".input_search").toggle("slow");
        });
    })
    </script>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
    <div id="wrapper">
        <header class="header">
            <div class="top_bar">
                <div class="bar__info">
                    <div class="phone">+84 989 725 994</div>
                    <div class="social">
                        <ul class="social_list">
                            <li class="social_list_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="bar__user">
                    <?php
                    if(isset($_SESSION['taiKhoan'])){?>
                    <div class="bar__user-login">
                        <a href="editProfile.php" title="Thông Tin">
                            <i class="fa fa-user"></i><?php echo $_SESSION['taiKhoan'] ?></a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng Xuất" href="http://localhost/Travel/UIClient/logout.php">
                            <i class="fas fa-sign-out-alt"></i> Đăng Xuất
                        </a>
                    </div>
                    <?php
                    }else{
                        ?>
                    <div class="bar__user-login">
                        <a title="Đăng nhập" href="http://localhost/Travel/UIClient/login.php">
                            <i class="fa fa-user"></i>&ensp; Đăng Nhập
                        </a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng nhập" href="http://localhost/Travel/UIClient/register.php">
                            <i class="fa fa-lock"></i>&ensp; Đăng Ký
                        </a>
                    </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div style="font-family: 'Times New Roman', Times, serif;" class="main_nav">
                <div class="main_nav__logo">
                    <a href="http://localhost/Travel/index.php">
                        <img src="../styles/images/logo.png" alt="logo">Viettravel
                    </a>
                </div>
            </div>
        </header>

        <div class="main">
            <!--slider-->
            <div class="main__slide">
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(../styles/images/Ks10.jpg"></div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1></h1>
                            <h1>Khách Sạn</h1>
                            <div class="button home_slider__button">
                                <div class="button_bcg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_search">
                <div class="main_search__tabs">
                    <ul class="search_tabs__list">
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/index.php">
                                <i class="fas fa-indent"></i></i><span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/location.php">
                                <i class="fas fa-umbrella-beach"></i><span>Địa điểm</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/hotel.php">
                                <i class="fas fa-hotel"></i><span>Khách Sạn</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/typeTourDetail.php">
                                <i class="fas fa-align-left"></i><span>Loại Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/tour.php">
                                <i class="fas fa-torii-gate"></i><span>Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/cart.php"><i class="fas fa-cart-arrow-down"></i>
                                <span>Đặt Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/cartHotel.php"><i class="fas fa-cart-plus"></i>
                                <span>Đặt Khách Sạn</span>
                            </a>
                        </li>
                    </ul>
                    <div id="tabs" class="main_search__tabs">
                        <div style="margin-top:40px;" id="tabs-2" class="tabs_content animated fadeIn">
                            <form action="" method="get" class="search_content">
                                <div class="search_content__item">
                                    <div style=" margin-left:50px; font-size:17px;">Khách Sạn</div>
                                    <input type="text" name="keySearch"
                                        style=" font-family: 'Times New Roman'; font-size:18px; margin-left:50px; width: 900px;"
                                        class="search_content__input"
                                        placeholder="Nhập vào tên khách Sạn hoặc tên địa điểm khách sạn mà bạn muốn tìm kiếm">
                                </div>
                                <button name="btnSearch" style="font-family: 'Times New Roman'; margin-right: 25px;"
                                    class="button search_content__button">Tìm kiếm
                                    <span></span><span></span><span></span>
                                </button>
                            </form>
                            <?php
                                if (isset($_GET['btnSearch'])) {
                                    $keySearch = $_GET['keySearch'];
                                    header("Location:http://localhost/Travel/UIClient/searchHotel.php?key=$keySearch");
                                }
                            ?>
                        </div>
                    </div>
                    <div style="margin-top:0px;" class="tabs_content animated fadeIn">
                        <div style=" margin-top:5px;" class="search_content__item">
                            <form action="http://localhost/Travel/UIClient/hotelPrice.php" method="post"
                                class="search_content">
                                <div class="search_content__item" style="margin-left: 50px;">

                                    <select name="txtPrice" style="
                                        width: 150px;
                                        height: 46px;
                                        border: none;
                                        font-weight: 600;
                                        color: #929191;
                                        font-family: 'Times New Roman';font-size:18px;">
                                        <?php
                                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                                        $sql = "SELECT DISTINCT giaPhongKS FROM khachsan ";
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $row['giaPhongKS'] ?>">
                                            <?= number_format($row['giaPhongKS']) ?> VNĐ</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button type="submit"
                                    style="font-family: 'Times New Roman'; margin-left: 100px; margin-top:-36px"
                                    class="button search_content__button">Lọc
                                    <span></span><span></span><span></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offers">

                <?php
                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        if (isset($_GET['key']))
                            $keySearch = $_GET['key'];
                            $allDong = mysqli_query($conn, "SELECT * FROM diadiem, khachsan WHERE diadiem.idDiaDiem = khachsan.idDiaDiem AND tenKhachSan LIKE '%$keySearch%' OR tenDiaDiem LIKE '%$keySearch%'")->num_rows;
                             echo "<div style='margin-top:50px;' class='box o ffers__box2'> <b style='margin-top:50px; margin:0px 70px; font-size:22px'>Bạn đang tìm thấy <b style='color:red;'>'$allDong'</b> khách sạn với từ khóa <b style='color:red;'>'$keySearch'</b></b> ";
                        //
                        $soDongHT = 4;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $pageTT = ($page - 1) * $soDongHT;
                        $allPage = ceil($allDong / $soDongHT);
                        //
                        $sql = "SELECT * FROM diadiem, khachsan WHERE diadiem.idDiaDiem = khachsan.idDiaDiem AND tenKhachSan LIKE '%$keySearch%' OR tenDiaDiem LIKE '%$keySearch%' LIMIT $soDongHT OFFSET $pageTT";
                        $query = mysqli_query($conn, $sql);
                        while ($row = $query->fetch_assoc()) {
                    ?>
                <div class="offers_grid" style=" position: relative;">
                    <div class="offers_item2">
                        <div class="offers_image f_image">
                            <a
                                href="http://localhost/Travel/UIClient/hotelDetail.php?idKhachSan=<?= $row['idKhachSan']?>">
                                <div class="offers_image_background"
                                    style="background-image:url(../styles/images/<?= $row['hinhAnhKS'] ?>">
                                </div>
                            </a>
                            <div class="offers_name">
                                <a><?= $row['tenDiaDiem'] ?></a>
                            </div>
                        </div>
                        <div class="offers_content">
                            <div class="offers_price"><?= number_format($row['giaPhongKS'])?> Đ</div>
                            <p style="font-size:22px" class="offers_text">Tour <?=$row['tenKhachSan']?></p>
                            <div class="offers_icons">
                                <ul class="offers_icons_list">
                                    <li class="offers_icons_item"><img src="../styles/images/post.png" alt=""></li>
                                    <li class="offers_icons_item"><img src="../styles/images/compass.png" alt="">
                                    </li>
                                    <li class="offers_icons_item"><img src="../styles/images/bicycle.png" alt="">
                                    </li>
                                    <li class="offers_icons_item"><img src="../styles/images/sailboat.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }  ?>
                <div style="margin-left:200px; margin-top: 200px;" class="blog_navigation">
                    <ul>
                        <li class="blog_dot active">
                            <a class="page-link"
                                href="http://localhost/Travel/UIClient/searchHotel.php?key=<?= $keySearch ?>&page=1">Trang
                                đầu</a>
                        </li>
                        <?php
                                    for ($num = 1; $num <= $allPage; $num++) {
                                        if ($num != $page) {
                                            if ($num > $page - 2 && $num < $page + 2) {
                                ?>
                        <li class="blog_dot active">
                            <a class="page-link"
                                href="http://localhost/Travel/UIClient/searchHotel.php?key=<?= $keySearch ?>&page=<?= $num ?>"><?= $num ?>
                            </a>
                        </li>
                        <?php
                                        }
                                    } else {
                                        ?>
                        <li class="blog_dot active">
                            <a class="page-link"
                                href="http://localhost/Travel/UIClient/searchHotel.php?key=<?= $keySearch ?>&page=<?= $num ?>"><?= $num ?>
                            </a>
                        </li>
                        <?php }
                                } ?>
                        <li class="blog_dot active">
                            <a class="page-link"
                                href="http://localhost/Travel/UIClient/searchHotel.php?key=<?= $keySearch ?>&page=<?= $allPage ?>">Trang
                                cuối
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--        Intro-->

        <!--        Intro-->
        <!--        CTA-->
        <!--        Offers-->
        <!--        testmonials-->

    </div>
    <footer class="footer">
        <button onclick="topFunction()" id="back_top" title="Go to top"><i class="fas fa-rocket"></i></button>
        <div class="box footer__box">
            <div class="footer__about">
                <div class="footer__logo">
                    <div class="logo">
                        <a style="font-family: 'Times New Roman', Times, serif;"
                            href="http://localhost/Travel/index.php">
                            <img src="../styles/images/logo.png" alt="">VietTravel
                        </a>
                    </div>
                </div>
                <p class="footer_about__text" style="font-family: 'Times New Roman', Times, serif;">
                    VietTravel tự hào là một đơn vị tiêu biểu trong lĩnh vực tour du lịch đón nhận giải thưởng uy
                    tín
                    nhất dành cho cộng đồng doanh nghiệp Việt Nam.
                </p>
                <ul class="footer_social_list">
                    <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer__blog">
                <div class="footer_title">bản tin</div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2021</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
            </div>
            <div class="footer__tags">
                <div class="footer_title">Tags</div>
                <ul class="tags_list">
                    <li class="tags_item"><a href="#">Miền Bắc</a></li>
                    <li class="tags_item"><a href="#">Miền Trung</a></li>
                    <li class="tags_item"><a href="#">Miền Nam</a></li>
                    <li class="tags_item"><a href="#">Đà Nẵng</a></li>
                    <li class="tags_item"><a href="#">Quảng Nam</a></li>
                    <li class="tags_item"><a href="#">Huế</a></li>
                </ul>
            </div>
            <div class="footer__contact">
                <div class="footer_title">Liên hệ</div>
                <ul class="contact_list">
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact_text">68 Hàm Nghi, Ngô Mây, Quy Nhơn, Bình Định</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-phone-square"></i></div>
                        <div class="contact_text">+84 989 725 994</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact_text">thangitqnu@gmail.com</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-globe-asia"></i></div>
                        <div class="contact_text">www.thangitqnu.tk</div>
                    </li>

                </ul>
            </div>
        </div>
    </footer>

    </div>

</body>
<script src="../styles/js/main_js.js"></script>
<script>
$("#single_item").slick({
    dots: true
});
$("#testimonials").slick({
    dots: false
});
</script>

</html>

<?php ob_end_flush(); ?>