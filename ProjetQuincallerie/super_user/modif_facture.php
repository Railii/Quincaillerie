<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';
$factureToUpdate = null;

// Récupération des informations de la facture à modifier
if (isset($_GET['mod'])) {
    $factureId = intval($_GET['mod']);
    $req = $con->prepare("SELECT * FROM Facture WHERE facture_id = ?");
    $req->execute([$factureId]);
    $factureToUpdate = $req->fetch();
}

// Mise à jour de la facture
if (isset($_POST['update'])) {
    if (!empty($_POST['nom_client']) && !empty($_POST['nom_produit']) && !empty($_POST['prix_produit'])) {
        $nom_client = intval($_POST['nom_client']);
        $nom_produit = intval($_POST['nom_produit']);
        $prix = $_POST['prix_produit'];

        $req = $con->prepare("UPDATE Facture SET facture_client_id=?, facture_produit_id=?, facture_prix=? WHERE facture_id=?");
        if ($req->execute([$nom_client, $nom_produit, $prix, $factureId])) {
            $message = 'Facture mise à jour avec succès !';
            header("location: facture.php");
        } else {
            $message = 'Erreur lors de la mise à jour de la facture.';
        }
    } else {
        $message = 'Veuillez remplir tous les champs.';
    }
}

// Récupération de tous les clients et produits pour les sélecteurs
$clients = $con->query("SELECT * FROM Client")->fetchAll();
$produits = $con->query("SELECT * FROM Produit")->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Facture</title>
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
        select, input, button {
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

<h1>Modifier Facture</h1>
<form method="post">
    <select name="nom_client" id="nom_client" required>
        <option value="">Sélectionner un client</option>
        <?php foreach ($clients as $client) { ?>
            <option value="<?= $client['client_id'] ?>" <?= ($factureToUpdate && $factureToUpdate['facture_client_id'] == $client['client_id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($client['client_nom']) ?>
            </option>
        <?php } ?>
    </select>

    <select name="nom_produit" id="nom_produit" required>
        <option value="">Sélectionner un produit</option>
        <?php foreach ($produits as $produit) { ?>
            <option value="<?= $produit['produit_id'] ?>" <?= ($factureToUpdate && $factureToUpdate['facture_produit_id'] == $produit['produit_id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($produit['produit_nom']) ?>
            </option>
        <?php } ?>
    </select>

    <input type="number" id="prix_produit" name="prix_produit" placeholder="Prix" value="<?= htmlspecialchars($factureToUpdate['facture_prix'] ?? '') ?>" required>

    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>