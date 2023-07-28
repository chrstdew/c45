<footer class="footer-area footer-bg">
	<div class="container">
		<div class="footer-top pt-100 pb-70">
			<div class="row">
			<?php
				$info = select2("info","*","");
				echo '
				<div class="col-lg-8 col-sm-6">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html">
								<img
									src="'.base_url().'img/logo.png"
									alt="Images"
									style="width: 50px; height: 50px;"
								/>
							</a>
						</div>
						<span style="color: #fff;">
							'.substr($info['footer'],0,200).'
						</span> <br/> <br/>
						<div class="footer-call-content">
							<h3>Talk to Our Support</h3>
							<span>
								<a href="tel:'.$info['phone'].'">'.$info['phone'].'
								<i class="bx bx-headphone"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget pl-2">
						<h3>Our Solutions</h3>
						<ul class="footer-list">';
							$category = select("category","*","WHERE flag_aktif='1' ORDER BY created");
							foreach($category as $i => $r){
								echo '
								<li>
									<a href="'.base_url().'pages/content/product/data" target="_blank">
										<i class="bx bx-chevron-right"></i>
										'.$r['name'].'
									</a>
								</li>';
							}
							echo '
						</ul>
					</div>
				</div>';
			?>
			</div>
		</div>
		<div class="copy-right-area">
			<div class="copy-right-text">
				<p>
					&copy; 2021. Created by <a href="http://ascode.id" target="_blank" style="color: white">asCode.id - Adryan Sudarman</a>
				</p>
			</div>
		</div>
	</div>
</footer>