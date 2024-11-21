<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';

if(isset($_POST['send'])){
    
    if(!empty($_POST['nom_client']) && !empty($_POST['nom_produit']) && !empty($_POST['prix_produit'])){
        $nom_client = $_POST['nom_client'];
        $nom_produit = $_POST['nom_produit'];
        $quantite = $_POST['quantite'];
        $prix = $_POST['prix_produit'];

        $req = $con->prepare("INSERT INTO Facture(facture_client_id,facture_produit_id, facture_prix) VALUES(?,?,?)");
        $req->execute(array($nom_client, $nom_produit,$prix));

    }
}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Quincaillerie</title>
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
            <?php
        if(isset($_GET["sup"])){
            $suppressionClient = $con->query("delete from Facture where facture_id=".$_GET['sup']);
            
        }
    ?>
</head>
<body>

<h1>Facture</h1>

<div style="margin-bottom:20px;">
  
</div>
<form id="produitForm" method="POST">
   <input type="number" id="prix_produit" name="prix_produit" placeholder="Prix" require>

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
    <button type="submit" name="send">Sortir la facture</button>
    <p style="color:red;text-align:center;">
        <?php if(isset($message)){ echo $message; } ?>
    </p>
</form>
<a href="facture.php">Voir...</a>
</body>
</html>