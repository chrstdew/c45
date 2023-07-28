<?php
$info = select2("info","*","");
echo '
<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
</a>';
?>
<footer class="style1">
	<div class="container">
		<div class="row">
			<div class="bottom-footer">
				<div class="col-lg-12">
					<div class="bottom-inner">
						<p>© Copyright 2021 by <a href="#">{APP_NAME}</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>