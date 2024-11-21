<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';



$req2 = $con->query("SELECT * FROM Fournisseur ORDER BY  fournisseur_id DESC");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Fournisseurs</title>
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
            $suppressionClient = $con->query("delete from Fournisseur where fournisseur_id=".$_GET['sup']);
            
        }
    ?>
</head>
<body>

<h1>Fournisseur</h1>
<div style="margin-bottom:20px;">
    <table>
        <tr>
            
            <th>NOM</th>
            <th>PRENOM</th>
            <th>TEL</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php while($data = $req2->fetch()){ ?>
            <tr>
                
                <td><?= $data['fournisseur_nom'] ?></td>
                <td><?= $data['fournisseur_prenom'] ?></td>
                <td><?= $data['fournisseur_tel'] ?></td>
                <td><a href="fournisseur.php?sup=<?php echo $data["fournisseur_id"]; ?>">Supprimer</a></td>
                <td><a href="modif_fournisseur.php?mod=<?php echo $data["fournisseur_id"]; ?>">Modifier</a></td>
                
        
            </tr>
        <?php } ?>
    </table>
</div>



   

</body>
</html>