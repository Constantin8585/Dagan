<?php
// config.php

$servername = "127.0.0.1"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = "amelie"; // Mot de passe MySQL
$database = "iai_togo_db"; // Nom de la base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>

// config.php
<?php

// Fonction pour récupérer les informations de la candidature par ID
function getCandidatureById($id) {
    global $conn;  // Utilisez la connexion déclarée dans config.php

    // Utilisez des requêtes préparées pour éviter les injections SQL
    $requete = $conn->prepare("SELECT nom, prenom, photo, date_naissance, sexe, nationalite, annee_bac, serie FROM candidatures WHERE id = ?");
    $requete->bind_param("i", $id);

    // Exécutez la requête
    $requete->execute();

    // Liez les résultats à des variables
    $requete->bind_result($nom, $prenom, $photo, $date_naissance, $sexe, $nationalite, $annee_bac, $serie);

    // Récupérez les résultats
    $requete->fetch();

    // Fermez la requête
    $requete->close();

    // Retournez un tableau associatif des résultats
    return [
        'nom' => $nom,
        'prenom' => $prenom,
        'photo' => $photo,
        'date_naissance' => $date_naissance,
        'sexe' => $sexe,
        'nationalite' => $nationalite,
        'annee_bac' => $annee_bac,
        'serie' => $serie,
    ];
}
?>
