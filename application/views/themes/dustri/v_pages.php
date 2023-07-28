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
		<div class="main-loader">
			<span class="loader1"></span>
			<span class="loader2"></span>
			<span class="loader3"></span>
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

	<div id="scroll-top"><i class="fa fa-angle-up"></i></div>

    <!-- Jquery (Javascript) -->
    {ACE}
	{JS}
	{JS_ASSETS}
</body>
</html>