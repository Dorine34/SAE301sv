<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Vérification et traitement des données
    if (!empty($nom) && !empty($email) && !empty($message)) {
        // Processus de traitement, comme l'envoi d'un email ou l'enregistrement en base de données
        echo "Merci $nom, votre message a été envoyé avec succès !";
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Le formulaire n'a pas été soumis correctement.";
}
?>