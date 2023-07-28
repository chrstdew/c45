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
	<div class="preloader">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="spinner"></div>
			</div>
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

    <!-- Jquery (Javascript) -->
    {ACE}
	{JS}
	{JS_ASSETS}
</body>
</html>