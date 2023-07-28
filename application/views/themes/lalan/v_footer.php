<?php
$info = select2("info","*","");
echo '
<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
</a>';
?>

<footer id="footer" class="footer footer-1 bg-white">
	<div class="footer--copyright text-center">
		<div class="container">
			<div class="row footer--bar">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<span>© 2021
					<a href="{BASE_URL}">{APP_NAME}</a>, All Rights Reserved.</span>
				</div>
			</div>
		</div>
	</div>
</footer>