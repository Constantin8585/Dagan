<!-- index.php -->

<?php
 include("includes/header.php"); 

// Vérifier si l'utilisateur est connecté
$utilisateurConnecte = false; // À remplacer par votre logique d'authentification

// Obtenez le nom d'utilisateur si l'utilisateur est connecté
$nomUtilisateur = "";
if ($utilisateurConnecte) {
    // À remplacer par votre logique pour obtenir le nom d'utilisateur
    $nomUtilisateur = "Utilisateur_Test";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAI-TOGO Concours</title>
    
    <!-- Inclure ici les liens vers les fichiers CSS et JavaScript nécessaires -->
</head>
<body>
    <div class="container mt-5">
        <h1>IAI-TOGO Concours</h1>
        <p>Informations sur la formation / concours...</p>
    
<div class="row">
    <div class="col-md-6">
        <a href="users/registers.php" class="btn btn-primary btn-lg btn-block">Créer un compte</a>
    </div>
    <div class="col-md-6">
        <a href="#" class="btn btn-success btn-lg btn-block">Se connecter</a>
    </div>
</div>

    </div>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        // Afficher une alerte quand "Créer un compte" est cliqué
        $("a[href='#']").on("click", function(e) {
            e.preventDefault(); // Empêcher le comportement par défaut du lien
            alert("Le lien 'Créer un compte' a été cliqué !");
        });
    });
</script>

</body>
</html>
<?php include("includes/footer.php"); ?>
