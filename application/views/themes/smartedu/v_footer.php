<!-- Footer page -->
<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="footer-top-content">
				<div class="row">
				<?php
					$info = select2("info","*","WHERE flag_aktif='1'");
					$slide = select2("slide","*","WHERE flag_aktif='1'");
					echo '
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 footer-info">
						<div class="footer-logo">
							<a href="index.html"><img src="'.base_url().'img/logo.png" alt="Image" style="width: 50px; height: 50px;"></a>
						</div>
						<p class="footer-intro">
							<b>'.$APP_NAME.'</b> <br>
							'.$slide['detail'].'
						</p>
						<div class="socials">
							PT. Arkamaya Guna Saharsa
						</div>
					</div>
					
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 footer-contact">
						<div class="footer-title">
							<h4>Information</h4>
						</div>
						<ul>
							<li>
								<i class="fas fa-map-marker-alt" style="padding-right: 25px;"></i>
								<span>'.$info['address'].'</span>
							</li>
							<li class="footer-phone">
								<i class="fas fa-mobile-alt"></i>
								<span>'.$info['phone'].'</span>
							</li>
							<li>
								<i class="far fa-envelope"></i>
								<span>'.$info['email'].'</span>
							</li>
						</ul>
					</div>';
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-content">
				<p class="copyright">&copy; 2020. Created by <a href="http://ascode.id" target="_blank" style="color: white">asCode.id - Adryan Sudarman</p>
			</div>
		</div>
	</div>
</footer>