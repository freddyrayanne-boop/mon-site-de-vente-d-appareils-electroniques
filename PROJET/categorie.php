<?php 
include 'db.php'; // On se connecte à la base

// On récupère la marque cliquée dans le lien
$la_marque = $_GET['marque']; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gamme <?php echo $la_marque; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modèles <?php echo $la_marque; ?> disponibles</h1>

    <div class="brand-card">
        <?php
        // On cherche uniquement les produits qui commencent par la marque choisie
        $query = "SELECT * FROM produits WHERE nom LIKE '$la_marque%'";
        $resultat = $pdo->query($query);

        while ($p = $resultat->fetch()) : ?>
            <div class="produit-card">
                <img src="images/<?php echo $p['image_url']; ?>" alt="photo">
                <h3><?php echo $p['nom']; ?></h3>
                <p class="prix"><?php echo number_format($p['prix'], 0, ',', ' '); ?> FCFA</p>
            </div>
        <?php endwhile; ?>
    </div>

    <a href="freddy3.php">Retour à l'accueil</a>
</body>
</html>
