<!-- consultation_candidature.php -->
<?php
include("config.php");

// Récupérer l'ID de la candidature depuis la requête (à remplacer par votre logique)
$idCandidature = $_GET['id'];

// Récupérer les informations de la candidature depuis la base de données
$infoCandidature = getCandidatureById($idCandidature);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation de Candidature</title>
    <!-- Inclure ici les liens vers les fichiers CSS et JavaScript nécessaires -->
</head>
<body>
    <div class="container mt-5">
        <h2>Consultation de Candidature</h2>
        <!-- Afficher les informations de la candidature récupérées depuis la base de données -->
        <p>Nom: <?php echo $nom; ?></p>
        <p>Prénom: <?php echo $prenom; ?></p>
        <!-- ... (afficher les autres champs) -->

        <!-- Boutons pour modifier et supprimer la candidature -->
        <a href="modifier_candidature.php" class="btn btn-primary">Modifier Candidature</a>
        <a href="supprimer_candidature.php" class="btn btn-danger">Supprimer Candidature</a>
    </div>
    <!-- consultation_candidature.php -->
    <!-- Inclure ici les liens vers les fichiers JavaScript nécessaires -->
</body>
</html>
