<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- TITLE -->
	{TITLE}
	
	<!-- CSS -->
	{HEAD}
	{HEAD_ASSETS}
</head>
<body>
	<div class="preloader_wrapper">
		<div class="preloader_inner">
			<img src="{BASE_URL}themes/cultivation/images/preloader.gif" alt="image">
		</div>
	</div>
	<div class="clv_main_wrapper index_v1">
		<!-- Header -->
		{HEADER}
	
		<!-- Side Bar -->
		{SIDEBAR}
	
		<!-- Content -->
		{CONTENT}
	
		<!-- Footer -->
		{FOOTER}
	</div>

    <!-- Jquery (Javascript) -->
    {ACE}
	{JS}
	{JS_ASSETS}
</body>
</html>