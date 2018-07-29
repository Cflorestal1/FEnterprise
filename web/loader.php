<?php

require_once '../vendor/autoloader.php';

$loader = new Twig_Loader_Filesystem(__DIR_.'/../templates' );

$twig = new Twig_Environment($loader);


