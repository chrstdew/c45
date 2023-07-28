<?php
$info = select2("info", "*", "");
?>
<section class="call_to_action">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="call_action_inner">
					<div class="call_text">
						<!-- <h3>We Have <span>Recommendations</span> for You</h3>
						<p>Take 30% off when you spend $150 or more with code Autima11</p> -->
					</div>
					<div class="discover_now">
						<a href="#"></a>
					</div>
					<div class="link_follow">
						<ul>
							<li><a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" target="_blank"><i class="ion-social-whatsapp"></i></a></li>
							<li><a href="https://instagram.com/'.$info['instagram'].'" target="_blank"><i class="ion-social-instagram"></i></a></li>
							<li><a href="https://facebook.com/'.$info['facebook'].'" target="_blank"><i class="ion-social-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="footer_widgets">
	<div class="container">
		<div class="footer_bottom">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="copyright_area">
						<p>Copyright &copy; 2022 <a href="#">UMKM Profile</a> All Right Reserved.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer_payment text-right">
						<a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>