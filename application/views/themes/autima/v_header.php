<?php
    $info = select2("info","*","");
?>

<header class="header_area header_padding">
    <!--header top start-->
    <div class="header_top top_two">
        <div class="container">
            <div class="top_inner">
                <div class="row align-items-center">
                    <?php
                    echo '
                    <div class="col-lg-6 col-md-6">
                        <div class="follow_us">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" target="_blank"><i class="ion-social-whatsapp"></i></a></li>
                                <li><a href="https://instagram.com/'.$info['instagram'].'" target="_blank"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="https://facebook.com/'.$info['facebook'].'" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>';
                    ?>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right pull-right">
                            <ul>
                                <li class="language"><a href="#"><img src="{BASE_URL}themes/{THEMES}/assets/img/logo/language.png" alt="">EN-ID<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="{BASE_URL}themes/{THEMES}/assets/img/logo/language.png" alt=""> English</a></li>
                                        <li><a href="#"><img src="{BASE_URL}themes/{THEMES}/assets/img/logo/language2.png" alt=""> Indonesia</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->
    <!--header middel start-->
    <div class="header_middle middle_two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="{BASE_URL}"><img src="{BASE_URL}img/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="middel_right">
                        <div class="search-container search_two">
                            <form action="{BASE_URL}pages/content/umkm/data" method="get">
                                <div class="search_box">
                                    <input placeholder="Search ..." type="text" name="search" value="<?php echo $this->input->get('search'); ?>">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="{BASE_URL}pages/login"><span class="fa fa-sign-in"></span> Login </a>
                            </div>
                            <div class="header_wishlist">
                                <a href="{BASE_URL}pages/register"><span class="fa fa-edit"></span> Register </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom header_b_three sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu header_position">
                        <nav>
                            <ul>
                                <!-- {MENU_HEADER} -->
                                <!-- {MENU_NAVIGATION} -->
                                <li><a href="{BASE_URL}">Home</a></li>
                                <li><a href="{BASE_URL}pages/content/about/data">About</a></li>
                                <li><a href="{BASE_URL}pages/content/umkm/data">UMKM</a></li>
                                <li><a href="{BASE_URL}pages/content/contact/data"> Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>

<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">

                    <div class="canvas_close">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>


                    <div class="top_right text-right">
                        <ul>
                            <li class="language"><a href="#"><img src="{BASE_URL}themes/{THEMES}/assets/img/logo/language.png" alt="">EN-ID<i class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"><img src="{BASE_URL}themes/{THEMES}/assets/img/logo/language.png" alt=""> English</a></li>
                                    <li><a href="#"><img src="{BASE_URL}themes/{THEMES}/assets/img/logo/language2.png" alt=""> Indonesia</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php
                    echo '
                    <div class="Offcanvas_follow">
                        <label>Follow Us:</label>
                        <ul class="follow_link">
                            <li><a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" target="_blank"><i class="ion-social-whatsapp"></i></a></li>
                            <li><a href="https://instagram.com/'.$info['instagram'].'" target="_blank"><i class="ion-social-instagram"></i></a></li>
                            <li><a href="https://facebook.com/'.$info['facebook'].'" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        </ul>
                    </div>';
                    ?>
                    <div class="search-container">
                        <form action="{BASE_URL}pages/content/umkm/data" method="get">
                            <div class="search_box">
                                <input placeholder="Search ..." type="text" name="search" value="<?php echo $this->input->get('search'); ?>">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <!-- {MENU_HEADER} -->
                            <!-- {MENU_NAVIGATION} -->
                            <li class="menu-item-has-children"><a href="{BASE_URL}">Home</a></li>
                            <li class="menu-item-has-children"><a href="{BASE_URL}pages/content/about/data">About</a></li>
                            <li class="menu-item-has-children"><a href="{BASE_URL}pages/content/umkm/data">UMKM</a></li>
                            <li class="menu-item-has-children"><a href="{BASE_URL}pages/content/contact/data"> Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>