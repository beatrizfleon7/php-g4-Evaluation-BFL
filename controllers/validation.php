<?php
session_start();

if (isset($_POST['destination']) && isset($_POST['country'])) {
  // var_dump($_POST);
  $_SESSION['destination'] = $_POST['destination'];
  $_SESSION['country'] = $_POST['country'];
  header('Location:/destinations.php');
} else {
  header('Location:/admin.php');
}

?>