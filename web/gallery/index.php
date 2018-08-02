<?php 
	include '../loader.php';

	$gallery = [
		'title' => 'Gallery'
	];

	echo $twig->render('gallery.html', ['gallery' => $gallery]);
