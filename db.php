<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "universite";

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
    die("Connexion échouée : " . mysqli_connect_error());
}
?>
