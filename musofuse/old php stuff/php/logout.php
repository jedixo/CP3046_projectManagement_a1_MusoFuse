<?php
  session_start();
  unset($_SESSION['username']); // remove individual session var
  unset($_SESSION['id']);
  unset($_SESSION['paid']);
  session_destroy();
  header('location:../index.php'); // redirct to certain page now
?>