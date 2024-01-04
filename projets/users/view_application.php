<?php
include("../includes/header.php");

// Récupérer l'identifiant de la candidature depuis la requête GET (à ajuster selon votre structure d'URL)
$idCandidature = isset($_GET['id']) ? $_GET['id'] : null;

// Vérifier si l'identifiant de la candidature est disponible
if ($idCandidature) {
    // Construire et exécuter la requête SQL pour récupérer les informations de la candidature depuis la base de données
    $sql = "SELECT * FROM candidatures WHERE id_candidature = $idCandidature";
    $result = $conn->query($sql);

    // Vérifier si des résultats ont été trouvés
    if ($result->num_rows > 0) {
        // Afficher les informations de la candidature
        while ($row = $result->fetch_assoc()) {
            echo "<p>Nom: " . $row["nom"] . "</p>";
            echo "<p>Prénom: " . $row["prenom"] . "</p>";
            // Ajouter d'autres champs ici
        }

        // Ajouter des boutons pour modifier et supprimer la candidature
        echo '<a href="modifier_candidature.php?id=' . $idCandidature . '" class="btn btn-primary">Modifier Candidature</a>';
        echo '<a href="supprimer_candidature.php?id=' . $idCandidature . '" class="btn btn-danger">Supprimer Candidature</a>';
    } else {
        echo "Aucune candidature trouvée.";
    }
} else {
    echo "Identifiant de candidature manquant.";
}

include("../includes/footer.php");
?>
