<?php
// logout.php

// Démarrez la session
session_start();

// Détruisez toutes les données de session
session_destroy();

// Redirigez l'utilisateur vers la page d'accueil (ou une autre page après la déconnexion)
header('Location: index.php');
exit();
?>
