<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';

 

$req2 = $con->query("SELECT * FROM Produit as p join marque as m where p.marque_id = m.marque_id ORDER BY produit_id DESC");

if(isset ($_GET["sup"])){
    $suppressionProd = $con->query("delete from Produit where produit_id=".$_GET["sup"]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOS PRODUITS</title>
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
            $suppressionClient = $con->query("delete from Produit where produit_id=".$_GET['sup']);
            
        }
    ?>
</head>
<body>

<h1>NOS PRODUITS</h1>

<div style="margin-bottom:20px;">
    <table>
        <tr>
            <th>PRODUIT</th>
            <th>QUANTITE</th>
            <th>PRIX</th>
            <th>MARQUE</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php while($data = $req2->fetch()){ ?>
            <tr>
                <td><?= $data['produit_nom'] ?></td>
                <td><?= $data['produit_quantite'] ?></td>
                <td><?= $data['produit_prix'] ?></td>
                <td><?= $data['marque_nom'] ?></td>
                <td><a href="produit.php?sup=<?php echo $data["produit_id"]; ?>">Supprimer</a></td>
                <td><a href="modif_produit.php?mod=<?php echo $data["produit_id"]; ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</div>


</body>
</html>