<?php
include('apple2.php');
try {
    $query = $db->prepare("SELECT * FROM produits WHERE marque = 'apple' ORDER BY modele ASC");
    $query->execute();
    $iphones = $query->fetchAll();
}
catch (Exception $e) {
    die('Erreur : ' .
    $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DIFFERENTS TYPES DE IPHONES</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),
            url("C:/Users/DELL/Documents/arriere.jpg");
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        .liste-apple {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 40px 20px;
        }
        .iphone-item {
            display: flex;
            align-items: center;
            background: rgba(255,255,255,0.95);
            width: 100%;
            max-width: 650px;
            padding: 15px;
            border-radius: 15px;
            text-decoration: none;
            color: #222;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .iphone-item:hover {
            transform: translateX(10px);
            background: #ffffff;
        }
        .iphone-item img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-right: 25px;
        }
        .infos {
            flex-grow: 1;
        }
        .infos h3 {
            margin: 0;
            font-size: 1.2rem;
            color: #d32f2f;
            font-weight: bold;
            margin: 5px 0;
        }
        .btn-plus {
            display: inline-block;
            margin-top: 5px;
            padding: 5px 12px;
            background: #007bff;
            color: white;
            border-radius: 5px;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <h1> COLLECTION APPLE</h1>
    <div class="liste-apple"> <?php
    if(empty($iphones)): ?>
    <p>Aucun iphone n'est disponible pour le moment.</p>
    <?php else: ?>
        <?php foreach ($iphones as $iphone): ?>
            <a href="produit.php?id=<?php echo $iphone['id']; ?>"class="iphone-item">
                <img src="images/<?php echo $iphone['image_principale']; ?>" alt="IPHONE7">
                <div class="infos">
                    <h3><?php echo $iphone ['modele']; ?></h3>
                    <p class="prix"><?php echo number_format($iphone['prix_decimal'], 0,'60000','70000','80000'); ?> FCFA </p>
                    <span class="btn-plus"> Détails & caractéristiques </span>
    </div>
        </a>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
        <p style="text-align: center;">
            <a href="index.php" style="color: white; text-decoration: none;"></a>
        </p>
    
</body>
</html>