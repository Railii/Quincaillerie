

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

        if(isset($_POST['send'])){
            
            if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel'])){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $adresse = $_POST['adresse'];
                $tel = $_POST['tel'];

                $req=$con->prepare("INSERT INTO Client(client_nom, client_prenom, client_adresse, client_tel) VALUES(?,?,?,?)");
                $req->execute(array($nom, $prenom, $adresse, $tel));
                header("location: client.php");

            }
        }
    ?>
</head>
<body>

<h1>Client</h1>
<form id="clientForm" method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom du client" pattern="[A-Za-zÀ-ÿ\s]{2,20}">
    <input type="text" id="prenom" name="prenom" placeholder="Prenom du client" pattern="[A-Za-zÀ-ÿ\s]{2,20}">
    <input type="text" id="adresse" name="adresse" placeholder="Adresse">
    <input type="text" id="tel" name="tel" placeholder="Tel" pattern="\+[0-9]*">
    <button type="submit" name="send">Ajouter client</button>
    <p style="color:red;text-align:center;">
        <?php if(isset($message)){ echo $message; } ?>
    </p>
</form>
<a href="client.php">Voir...</a>

</body>
</html>