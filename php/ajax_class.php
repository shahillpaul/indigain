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

  function save_course(){
		extract($_POST);
		$data = " course = '$course' ";
			if(empty($id)){
				$save = $this->db->query("INSERT INTO courses set $data");
			}else{
				$save = $this->db->query("UPDATE courses set $data where id = $id");
			}
		if($save)
			return 1;
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
          }
        }
    }
    if($s){
      return 1;
    }else{
      return 0;
    }
  }

}