<?php
ob_start();
$a = $_GET['a'];
include './ajax_class.php';
$crud = new Act();

if($a == "addToCart"){
	$save = $crud->addToCart();
	if($save)
	echo $save;
}

if($a == "removeCartItem"){
	$save = $crud->removeCartItem();
	if($save)
	echo $save;
}


ob_end_flush();