<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';


$req2 = $con->query("SELECT * FROM Marque ORDER BY marque_id DESC");

?>
    <?php
        if(isset($_GET["sup"])){
            $suppressionClient = $con->query("delete from Marque where marque_id=".$_GET['sup']);
            
        }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos marques</title>
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

<h1>Nos Marques</h1>


<div style="margin-bottom:20px;">
    <table>
        <tr>
            
            <th>MARQUE</th>
            <th colspan="2">Actions</th>
          
        </tr>
        <?php while($data = $req2->fetch()){ ?>
            <tr>
                
                <td><?= $data['marque_nom'] ?></td>
                <td><a href="marquer.php?sup=<?php echo $data["marque_id"]; ?>">Supprimer</a></td>
                <td><a href="modif_marque.php?mod=<?php echo $data["marque_id"]; ?>">Modifier</a></td>
                
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>