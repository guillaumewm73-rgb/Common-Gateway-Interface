// ===== entete.php =====
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>

// ===== index.php =====
<?php include('entete.php'); ?>

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

<?php include('pieddepage.php'); ?>


// ===== pieddepage.php =====
<footer>
<p>© 2025 - Mon Site</p>
    </footer>
</body>
</html>