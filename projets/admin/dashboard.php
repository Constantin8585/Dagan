<?php
session_start();
include("users/config.php"); 

// Vérifiez si l'utilisateur est authentifié, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Récupérez les données du tableau de bord depuis la base de données
$query = "SELECT * FROM dashboard_data LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $stats = $row['stats'];
    $concoursDate = $row['concours_date'];
    $deadlineDate = $row['deadline_date'];
} else {
    // Gérez le cas où les données ne sont pas disponibles
    $stats = "Statistiques non disponibles";
    $concoursDate = "Date du concours non disponible";
    $deadlineDate = "Date limite de dépôt non disponible";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Espace Administration</title>
</head>
<body>
    <!-- Affichez les informations du tableau de bord -->
    <h1>Tableau de bord</h1>
    <p><?php echo $stats; ?></p>
    <p>Date du concours : <?php echo $concoursDate; ?></p>
    <p>Date limite de dépôt : <?php echo $deadlineDate; ?></p>

    <!-- Bouton de déconnexion -->
    <form action="logout.php" method="post">
        <button type="submit">Se déconnecter</button>
    </form>
</body>
</html>
