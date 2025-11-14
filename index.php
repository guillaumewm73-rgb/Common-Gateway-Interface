<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de connexion</title>
</head>
<body>


<main>
<h1>Connexion</h1>
<form action="connexion.php" method="post">
<label for="identifiant">Identifiant :</label>
<input type="text" id="identifiant" name="identifiant" required>


<label for="password">Mot de passe :</label>
<input type="password" id="password" name="password" required>


<button type="submit">Se connecter</button>
</form>
</main>


</body>
</html>