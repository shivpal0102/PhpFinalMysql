<?php 

$name = $_POST["name"]; 
$description = $_POST["description"]; 
$email = $_POST["email"]; 

require_once "DBManager.php";
$client = new DBManager();
$client->insertData($name, $email, $description);

header("Location: home.php");


?>