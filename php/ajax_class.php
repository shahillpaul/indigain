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


  function login(){
    extract($_POST);		
    $qry = $this->db->query("SELECT * FROM users where name = '".$username."' and password = '".$password."' ");
    if($qry->num_rows > 0){
      foreach ($qry->fetch_array() as $key => $value) {
        if($key != 'passwors' && !is_numeric($key))
          $_SESSION['login_'.$key] = $value;
      }
      if($_SESSION['login_type'] != 1){
        foreach ($_SESSION as $key => $value) {
          unset($_SESSION[$key]);
        }
        return 2 ;
        exit;
      }
        return 1;
    } else if($username==''){
      return 100;
    } else if ($password==''){
      return 101;
    } else {
      return 3;
    }
}

function register(){
  extract($_POST);
  // $data = " name = '".$firstname.' '.$lastname."' ";
  // $data .= ", username = '$email' ";
  // $data .= ", password = '".md5($password)."' ";
  $chk = $this->db->query("SELECT * FROM users where name = '$regUsername' ")->num_rows;
  if($chk > 0){
    return 2;
    exit;
  }
    $save = $this->db->query("INSERT INTO users (name, password) VALUES ('$regUsername, '$$regPassword')  ");
  if($save){
    $uid = $this->db->insert_id;
    foreach($_POST as $k => $v){
      if($k =='password')
        continue;
      if(empty($data) && !is_numeric($k) )
        $data = " $k = '$v' ";
      else
        $data .= ", $k = '$v' ";
    }
  }
}


}