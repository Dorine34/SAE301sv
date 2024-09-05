<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour avec PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        input, button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h1>Entrez votre nom :</h1>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Votre nom" required>
        <button type="submit">Soumettre</button>
    </form>

    <h2>
    <?php
        // Vérifie si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupère le nom soumis et sécurise l'entrée pour éviter les attaques XSS
            $name = htmlspecialchars($_POST['name']);
            // Affiche le message "Bonjour [Nom] !"
            echo "Bonjour, " . $name . " !";
        }
    ?>
    </h2>

</body>
</html>
