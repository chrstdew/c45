<?php
$info = select2("info", "*", "");

echo '
<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'" class="float" target="_blank">
	<i class="fab fa-whatsapp my-float"></i>
</a>
<div class="footer-area-wrapper">
	<div class="footer-area section-space--ptb_80">
		<div class="container">
			<div class="row footer-widget-wrapper">
				<div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
					<div class="footer-widget__logo mb-30">
						<img src="{BASE_URL}img/logo2.png" width="330" height="200" class="img-fluid" alt="">
					</div>
					<ul class="footer-widget__list">
						<li>'.$info['address'].'</li>
						<li><a href="mailto:'.$info['email'].'" class="hover-style-link">'.$info['email'].'</a></li>
						<li><a href="tel:'.$info['phone'].'" class="hover-style-link text-black font-weight--bold">'.$info['phone'].'</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
					<h6 class="footer-widget__title mb-20">Our Solution</h6>
					<ul class="footer-widget__list">';
						$product = select("product","*","WHERE flag_aktif='1' ORDER BY created");
						foreach($product as $i => $r){
							echo '
							<li><a href="javascript::void()" class="hover-style-link">'.$r['name'].'</a></li>';
						}
						echo '
					</ul>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
					<h6 class="footer-widget__title mb-20">Capabilities</h6>
					<ul class="footer-widget__list">';
						$capability = select("capability","*","WHERE flag_aktif='1' ORDER BY created");
						foreach($capability as $i => $r){
							echo '
							<li><a href="javascript::void()" class="hover-style-link">'.$r['name'].'</a></li>';
						}
						echo '
					</ul>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
					<h6 class="footer-widget__title mb-20">Industry Focus</h6>
					<ul class="footer-widget__list">';
						$industry_focus = select("industry_focus","*","WHERE flag_aktif='1' ORDER BY created");
						foreach($industry_focus as $i => $r){
							echo '
							<li><a href="javascript::void()" class="hover-style-link">'.$r['name'].'</a></li>';
						}
						echo '
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright-area section-space--pb_30">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 text-center text-md-start">
					<span class="copyright-text"><a href="'.base_url().'">'.$info['footer'].'</a></span>
				</div>
				<div class="col-md-6 text-center text-md-end">
					<ul class="list ht-social-networks solid-rounded-icon">
						<li class="item">
							<a href="'.$info['facebook'].'" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
								<i class="fab fa-facebook-f link-icon"></i>
							</a>
						</li>
						<li class="item">
							<a href="'.$info['instagram'].'" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
								<i class="fab fa-instagram link-icon"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>';
?>