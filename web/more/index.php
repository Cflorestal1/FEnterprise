<?php 
	include '../loader.php';
	
	$more = [
		'title' => 'FlEnterprise - More'
	];

	echo $twig=>render('more.html', ['more' => $more]);
