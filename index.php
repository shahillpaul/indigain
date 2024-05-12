<?php
session_start();
include './php/db.config.php';
?>

<!DOCTYPE html>
<html>
  <?php include './header.php';?>
  <body>
    <style>
      ::-webkit-scrollbar{
        display: none !important;
      }
      * {
        user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
      }
    </style>
    <main>
      <?php 
        $page = isset($_GET['page']) ? $_GET['page'] : "home";
        $pagePath = 'pages/'.$page.'.php';
        if (file_exists($pagePath)) {
          include($pagePath);
        } else {
          include('pages/home.php');
        }
      ?>
    </main>
  </body>
</html>