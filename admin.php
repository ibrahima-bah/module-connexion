<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion;charset=utf8', 'root', '');




if (isset($_GET['modifier']) AND !empty($_GET['modifier']))
{
	$modifier = (int) $_GET['modifier'];


	$require = $bdd->prepare('UPDATE utilisateurs SET modifier = 1 WHERE id = ?');
	$require->execute(array($modifier));
}

if (isset($_GET['supprimer']) AND !empty($_GET['supprimer']))
{
	$supprimer = (int) $_GET['supprimer'];
	$require = $bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');
	$require->execute(array($supprimer));
}
	


$membres = $bdd->query('SELECT * from utilisateurs ORDER BY id ASC ');





?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
		<title>Administratio</title>
	</head>
	<body>
		<ul class="tableau">
			<?php while ($m = $membres->fetch()) { ?>
				
			
			<li><?= $m['id'] ?> : <?= $m['login'] ?> : <?= $m['prenom'] ?> : <?= $m['nom'] ?> : <?= $m['password'] ?><?php if($m['modifier'] == 0) {?> - <a href="admin.php?modifier=<?= $m['id'] ?>">modifier</a><?php } ?> - <a href="admin.php?supprimer=<?= $m['id'] ?>">Supprimer</a>
			<?php  }?> </li>
		</ul>
	</body>
</html>