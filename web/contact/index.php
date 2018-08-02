<?php 
	include '../loader.php';
	
	$contact = [

		'title' => 'Contact'
	];

	echo $twig->render('contact.html',['contact' => $contact]);
	

