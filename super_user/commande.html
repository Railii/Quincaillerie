<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';

$req2 = $con->query("SELECT * FROM Commande as c join client as cl where c.commande_client_id = cl.client_id ORDER BY commande_id DESC");
$req3 = $con->query("SELECT * FROM Commande as c join produit as p where c.commande_produit_id = p.produit_id ORDER BY commande_id DESC");

?>

<?php
        if(isset($_GET["sup"])){
            $suppressionCommande = $con->query("delete from Commande where commande_id=".$_GET['sup']);
            
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
<div style="margin-bottom:20px;">
    <table>
        <tr>
            <th>NOM_CLIENT</th>
            <th>NOM_PRODUIT</th>
            <th>DATE_COMMANDE</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php while($data = $req2->fetch()){ ?>
            <tr>
                
                <td><?= $data['client_nom'] ?></td>
                <td><?= $data['client_nom'] ?></td>
                <td><?= $data['commande_date'] ?></td>
                <td><a href="commande.php?sup=<?php echo $data["commande_id"]; ?>">Supprimer</a></td>
                <td><a href="modif_commande.php?mod=<?php echo $data["commande_id"]; ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</div>




   




</body>
</html>