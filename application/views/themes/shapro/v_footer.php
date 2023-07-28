<?php
    $info = select2("info","*","");

	echo '
	<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>
	<footer class="footer-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<aside class="widget">
						<div class="about-widget">
							<a href="'.base_url().'"><img src="'.base_url().'img/logo.png" alt="" style="width: 150px;"/></a>
							<p>
								If you can think of anything we missed, let us know by sending your message
							</p>
							<div class="ab-social">
								<a class="fac" href="https://facebook.com/'.$info['facebook'].'"><i class="fab fa-facebook-f"></i></a>
								<a class="pin" href="https://instagram.com/'.$info['instagram'].'"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</aside>
				</div>

				<div class="col-lg-4 col-md-6">
					<aside class="widget contact-widget">
						<h3 class="widget-title">BG Community<span>.</span></h3>
						<div class="contact-info">
							<p>
								Breakthrough Generation
							</p>
							<p>
								<a href="https://facebook.com/'.$info['facebook'].'" target="_blank">
									<i class="fab fa-facebook"></i> '.$info['facebook'].'
								</a>
							</p>
							<p>
								<a href="https://instagram.com/'.$info['instagram'].'" target="_blank">
									<i class="fab fa-instagram"></i> '.$info['instagram'].'
								</a>
							</p>
						</div>
					</aside>
				</div>

				<div class="col-lg-4 col-md-6">
					<aside class="widget contact-widget">
						<h3 class="widget-title">Contact Us<span>.</span></h3>
						<div class="contact-info">
							<p>
								Address:
								<span>'.$info['address'].'</span>
							</p>
							<p>
								Phone: 
								<a href="tel:'.$info['phone'].'">
									<span>'.$info['phone'].'</span>
								</a><br />
								Email:
								<a href="mailto:'.$info['email'].'">
									<span class="__cf_email__">'.$info['email'].'</span>
								</a>
							</p>
						</div>
					</aside>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="copyright text-center">
						<p>
							© 2022 <a href="#">Breakthrough Generation</a> All Rights Reserved.
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>';
?>