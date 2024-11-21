

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos clients</title>
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
    <?php
        include "index.php";

        $message = '';

        $req2 = $con->query("SELECT * FROM Client ORDER BY client_id DESC");

    ?>
    <?php
        if(isset($_GET["sup"])){
            $suppressionClient = $con->query("delete from Client where client_id=".$_GET['sup']);
            
        }
    ?>
</head>
<body>

<h1>Client</h1>
<div style="margin-bottom:20px;">
    <table>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>ADRESSE</th>
            <th>TEL</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php while($data = $req2->fetch()){ ?>
            <tr>
                <td><?= $data['client_nom'] ?></td>
                <td><?= $data['client_prenom'] ?></td>
                <td><?= $data['client_adresse'] ?></td>
                <td><?= $data['client_tel'] ?></td>
                <td><a href="client.php?sup=<?php echo $data["client_id"]; ?>">Supprimer</a></td>
                <td><a href="modif_client.php?mod=<?php echo $data["client_id"]; ?>">Modifier</a></td>
        
            </tr>
        <?php } ?>
    </table>
</div>


</body>
</html>