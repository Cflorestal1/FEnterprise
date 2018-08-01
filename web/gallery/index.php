<?php 
	include '../loader.php';

	$gallery = [
		'title' => 'FlEnterprise - Gallery'
	];

	echo $twig->render('gallery.html', ['gallery' => $gallery]);
