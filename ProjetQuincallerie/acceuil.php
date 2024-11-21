<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - Quincaillerie</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .icon {
            text-align: center;
            margin: 20px 0;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: white;
            margin: 0 10px;
        }
        @media (max-width: 600px) {
            nav a {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenue à la Quincaillerie</h1>
    <p>Votre partenaire pour tous vos besoins en matériaux et outils</p>
</header>

<nav>
    <a href="insertionproduit.php">Nos Produits</a>
    <a href="insertionmarque.php">Marques</a>
    <a href="insertioncommande.php">Commandes</a>  
</nav>
<div class="icon">
    <img src="php3.png" alt="photo Quincaillerie" style="width: 100%; "> 
</div>

<footer>
    <div>
        <a href="https://www.facebook.com">Facebook</a>
        <a href="https://www.twitter.com">Twitter</a>
        <a href="https://www.instagram.com">Instagram</a>
        <a href="https://www.linkedin.com">LinkedIn</a>
    </div>
    <div>
        <break><p>Adresse: Kigobe Nord, Avenue de l'ambassade numero 15<P><break>
        <p>Contactez-nous au : <strong>+257 71 00 00 00</strong></p>
    </div>
    <p>&copy; <span id="year"></span> Votre Entreprise. Tous droits réservés.</p>
    
    <script>
        // Met à jour l'année dans le footer
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</footer>

</body>
</html>insertion