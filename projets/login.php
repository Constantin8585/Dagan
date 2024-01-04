<!-- login.php -->
<?php include("includes/header.php"); ?>
<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté, si oui, rediriger vers la page d'accueil
if (isset($_SESSION['nom_utilisateur'])) {
    header("Location: index.php");
    exit();
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ajoutez ici votre logique de vérification d'identité
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Exemple basique (à remplacer par votre logique réelle)
    if ($username === 'utilisateur_test' && $password === 'mot_de_passe_test') {
        // Authentification réussie, stocker le nom d'utilisateur dans la session
        $_SESSION['nom_utilisateur'] = $username;
        header("Location: index.php");
        exit();
    } else {
        // Authentification échouée, afficher un message d'erreur
        $erreur_message = "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - IAI-TOGO Concours</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Connexion</h2>
        <?php if (isset($erreur_message)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $erreur_message; ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="users/registers.php">Créer un compte</a></p>
    </div>

    <!-- Inclure jQuery avant le fichier script.js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
<?php include("includes/footer.php"); ?>
