<?php
session_start();


$_SESSION['username'] = $_POST['username'];
$_SESSION['team'] = $_POST['team'];

// var_dump($_POST['team']);
// var_dump($_SESSION);
// die();
header("location: choice_classe.php");

?>