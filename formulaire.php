<?php include('entete.php'); ?>

<body>
    <h1>Connexion</h1>
    <form action="connexion.php" method="post">
        <label for="identifiant">Identifiant :</label>
        <input type="text" id="identifiant" name="identifiant" required>


        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>


        <button type="submit">Se connecter</button>
    </form>
<?php include('pieddepage.php'); ?>