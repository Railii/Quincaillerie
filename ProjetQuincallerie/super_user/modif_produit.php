<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';
$produitToUpdate = null;

// Récupération des informations du produit à modifier
if (isset($_GET['mod'])) {
    $produitId = intval($_GET['mod']);
    $req = $con->prepare("SELECT p.*, m.marque_nom 
                           FROM Produit p 
                           JOIN Marque m ON p.marque_id = m.marque_id 
                           WHERE p.produit_id = ?");
    $req->execute([$produitId]);
    $produitToUpdate = $req->fetch();
}

// Mise à jour du produit
if (isset($_POST['update'])) {
    if (!empty($_POST['nom']) && !empty($_POST['quantite']) && !empty($_POST['prix']) && !empty($_POST['marque'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $quantite = intval($_POST['quantite']);
        $prix = floatval($_POST['prix']);
        $marque = intval($_POST['marque']);

        $req = $con->prepare("UPDATE Produit SET produit_nom=?, produit_quantite=?, produit_prix=?, marque_id=? WHERE produit_id=?");
        if ($req->execute([$nom, $quantite, $prix, $marque, $produitId])) {
            $message = 'Produit mis à jour avec succès !';
        } else {
            $message = 'Erreur lors de la mise à jour du produit.';
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
    <title>Modifier Produit</title>
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
        input, button, select {
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

<h1>Modifier Produit</h1>
<form method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom du produit" value="<?= htmlspecialchars($produitToUpdate['produit_nom'] ?? '') ?>" required>
    <input type="number" id="quantite" name="quantite" placeholder="Quantité" value="<?= htmlspecialchars($produitToUpdate['produit_quantite'] ?? '') ?>" required>
    <input type="number" step="0.01" id="prix" name="prix" placeholder="Prix" value="<?= htmlspecialchars($produitToUpdate['produit_prix'] ?? '') ?>" required>
    <select name="marque" id="marque" required>
        <option value="">Sélectionnez une marque</option>
        <?php  
            $affichageMarques = $con->query("SELECT * FROM Marque");
            while ($dataFact = $affichageMarques->fetch()) {
        ?>
            <option value="<?= $dataFact['marque_id'] ?>" <?= ($produitToUpdate && $dataFact['marque_id'] == $produitToUpdate['marque_id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($dataFact['marque_nom']) ?>
            </option>
        <?php } ?>
    </select>
    
    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>