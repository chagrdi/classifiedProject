<?php

require_once( dirname(__FILE__) . "/../configs/database.php");
require_once( dirname(__FILE__) . "/../configs/config.php");

$errorMessage = "";

if($_POST["password"] !== $_POST["confirmPassword"]){
    $errorMessage = "Votre confirm password est différent";
    header("Location: ../register.php?errorMessage=" . $errorMessage);
}

if(isset($_POST["role"])){
    $role_id = 1;
}else{
    $role_id = 0;
}

$Name = $_POST['username'];
$Password = $_POST['password'];

$req = $db->prepare("INSERT INTO user(username, password, role) VALUES('$Name', '$Password', '$role_id')");
$req->execute();

header("Location: ../login.php");