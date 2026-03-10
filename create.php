<?php
include 'db.php';

if(isset($_POST['submit'])){

$nom = $_POST['nom'];
$email = $_POST['email'];
$filiere = $_POST['filiere'];

$sql = "INSERT INTO etudiants(nom,email,filiere) VALUES('$nom','$email','$filiere')";
mysqli_query($conn,$sql);

header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Ajouter étudiant</title>
</head>
<body>

<h2>Ajouter un étudiant</h2>

<form method="POST">
Nom : <input type="text" name="nom"><br><br>
Email : <input type="email" name="email"><br><br>
Filière : <input type="text" name="filiere"><br><br>

<button type="submit" name="submit">Ajouter</button>
</form>

</body>
</html>
