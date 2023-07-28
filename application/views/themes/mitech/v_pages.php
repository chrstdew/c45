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
	<div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

	<!-- Header -->
	{HEADER}
	
	<!-- Side Bar -->
	{SIDEBAR}

	<div id="main-wrapper">
		<div class="site-wrapper-reveal">
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