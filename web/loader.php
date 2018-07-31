<?php

require_once '../vendor/autoload.php';

$loader1 = new Twig_Loader_Filesystem('../templates');
$loader2 = new Twig_Loader_Filesystem('../templates/default');
$loader3 = new Twig_Loader_Filesystem('../templates/home');
$loader4 = new Twig_Loader_Filesystem('../templates/contact');
$loader5 = new Twig_Loader_Filesystem('../templates/gallery');
$loader6 = new Twig_Loader_Filesystem('../templates/more');

$loader = new Twig_Loader_Chain(array($loader1,$loader2,$loader3,$loader4,$loader5,$loader6));


$twig = new Twig_Environment($loader);


