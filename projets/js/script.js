// js/script.js
$(document).ready(function() {
    // Fonction de validation du formulaire de connexion
    $("form").submit(function(event) {
        // Récupérer les valeurs des champs
        var username = $("#username").val();
        var password = $("#password").val();

        // Validation simple : Vérifier si les champs ne sont pas vides
        if (username === "" || password === "") {
            // Empêcher l'envoi du formulaire
            event.preventDefault();

            // Afficher un message d'erreur
            alert("Veuillez remplir tous les champs.");
        }
    });
});
