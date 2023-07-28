<?php
    $info = select2("info","*","");

    echo '
    <section class="topbar-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-info">
                        <h5>
                            <i class="far fa-envelope"></i>
                            <a
                                href="mailto:'.$info['email'].'"
                                ><span
                                    class="__cf_email__"
                                    >'.$info['email'].'</span
                                ></a
                            >
                        </h5>
                        <h5>
                            <i class="shapro-phone-call"></i>
                            <a href="tel:'.$info['phone'].'">'.$info['phone'].'</a> 
                        </h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="topbar-right">
                        <ul>
                            <li>
                                <a href="https://facebook.com/'.$info['facebook'].'"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/'.$info['instagram'].'"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>';

                        if($this->session->userdata('ei_public')==TRUE){
                            echo '
                            <a href="'.base_url().'pages/session_clear" class="shapro-btn-1"><span>Panel Web</span></a>';
                        }
                        else{
                            echo '
                            <a href="'.base_url().'pages/login" class="shapro-btn-1"><span>Login</span></a>';
                        }

                    echo '
                    </div>
                </div>
            </div>
        </div>
    </section>';
?>

<header class="header-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo-1">
                    <a href="{BASE_URL}"
                        ><img src="{BASE_URL}img/logo2.png" alt="Image" style="width: 300px;"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="menu_1">
                    <div class="menuButton">
                        <a href="#"><i class="fal fa-bars"></i></a>
                    </div>
                    <ul>
                        {MENU_NAVIGATION}
                        <!-- {MENU_HEADER} -->
                        <!-- <li class="current-menu-item menu-item-has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Startup Agency</a></li>
                                <li><a href="index2.html">Crm Software</a></li>
                                <li><a href="index3.html">Marketing Agency</a></li>
                                <li><a href="index4.html">Hr Management</a></li>
                                <li><a href="index5.html">Tech Agency</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-1.html">Portfolio 01</a></li>
                                <li><a href="portfolio-2.html">Portfolio 02</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Portfolio Details</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="portfolio-details-1.html">Details 01</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details-2.html">Details 02</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details-3.html">Details 03</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Service</a>
                            <ul class="sub-menu">
                                <li><a href="services-1.html">Services 01</a></li>
                                <li><a href="services-2.html">Services 02</a></li>
                                <li><a href="single-service.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog Page</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop Products</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <!-- <div class="access_btns">
                        <a href="#" class="src_btn"><i class="far fa-search"></i></a>
                    </div> -->
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><div class="h-border"></div></div>
        </div>
    </div>
</header>

<section class="popup_search_sec">
    <div class="popup_search_overlay"></div>
    <div class="pop_search_background">
        <div class="middle_search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="popup_search_form">
                            <form method="get" action="#">
                                <input
                                    type="search"
                                    name="s"
                                    id="s"
                                    placeholder="Type Words and Hit Enter"
                                />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>