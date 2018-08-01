<?php 
	include './loader.php';
	
	$home = [
		'title' => 'Florestal Enterprise'
	];
	
	echo $twig->render('home.html',['home' => $home ]);
