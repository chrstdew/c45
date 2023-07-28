<?php
$info = select2("info","*","");
echo '
<a href="https://api.whatsapp.com/send?phone='.$info['whatsapp'].'&text=Halo" class="float" target="_blank">
	<i class="fa fa-phone my-float"></i>
</a>';
?>
<div class="int_footer_wrapper"> 
	<div class="container">
		<div class="footer_box_wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="footer_box">
						<h3 class="footer_heading">Office</h3>
						<p>
							Springhill Office Tower 17th Floor, <br>
							Jalan Benyamin Suaeb Blok D6, <br>
							Jakarta Utara 14410 – INDONESIA <br>
							PHONE : +6221 2260 8001
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="footer_box">
						<h3 class="footer_heading">Shipyard & Workshop</h3>
						<p>
							Jalan Marunda Tim No. 2 <br>
							Jakarta Utara 14150 – INDONESIA <br>
							PHONE : +62 8788 790 5288 <br>
							+62 21 224 17 633 
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="footer_box">
						<h3 class="footer_heading">Sertifikasi / ISO</h3>
						<div class="footer_linkbox">
							<ul class="footer_hours footer_support_link">
								<li><a href="javascript:;">ISO 9001 / 2015</a></li>
								<li><a href="javascript:;">ISO 14001 / 2015</a></li>
								<li><a href="javascript:;">ISO 45001 / 2018</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="footer_box">
						<h3 class="footer_heading">Dokumen Perusahaan</h3>
						<div class="footer_linkbox">
							<ul class="footer_hours footer_support_link">
								<li><a href="javascript:;">Akta Pendirian </a></li>
								<li><a href="javascript:;">Akta Perusahaan  </a></li>
								<li><a href="javascript:;">Surat Keterangan Domisili </a></li>
								<li><a href="javascript:;">SPT, SPPKP, NPWP</a></li>
							</ul>
							<ul class="footer_hours footer_support_link">
								<li><a href="javascript:;">Nomor Induk Berusaha / NIB dan OSS</a></li>
								<li><a href="javascript:;">Izin Usaha Industri / IUI dan OSS</a></li>
								<li><a href="javascript:;">Usaha Jasa Konstruksi dari OSS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				
</div>

<div class="int_bottom_footer_wrapper" style="background-color: #040459;"> 
	<div class="container">
		<div class="bottom_footer_box_wrapper text-center">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright © 2021 <a href="{BASE_URL}">Swapraja Sakti Mandiri.</a> All Right Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</div>