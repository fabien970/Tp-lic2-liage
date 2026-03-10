<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM etudiants WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$nom = $_POST['nom'];
$email = $_POST['email'];
$filiere = $_POST['filiere'];

$sql = "UPDATE etudiants SET nom='$nom', email='$email', filiere='$filiere' WHERE id=$id";
mysqli_query($conn,$sql);

header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Modifier étudiant</title>
</head>
<body>

<h2>Modifier étudiant</h2>

<form method="POST">
Nom : <input type="text" name="nom" value="<?php echo $row['nom']; ?>"><br><br>
Email : <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
Filière : <input type="text" name="filiere" value="<?php echo $row['filiere']; ?>"><br><br>

<button type="submit" name="update">Modifier</button>
</form>

</body>
</html>
