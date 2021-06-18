<?php
session_start();

// var_dump($_POST);

$userName = 'greta';
$password = '1234';

if ($_POST['name'] === $userName && $_POST['password']){
  $_SESSION['name'] = $_POST['name'];
  var_dump($_SESSION); // je suis connectée
  header('Location:/admin.php');
}