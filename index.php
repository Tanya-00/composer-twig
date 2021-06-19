<?php
require_once 'vendor/autoload.php';

Twig_Autoloader::register();
$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);
$template=$twig->loadTemplate('index.twig');
$menu=array(
    array('title'=>'Banana cake', 'price'=>'520'),
    array('title'=>'Lemon cake', 'price'=>'480'),
    array('title'=>'Chocolate cake', 'price'=>'650'),
    array('title'=>'Cream cake', 'price'=>'500')
);
echo $template->render('nav.twig', array('menu'=>$menu));

?>