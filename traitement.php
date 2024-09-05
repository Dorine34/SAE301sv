<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonjour avec Nom</title>
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
  <form id="nameForm">
    <input type="text" id="nameInput" placeholder="Votre nom" required>
    <button type="submit">Soumettre</button>
  </form>

  <h2 id="greeting"></h2>

  <script>
    document.getElementById('nameForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Empêche le rechargement de la page
      var name = document.getElementById('nameInput').value;
      document.getElementById('greeting').textContent = "Bonjour, " + name + "!";
    });
  </script>

</body>
</html>
