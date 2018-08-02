<?php 
	include './loader.php';
	
	$home = [
		'title' => 'Florestal Enterprise'
	];
	
	echo $twig->render('contact.html',['home' => $home ]);
