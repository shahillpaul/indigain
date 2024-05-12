<?php
session_start();
Class Act {
  private $db;
  public function __construct(){
    ob_start();
    include './db.config.php';
    $this -> db = $conn;
  }
  function __destruct(){
    $this->db-> close();
    ob_end_flush();
  }

  function addToCart(){
    extract($_POST);
    $name = $this->db->query("SELECT name FROM product WHERE id = '$id' ");
    if($name){
      $name = $name->fetch_assoc();
      $name = $name['name'];
    }
    $d = " product_id = '$id' ";
    $d .= ", name = '$name'";
      $s = $this->db->query("INSERT INTO cart SET ".$d);
      if($s) {
        return $name;
      }else{
        return 0;
      }
  }

  function removeCartItem(){
    extract($_POST);
    $s = $this->db->query("DELETE FROM cart WHERE product_id = '$id' ");
    if($s){
      return 1;
    }else{
      return '0';
    }
  }

  function updateCount(){
    extract($_POST);
    $o = $count;
    $limit = $this->db->query("SELECT * FROM cart");
    $limit = $limit->num_rows;
    if($o == 0 && $limit > 1){
      $s = $this->db->query("DELETE FROM cart WHERE uid = '$uid' ");
    } else if ($o == 1 && $limit < 10) {
      $p = $this->db->query("SELECT * FROM cart WHERE uid = '$uid' ");
        if($p){
          while($row = $p->fetch_assoc()){
            $product_id = $row['product_id'];
            $name = $row['name'];
            $s = $this->db->query("INSERT INTO cart (product_id, name) VALUES ('$product_id', '$name')");
            return $s;
          }
        }
    }
    if($s){
      return 1;
    }else{
      return 0;
    }
  }

  function signin(){
    extract($_POST);
    $query = $this->db->query("SELECT * FROM users WHERE name = '$username' AND password = '$password'");
    if($query->num_rows > 0){
      foreach($query->fetch_array() as $k => $v){
        if($k != 'password' && !is_numeric($k)){
          $_SESSION['login_'.$k] = $v;
        }
      }
      return "Login successful";
    } else if ($username == '' && $password == ''){
      return "Please enter the username and password";
    } else if ($password == ''){
      return "Please enter a password";
    } else if ($username == ''){
      return "Please enter a username";
    }
  }

  function signup_1(){
    extract($_POST);

    $d = "first_name = '$first_name',";
    $d.= "last_name = '$last_name',";
    $d .= "email = '$email',";
    $d.= "contact_number = '$phone',";
    $d.= "state = '$state',";
    $d.= "city = '$city',";
    $d.= "pin_code = '$pin'";

    $query = $this->db->query("SELECT * FROM customer WHERE email = '$email' AND contact_number = '$phone'");
    if($query->num_rows > 0){
      return "User already exists";
    }
    $s = $this->db->query("INSERT INTO customer SET ".$d);
    if($s){
      return 1;
    }else{
      return 0;
    }
  }

  function signup_2(){
    extract($_POST);
    $query = $this->db->query("SELECT * FROM users WHERE name = '$username'");
    if($query->num_rows > 0){
      return "User already exists";
    }
    $d = "name = '$username',";
    $d.= "password =  '$password'";
    $s = $this->db->query("INSERT INTO users SET ".$d);
    if($s){
      return 1;
    }else{
      return 0;
    }
  }

<<<<<<< HEAD
  function signout(){
    session_destroy();
    foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location: ?page=login");
    return 1;
  }
=======

>>>>>>> parent of d71c8f1 (a)
}