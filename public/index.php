<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';


echo $twig->render('navbar.html.twig');
echo $twig->render('home.html.twig', ['name' => $name]);