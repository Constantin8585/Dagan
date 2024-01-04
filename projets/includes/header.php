<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Inclure le fichier CSS commun -->
    <title>IAI-TOGO Concours</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">IAI-TOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <?php
                // Vérifiez si l'utilisateur est connecté
                if (isset($_SESSION['username'])) {
                    // Affichez le nom d'utilisateur et le lien de déconnexion
                    echo '<li class="nav-item">';
                    echo '<span class="nav-link">Bienvenue, ' . $_SESSION['username'] . '!</span>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="logout.php">Se déconnecter</a>';
                    echo '</li>';
                } else {
                    // Affichez les liens de connexion et d'inscription si l'utilisateur n'est pas connecté
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="inscription.php">Créer un compte</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="login.php">Se connecter</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </nav>
