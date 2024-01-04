<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous que les champs nécessaires existent dans le formulaire
    if (
        isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_FILES["photo"]) &&
        isset($_POST["date_naissance"]) && isset($_POST["sexe"]) && isset($_POST["nationalite"]) &&
        isset($_POST["annee_bac"]) && isset($_POST["serie_bac"]) &&
        isset($_FILES["copie_naissance"]) && isset($_FILES["copie_nationalite"]) && isset($_FILES["attestation_bac"]) &&
        isset($_POST["confirmation"])
    ) {
        // Récupérez les données soumises du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_naissance = $_POST["date_naissance"];
        $sexe = $_POST["sexe"];
        $nationalite = $_POST["nationalite"];
        $annee_bac = $_POST["annee_bac"];
        $serie_bac = $_POST["serie_bac"];

        // Traitement des fichiers téléchargés
        $photo = $_FILES["photo"]["name"];
        $copie_naissance = $_FILES["copie_naissance"]["name"];
        $copie_nationalite = $_FILES["copie_nationalite"]["name"];
        $attestation_bac = $_FILES["attestation_bac"]["name"];

        // Déplacez les fichiers téléchargés vers le dossier d'uploads
        move_uploaded_file($_FILES["photo"]["tmp_name"], "../uploads/" . $photo);
        move_uploaded_file($_FILES["copie_naissance"]["tmp_name"], "../uploads/" . $copie_naissance);
        move_uploaded_file($_FILES["copie_nationalite"]["tmp_name"], "../uploads/" . $copie_nationalite);
        move_uploaded_file($_FILES["attestation_bac"]["tmp_name"], "../uploads/" . $attestation_bac);

        // Enregistrez les données dans la base de données (à implémenter)

        // Redirigez l'utilisateur vers la page de confirmation
        header("Location: confirmation.php");
        exit();
    } else {
        // Redirigez l'utilisateur vers la page d'erreur si les champs sont manquants
        header("Location: error.php");
        exit();
    }
} else {
    // Redirigez l'utilisateur vers la page d'erreur si la méthode de requête est incorrecte
    header("Location: error.php");
    exit();
}
?>
