<?php
   $info = select2("info","*","");
?>

<div class="header-wrap-inner style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-top clearfix">
                    <?php
                    echo '
                    <div class="header-top-logo">
                        <a id="logo" href="'.base_url().'"
                            ><img
                                src="'.base_url().'img/logo.png"
                                alt="Dustri"
                                style="width: 50px; height: 50px;"
                        /></a>
                        <ul>
                            <li>
                                <a href="'.$info['facebook'].'" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="'.$info['instagram'].'" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-top-info">
                        <ul>
                            <li class="email">
                                <div class="header-image">
                                    <img src="'.base_url().'themes/'.$THEMES.'/image/blog/blog3.png" alt="image" />
                                </div>
                                <div class="header-text">
                                    <h4><a href="#">EMAIL</a></h4>
                                    <h5>
                                        <a href="mailto:'.$info['email'].'"
                                            ><span
                                                class="__cf_email__"
                                                >'.$info['email'].'</span
                                            ></a
                                        >
                                    </h5>
                                </div>
                            </li>
                            <li class="phone">
                                <div class="header-image">
                                    <img src="'.base_url().'themes/'.$THEMES.'/image/blog/blog23.png" alt="image" />
                                </div>
                                <div class="header-text">
                                    <h4><a href="#">PHONE</a></h4>
                                    <h5><a href="tel:'.$info['phone'].'">'.$info['phone'].'</a></h5>
                                </div>
                            </li>
                            <li class="visit">
                                <div class="header-image">
                                    <img src="'.base_url().'themes/'.$THEMES.'/image/blog/blog24.png" alt="image" />
                                </div>
                                <div class="header-text">
                                    <h4><a href="#">VISIT</a></h4>
                                    <h5><a href="#">'.$info['address'].'</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="style1" id="header">
    <div id="site-header">
        <div class="container">
            <div class="row-desk">
                <div class="col-lg-12">
                    <div class="header-wrap">
                        <div class="mobile-button">
                            <span></span>
                        </div>
                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    {MENU_NAVIGATION}
                                    <!-- {MENU_HEADER} -->
                                </ul>
                            </nav>
                        </div>
                        <div class="header-button">
                            <h3>
                                <a href="{BASE_URL}pages/login" class="hvr-shutter-out-verticall"
                                    >Login</a
                                >
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>