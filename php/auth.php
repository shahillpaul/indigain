<?php
if(!isset($_SESSION['login_id'])){
  header('location: ?page=login');
}