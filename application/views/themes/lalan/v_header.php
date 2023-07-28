<?php
   
?>

<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{BASE_URL}">
                    <img class="logo-light" src="{BASE_URL}img/logo.png" alt="Land Logo" style="width: 70px; height: 50px;" />
                    <img class="logo-dark" src="{BASE_URL}img/logo.png" alt="Land Logo" style="width: 70px; height: 50px;" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-center navbar-left">
                    <!-- Home Menu -->
                    {MENU_NAVIGATION}
                </ul>
                <!-- Module Consultation  -->
                <div class="module module-property pull-left">
                    <a href="{BASE_URL}pages/login" class="btn"><i class="fa fa-sign-in"></i> Login</a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>