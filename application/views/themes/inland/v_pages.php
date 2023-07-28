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
<body class="int_dark_bg" style="background-color: #000080;">
	<div class="search_input_box">
		<input type="text" placeholder="Search here..."/>
		<span><i class="fas fa-times"></i></span>
	</div>

	<div class="int_main_wraapper">
		<!-- Side Bar -->
		{SIDEBAR}

		<div class="int_content_wraapper int_content_left">
			<!-- Header -->
			{HEADER}

			<!-- Content -->
			{CONTENT}
		</div>
	
		<!-- Footer -->
		{FOOTER}
	</div>

    <!-- Jquery (Javascript) -->
    {ACE}
	{JS}
	{JS_ASSETS}
</body>
</html>