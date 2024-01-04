
<?php
include("config.php");

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
    // Ajoutez la récupération des autres champs du formulaire ici

    // Vérifie si les fichiers sont correctement téléchargés
    if (isset($_FILES["birth_certificate"]) && $_FILES["birth_certificate"]["error"] == UPLOAD_ERR_OK) {
        $upload_dir = "../uploads/"; // Dossier de téléchargement
        $upload_file = $upload_dir . basename($_FILES["birth_certificate"]["name"]);

        // Déplace le fichier téléchargé vers le dossier de téléchargement
        if (move_uploaded_file($_FILES["birth_certificate"]["tmp_name"], $upload_file)) {
            // Le fichier a été téléchargé avec succès, vous pouvez faire le traitement supplémentaire ici

            // Insérez les données dans votre base de données
            $sql = "INSERT INTO candidatures (nom, prenom, chemin_copie_naissance) VALUES ('$name', '$firstName', '$upload_file')";

            if ($conn->query($sql) === TRUE) {
                // Redirigez l'utilisateur vers la page de consultation de la candidature avec un message de succès
                header("Location: view_application.php?success=true");
                exit();
            } else {
                // Une erreur s'est produite lors de l'insertion dans la base de données
                echo "Erreur lors de l'insertion dans la base de données : " . $conn->error;
            }
        } else {
            // Une erreur s'est produite lors du téléchargement du fichier
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    } else {
        // Le fichier n'a pas été correctement téléchargé
        echo "Erreur lors du téléchargement du fichier.";
    }
}
?>
