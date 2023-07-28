<?php
$info = select2("info","*","");
echo '
<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
</a>
<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp_2'].'&text=Halo" class="float float-left" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
</a>';
?>
<footer class="dark-wrapper inverse-text" style="background-color: #2e65c9">
	<div class="container inner pt-30 pb-30 text-center">
	<div class="row d-md-flex align-items-md-center">
		<div class="col-md-6 text-center text-md-left">
		<p class="mb-0">&copy; 2020. Created by <a href="{BASE_URL}" target="_blank" style="color: white">Autama.co.id</p>
		</div>
		<div class="col-md-6 text-center text-md-right">
		<ul class="social social-mute social-s mt-10">
		<?php
			$info = select2("info","*","WHERE flag_aktif='1'");
			echo '
			<li>
				<a href="mailto: '.$info['email'].'" style="color: white"><i class="fa fa-envelope"></i>
				'.$info['email'].'
				</a>
			</li>
			<li>
				<a href="https://instagram.com/'.$info['instagram'].'" target="_blank" style="color: white"><i class="fa fa-instagram"></i>
				'.$info['instagram'].'
				</a>
			</li>
			<li>
				<a href="tel:'.$info['phone'].'" target="_blank" style="color: white"><i class="fa fa-phone"></i>
				'.$info['phone'].'
				</a>
			</li>
			<li>
				<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'" target="_blank" style="color: white"><i class="fa fa-whatsapp"></i>
				'.$info['whatsapp'].'
				</a>
			</li>
			<li>
				<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp_2'].'" target="_blank" style="color: white"><i class="fa fa-whatsapp"></i>
				'.$info['whatsapp_2'].'
				</a>
			</li>';
		?>
		</ul>
		</div>
		<!--/column -->
	</div>
	<!--/.row -->
	</div>
	<!-- /.container -->
</footer>