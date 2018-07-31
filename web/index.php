<?php 
	include './loader.php';
	
	$home = [
		'title' => 'Florestal Enterprise'
	];
	
	echo $twig->render('index.html',['home' => $home ]);
