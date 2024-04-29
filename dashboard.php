<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Afficher le tableau de bord de l'utilisateur
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tableau de bord</h1>
        <nav>
            <ul>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <p>Bienvenue, <?php echo $_SESSION['username']; ?>. Ceci est votre tableau de bord.</p>
    </section>
    <footer>
        <p>&copy; 2024 Projet Authentification</p>
    </footer>
</body>
</html>
