<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> STANDORD UNIVERSITY HOSPITAL</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a href="index.php" class="navbar-brand"> HOMEPAGE </a>
          <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
            <ul class="nav nav-pills">
              
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
