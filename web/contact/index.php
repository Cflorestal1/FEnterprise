<?php 
	include '../loader.php';
	
	$contact = [

		'title' => 'FlEnterprise - Contact'
	];

	echo $twig->render('contact.html',['contact' => $contact]);
	

