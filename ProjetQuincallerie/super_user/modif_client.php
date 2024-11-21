<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Client</title>
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
    <?php
        include "index.php"; // Connexion à la base de données

        $message = '';
        $clientToUpdate = null;

        // Récupération des informations du client à modifier
        if (isset($_GET['mod'])) {
            $clientId = intval($_GET['mod']);
            $req = $con->prepare("SELECT * FROM Client WHERE client_id = ?");
            $req->execute([$clientId]);
            $clientToUpdate = $req->fetch();
        }

        // Mise à jour du client
        if (isset($_POST['update'])) {
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel'])) {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $adresse = $_POST['adresse'];
                $tel = $_POST['tel'];

                $req = $con->prepare("UPDATE Client SET client_nom=?, client_prenom=?, client_adresse=?, client_tel=? WHERE client_id=?");
                if ($req->execute([$nom, $prenom, $adresse, $tel, $clientId])) {
                    $message = 'Client mis à jour avec succès !';
                } else {
                    $message = 'Erreur lors de la mise à jour du client.';
                }
            } else {
                $message = 'Veuillez remplir tous les champs.';
            }
        }
    ?>
</head>
<body>

<h1>Modifier Client</h1>
<form method="post">
    <input type="text" name="nom" placeholder="Nom du client" value="<?= htmlspecialchars($clientToUpdate['client_nom'] ?? '') ?>" required>
    <input type="text" name="prenom" placeholder="Prénom du client" value="<?= htmlspecialchars($clientToUpdate['client_prenom'] ?? '') ?>" required>
    <input type="text" name="adresse" placeholder="Adresse" value="<?= htmlspecialchars($clientToUpdate['client_adresse'] ?? '') ?>" required>
    <input type="text" name="tel" placeholder="Téléphone" value="<?= htmlspecialchars($clientToUpdate['client_tel'] ?? '') ?>" required>
    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>