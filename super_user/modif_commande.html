<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';


 if (isset($_GET['mod'])) {
            $commandeId = intval($_GET['mod']);
            $req = $con->prepare("SELECT * FROM Commande WHERE commande_id = ?");
            $req->execute([$commandeId]);
            $commandeToUpdate = $req->fetch();
        }

        if (isset($_POST['update'])) {
            if(!empty($_POST['nom_client']) && !empty($_POST['nom_produit']) && !empty($_POST['date_commande'])){
                $nom_client = $_POST['nom_client'];
                $nom_produit = $_POST['nom_produit'];
                $date_commande = $_POST['date_commande'];

                $req = $con->prepare("UPDATE Commande SET commande_client_id=? ,commande_produit_id=? ,commande_date=?  WHERE commande_id=?");
                $req->execute([$nom_client, $nom_produit, $date_commande, $commandeId]);
                header("location: commande.php");
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
    <title>Commandes</title>
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
            margin-bottom: 20px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #e2e2e2;
        }
    </style>
            <?php include "index.php" ?>
</head>
<body>

<h1>Commande</h1>

<form id="commandeForm" method="post">
    <select name="nom_produit" id="nom_produit">
        <?php  
            $affichageFact = $con->query("Select * from Produit");
            while($dataFact = $affichageFact->fetch()){

        ?>
            <option value=" <?php echo $dataFact["produit_id"]; ?> ">
                <?php echo $dataFact["produit_nom"]; ?>
            </option>
        <?php } ?>
    </select>
    <select name="nom_client" id="nom_client">
        <?php  
            $affichageFact = $con->query("Select * from Client");
            while($dataFact = $affichageFact->fetch()){

        ?>
            <option value=" <?php echo $dataFact["client_id"]; ?> ">
                <?php echo $dataFact["client_nom"]; ?>
            </option>
        <?php } ?>
    </select>
    
    <input type="date" id="" name="date_commande" placeholder="Date de la commande" value="<?= htmlspecialchars($commandeToUpdate['commande_date'] ?? '') ?>" required>
    <button type="submit" name="update">Modifier la commande</button>
    <p style="color:red;text-align:center;">
        <?php if(isset($message)){ echo $message; } ?>
    </p>
</form>


   




</body>
</html>