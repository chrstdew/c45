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
<body class="default">
	<div class="preloading">
		<div class="wrap-preload">
			<div class="cssload-loader"></div>
		</div>
    </div>
	<!-- Side Bar -->
	{SIDEBAR}

	<!-- Header -->
	{HEADER}

	<div id="content">
		<!-- Content -->
		{CONTENT}
	</div>

    <!-- Footer -->
	{FOOTER}

    <div class="overlay"></div>

    <!-- Jquery (Javascript) -->
    {ACE}
	{JS}
	{JS_ASSETS}
</body>
</html>