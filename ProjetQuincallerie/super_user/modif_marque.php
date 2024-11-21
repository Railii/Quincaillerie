<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';
$marqueToUpdate = null;

// Récupération des informations de la marque à modifier
if (isset($_GET['mod'])) {
    $marqueId = intval($_GET['mod']);
    $req = $con->prepare("SELECT * FROM Marque WHERE marque_id = ?");
    $req->execute([$marqueId]);
    $marqueToUpdate = $req->fetch();
}

// Mise à jour de la marque
if (isset($_POST['update'])) {
    if (!empty($_POST['nom_marque'])) {
        $nom = htmlspecialchars($_POST['nom_marque']);

        $req = $con->prepare("UPDATE Marque SET marque_nom=? WHERE marque_id=?");
        if ($req->execute([$nom, $marqueId])) {
            $message = 'Marque mise à jour avec succès !';
        } else {
            $message = 'Erreur lors de la mise à jour de la marque.';
        }
    } else {
        $message = 'Veuillez remplir tous les champs.';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Marque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: auto;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
            font-size: 16px;
        }
        .message {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Modifier Marque</h1>
<form method="post">
    <input type="text" id="nom_marque" name="nom_marque" placeholder="Nom de la marque" value="<?= htmlspecialchars($marqueToUpdate['marque_nom'] ?? '') ?>" required>
    
    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>