<?php 
	include '../loader.php';
	
	$more = [
		'title' => 'More'
	];

	echo $twig=>render('more.html', ['more' => $more]);
