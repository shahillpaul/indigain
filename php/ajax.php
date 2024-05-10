<?php
ob_start();
$a = $_GET['act'];
include './ajax_class.php';
$crud = new Act();

if($a == "addToCart"){
	$save = $crud->addToCart();
	if($save)
	echo $save;
}

ob_end_flush();