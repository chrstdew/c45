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

	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>
</head>
<body>
	<div class="preloader">
		<div class="circle">
			<div class="circle-cutter"></div>
			<div class="circle-inner"></div>
		</div>
	</div>

	<!-- Header -->
	{HEADER}
	
	<!-- Side Bar -->
	{SIDEBAR}

	<!-- Content -->
	{CONTENT}

	<!-- Footer -->
	{FOOTER}

	<a href="#" id="back-to-top"><i class="fal fa-angle-double-up"></i></a>

    <!-- Jquery (Javascript) -->
    {ACE}
	{JS}
	{JS_ASSETS}
</body>
</html>