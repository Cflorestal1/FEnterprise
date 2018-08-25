<?php 
	include './loader.php';
	
	$home = [
		'title' => 'Florestal Enterprise'
	];
	

	$pv = [
		'pv1' => [
			'title' => '',
			'path' => '',
			'price' => ''
		],
		'pv2' => [
			'title' => '',
			'path' => '',
			'price' => ''
		], 
		'pv3' => [
			'title' => '',
			'path' => '',
			'price' => ''
		],
		'pv4' => [
			'title' => '',
			'path' => '',
			'price' => ''
		]
	];
	
	echo $twig->render('contact.html.twig',['home' => $home ]);
