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

if($a == "signin"){
	$save = $crud->signin();
  if($save)
    echo $save;
}

if($a == "signup_1"){
	$save = $crud->signup_1();
  if($save)
    echo $save;
}

if($a == "signup-2"){
	$save = $crud->signup_2();
  if($save)
    echo $save;
}

if($a == "save"){
	$save = $crud->save();
  if($save)
    echo $save;
}

ob_end_flush();