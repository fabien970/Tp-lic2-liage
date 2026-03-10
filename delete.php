<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM etudiants WHERE id=$id";
mysqli_query($conn,$sql);

header("Location: index.php");
?>
