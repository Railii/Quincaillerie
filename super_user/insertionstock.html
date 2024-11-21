<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';

if(isset($_POST['send'])){
    
    if(!empty($_POST['nom_produit'])){
        $nom_produit = $_POST['nom_produit'];
        
        $req = $con->prepare("INSERT INTO Stock(stock_produit_id) VALUES(?)");
        $req->execute(array($nom_produit));
    }
    
}


?>
<?php include "index.php" ?>
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
   
</head>
<body>

<h1>Stock</h1>


<div style="margin-bottom:20px;">
  
</div>
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
    <button type="submit" name="send">Ajouter Produit</button>
    <p style="color:red;text-align:center;">
        <?php if(isset($message)){ echo $message; } ?>
    </p>
</form>

<a href="stock.php">Voir...</a>

</body>
</html>