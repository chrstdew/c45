<header class="top-header top-header-bg">
    <div class="container">
        <div class="row align-items-center">
        <?php
            $info = select2("info","*","");
            echo '
            <div class="col-lg-7 col-md-6">
                <div class="top-head-left">
                    <div class="top-contact">
                        <h3>
                            Support By :
                            <a href="tel:'.$info['phone'].'">'.$info['phone'].'</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="top-header-right">
                    <div class="top-header-social">
                        <ul>
                            <li>
                                <a href="'.$info['facebook'].'" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="'.$info['instagram'].'" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>';
        ?> 
        </div>
    </div>
</header>

<div class="navbar-area">
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{BASE_URL}img/logo.png" alt="Logo" style="width: 50px; height: 50px" />
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{BASE_URL}img/logo.png" alt="Logo" style="width: 50px; height: 50px" />
                </a>
                <div
                    class="collapse navbar-collapse mean-menu"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav m-auto">
                        {MENU_NAVIGATION}
                    </ul>
                    <div class="nav-side d-display">
                        <!-- <div class="nav-side-item">
                            <div class="search-box">
                                <i class="bx bx-search"></i>
                            </div>
                        </div> -->
                        <!-- {MENU_HEADER} -->
                        <div class="nav-side-item">
                            <div class="get-btn">
                                <a
                                    href="{BASE_URL}pages/login"
                                    class="default-btn btn-bg-two border-radius-50"
                                    >Login <i class="bx bx-chevron-right"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="in-circle circle-one"></div>
                    <div class="in-circle circle-two"></div>
                    <div class="in-circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                            <div class="search-box">
                                <i class="bx bx-search"></i>
                            </div>
                            <div class="get-btn">
                                <a
                                    href="{BASE_URL}pages/login"
                                    class="default-btn btn-bg-two border-radius-50"
                                    >Login <i class="bx bx-chevron-right"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-close">
                <span class="search-close-line"></span>
                <span class="search-close-line"></span>
            </div>
            <div class="search-form">
                <form>
                    <input
                        type="text"
                        class="input-search"
                        placeholder="Search here..."
                    />
                    <button type="submit"><i class="bx bx-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>