<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
    $this->load->view("themes/v_title");
    $this->load->view("themes/$THEMES/v_head"); 
    $this->load->view("themes/assets/v_head",$ASSETS);
  ?>
  </head>
  <body>
  {MESSAGE}
  <!-- Page content -->
  <div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">
        <!-- Login form -->
        <form class="login-form form-horizontal cmxform" method="post" id="commentForm" action="{BASE_URL}pages/forgot_password">
          <div class="card mb-0">
            <!-- <i class="border-slate-300 border-3 p-3 mb-3 mt-1">
            <img src="{BASE_URL}img/logo.png" class="card-img-top" alt="Image" width="150px" height="250px">
            </i> -->
            <div class="card-body">
              <div class="text-center mb-3">
                <h4 class="mb-0">{APP_NAME}</h4>
                <span class="d-block text-muted">Forgot Password</span>
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" onkeypress="return string(event)" required>
              </div>

              <?php
              if(in_array('g-recaptcha',$ASSETS)){
              ?>
                <div class="g-recaptcha" data-sitekey="6Lf7WCUTAAAAANJ2ZMQ1Xvum9wXMo_6tGcl_rYej" style="transform: scale(0.9); transform-origin: 0 0;"></div>
              <?php
              }
              ?>
              
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="btnLogin" value="login"> Forgot Password </button> <br>
                <a href="{BASE_URL}pages/login" class="btn btn-block"> Login <i class="icon-circle-right2 ml-2"></i></a>

              </div>
            </div>
          </div>
        </form>
        <!-- /login form -->
      </div>
      <!-- /content area -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->
  <?php 
    $this->load->view("themes/$THEMES/v_js"); 
    $this->load->view("themes/assets/v_js",$ASSETS);
  ?>
  </body>
</html>