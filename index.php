<?php
session_start();
include './php/db.config.php';
?>

<!DOCTYPE html>
<html>
  <?php include './header.php';?>
  <body>
    <main>
      <?php 
      // include './navbar.php';
      include './pages/login.php';
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