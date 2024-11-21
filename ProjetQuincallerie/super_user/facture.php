<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';



$req2 = $con->query("SELECT * FROM facture as f join produit as p where f.facture_produit_id=p.produit_id ORDER BY facture_id DESC");

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
    <table>
        <tr>
            <th>NOM_CLIENT</th>
            <th>NOM_PRODUIT</th>
            <th>QUANTITE</th>
            <th>PRIX</th>
            <th colspan="2">Actions</th>

        </tr>
        <?php while($data = $req2->fetch()){ ?>
            <tr>
                <td><?= $data['produit_nom'] ?></td>
                <td><?= $data['produit_nom'] ?></td>
                <td><?= $data['facture_prix'] ?></td>
                <td><a href="facture.php?sup=<?php echo $data["facture_id"]; ?>">Supprimer</a></td>
                <td><a href="modif_facture.php?mod=<?php echo $data["facture_id"]; ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</div>


</body>
</html>