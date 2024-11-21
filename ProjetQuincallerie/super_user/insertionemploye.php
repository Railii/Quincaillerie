<?php

$con = new PDO('mysql:host=localhost;dbname=quincaillerie', 'root', '');

$message = '';

if(isset($_POST['send'])){
    
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $tel = $_POST['tel'];

        $req=$con->prepare("INSERT INTO Employe(employe_nom,employe_prenom,employe_adresse,employe_tel) VALUES(?,?,?,?)");
        $req->execute(array($nom, $prenom, $adresse, $tel));

    
    }
}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos employes</title>
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
            $suppressionClient = $con->query("delete from Employe where employe_id=".$_GET['sup']);
            
        }
    ?>
</head>
<body>


<h1>Employe</h1>
<div style="margin-bottom:20px;">
   
</div>
<form id="employeForm" method="POST">
    <input type="text" id="nom" name="nom" placeholder="Nom de l' employe" require pattern="[A-Za-zÀ-ÿ\s]{2,20}">
    <input type="text" id="prenom" name="prenom" placeholder="Prenom de l' employe" require pattern="[A-Za-zÀ-ÿ\s]{2,20}">
    <input type="text" id="adresse" name="adresse" placeholder="Adresse" require>
    <input type="text" id="tel" name="tel" placeholder="Tel" require pattern="\+[0-9]*">
    <button type="submit" name="send">Ajouter employe</button>
    <p style="color:red;text-align:center;">
        <?php if(isset($message)){ echo $message; } ?>
    </p>

   
</form>

<a href="employe.php">Voir...</a>

</body>
</html>