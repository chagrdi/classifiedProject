<?php
require_once( dirname(__FILE__) . "/../configs/database.php");

$Name = $_POST['username'];
$Password = $_POST['password'];
$req = $db->prepare("SELECT * FROM user WHERE username = '$Name' AND password = '$Password'");
$req->execute();

$result = $req->fetch();

if(!$result){
    $errorMessage = "Erreur de connexion";
    header("Location: ../login.php?errorMessage=" . $errorMessage);
}
else{
    session_start();
    $_SESSION["username"] = $result["username"];
    $_SESSION["role"] = $result["role"];
    $_SESSION["id"] = $result["id"];
    header("Location: ../index.php");
}