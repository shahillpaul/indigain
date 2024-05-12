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

if($a == "updateCount"){
	$save = $crud->updateCount();
  if($save)
  echo $save;
}

if($a == "login"){
	$save = $crud->login();
	if($save)
	echo $save;
}

if($a == "register"){
	$save = $crud->register();
	if($save)
		echo $save;
}

ob_end_flush();