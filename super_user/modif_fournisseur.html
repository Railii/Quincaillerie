<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';
$fournisseurToUpdate = null;

// Récupération des informations du fournisseur à modifier
if (isset($_GET['mod'])) {
    $fournisseurId = intval($_GET['mod']);
    $req = $con->prepare("SELECT * FROM Fournisseur WHERE fournisseur_id = ?");
    $req->execute([$fournisseurId]);
    $fournisseurToUpdate = $req->fetch();
}

// Mise à jour du fournisseur
if (isset($_POST['update'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $tel = htmlspecialchars($_POST['tel']);

        $req = $con->prepare("UPDATE Fournisseur SET fournisseur_nom=?, fournisseur_prenom=?, fournisseur_tel=? WHERE fournisseur_id=?");
        if ($req->execute([$nom, $prenom, $tel, $fournisseurId])) {
            $message = 'Fournisseur mis à jour avec succès !';
        } else {
            $message = 'Erreur lors de la mise à jour du fournisseur.';
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
    <title>Modifier Fournisseur</title>
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

<h1>Modifier Fournisseur</h1>
<form method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom du fournisseur" value="<?= htmlspecialchars($fournisseurToUpdate['fournisseur_nom'] ?? '') ?>" required>
    <input type="text" id="prenom" name="prenom" placeholder="Prenom du fournisseur" value="<?= htmlspecialchars($fournisseurToUpdate['fournisseur_prenom'] ?? '') ?>" required>
    <input type="text" id="tel" name="tel" placeholder="Tel" value="<?= htmlspecialchars($fournisseurToUpdate['fournisseur_tel'] ?? '') ?>" required>
    
    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>