<?php
    $info = select2("info","*","");
?>

<div class="header-area header-sticky only-mobile-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header position-relative">
                    <!-- brand logo -->
                    <div class="header__logo top-logo">
                        <a href="{BASE_URL}">
                            <img src="{BASE_URL}img/logo2.png" style="width: 300px; height: 60px;" class="img-fluid" alt="">
                        </a>
                    </div>

                    <?php
                    echo '
                    <div class="header-right flexible-image-slider-wrap">
                        <div class="header-right-inner" id="hidden-icon-wrapper">
                            <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                <div class="swiper-wrapper header-top-info-inner default-color">
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Phone</h6>
                                                <div class="info-sub-title">
                                                    <a href="tel:'.$info['phone'].'" class="hover-style-link">
                                                        '.$info['phone'].'
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-envelope"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Email</h6>
                                                <div class="info-sub-title">
                                                    <a href="mailto:'.$info['email'].'" class="hover-style-link">
                                                        '.$info['email'].'
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-map-marker-alt"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Address</h6>
                                                <div class="info-sub-title">'.$info['address'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="header-social-networks style-icons">
                                <div class="inner">
                                    <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook" href="'.$info['facebook'].'" data-hover="Facebook" target="_blank">
                                        <i class="social-icon fab fa-facebook-f"></i>
                                    </a>
                                    <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram" href="'.$info['instagram'].'" data-hover="Instagram" target="_blank">
                                        <i class="social-icon fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
          
                        <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
     
                        <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                            <a href="javascript:void(0)">
                                <i class="far fa-ellipsis-h-alt"></i>
                            </a>
                        </div>
                    </div>';
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-bottom-inner position-relative">
                        <div class="header-bottom-left-wrap">
                            <!-- navigation menu -->
                            <div class="header__navigation d-none d-xl-block">
                                <nav class="navigation-menu navigation-menu--text_white">
                                    <ul>
                                        {MENU_NAVIGATION}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-bottom-right-wrap">
                            <!-- navigation menu -->
                            <div class="header__navigation d-none d-xl-block">
                                <nav class="navigation-menu navigation-menu--text_white">

                                    <ul>
                                        {MENU_HEADER}
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header-search-form ">
                            <!-- <form action="#" class="search-form-top style-03 ">
                                <input class="search-field" type="text" placeholder="Search…">
                                <button class="search-submit">
                                    <i class="search-btn-icon fa fa-search"></i>
                                </button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>