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
        $page = isset($_GET['page']) ? $_GET['page'] : "home";
        $pagePath = 'pages/'.$page.'.php';
        if (file_exists($pagePath)) {
          include($pagePath);
        } else {
          include('pages/home.php');
        }
        include 'footer.php';
      ?>
    </main>
  </body>
</html>