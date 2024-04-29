<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Connexion</h1>
    </header>
    <section>
        <form action="login.php" method="POST">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Se connecter">
        </form>
    </section>
    <footer>
        <p>&copy; 2024 Projet Authentification</p>
    </footer>
</body>
</html>
