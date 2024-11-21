<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';

 if (isset($_GET['mod'])) {
            $stockId = intval($_GET['mod']);
            $req = $con->prepare("SELECT * FROM Stock WHERE stock_id = ?");
            $req->execute([$stockId]);
            $stockToUpdate = $req->fetch();
        }


    if (isset($_POST['update'])) {
            if(!empty($_POST['nom_produit'])){
                 $nom_produit = $_POST['nom_produit'];

                $req = $con->prepare("UPDATE Stock SET stock_produit_id=? WHERE stock_id=?");
                $req->execute([$nom_produit, $stockId]);
                header("location: stock.php");
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
    <title>Stock</title>
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
            $suppressionClient = $con->query("delete from stock where stock_id=".$_GET['sup']);
            
        }
    ?>
</head>
<body>

<h1>Stock</h1>

<form id="stockForm" method="POST">
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
    <button type="submit" name="update">Modifier Produit</button>
    <p style="color:red;text-align:center;">
        <?php if(isset($message)){ echo $message; } ?>
    </p>
</form>



</body>
</html>