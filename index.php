<?php
include 'db.php';
$sql = "SELECT * FROM etudiants";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD Etudiants</title>
</head>
<body>

<h2>Liste des étudiants</h2>

<a href="create.php">Ajouter un étudiant</a>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Nom</th>
<th>Email</th>
<th>Filière</th>
<th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nom']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['filiere']; ?></td>
<td>
<a href="update.php?id=<?php echo $row['id']; ?>">Modifier</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a>
</td>
</tr>
<?php } ?>

</table>

</body>
</html>
