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
	<div id="wrapper" class="wrapper clearfix">
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