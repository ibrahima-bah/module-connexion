<?php 

$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion;charset=utf8', 'root', '');	

if (isset($_POST['forminscription'])) 
{
	if (!empty($_POST['login']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['password']) AND !empty($_POST['password1'])) 
	{
		$login = htmlspecialchars($_POST['login']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$nom = htmlspecialchars($_POST['nom']);
		$password = sha1($_POST['password']);
		$password1 = sha1($_POST['password1']);


		$loginlenght = strlen($login);
		if ($loginlenght <= 250) 
		{
				if ($password == $password1) 
				{
					$insertnbr = $bdd->prepare("INSERT INTO utilisateurs (login, prenom, nom, password) VALUES (?,?,?,?)");
					$insertnbr->execute(array($login, $prenom, $nom, $password));
					$erreur = "votre compte a bien été crée!";
					header('location:connexion.php');
				}
				else
				{
					$erreur = "les mots de passes ne correspondents pas !";
				}	
		}
		else
		{
			$erreur = "Votre login depasse 250 caractéres!";
		}	
	}
	else
	{
		$erreur = "tous les champs doivents etre remplis!";
	}	




}
?>




<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet"  href="http://fonts.googleapis.com/css?family=Crete+Round">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Inscription</title>
	</head>
	<body class="debut">

		<form action="" method="POST">
			<h1>Inscription</h1>
			<p>login:</p>
			<input type="text" name="login">
			<p>prenom:</p>
			<input type="text" name="prenom">
			<p>nom:</p>
			<input type="text" name="nom">
			<p>password:</p>
			<input type="password" name="password">
			<p>Confirmer mot de passe:</p>
			<input type="password" name="password1">
			<br>
			<input type="submit" name="forminscription" value="Valider" class="envoie" >
		</form>
		<?php 
			if (isset($erreur)) {
				echo "$erreur";
			}
		?>

	</body>
</html>