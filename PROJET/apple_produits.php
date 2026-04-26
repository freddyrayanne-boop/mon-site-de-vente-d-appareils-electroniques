<?php
// =====================================================================
//  CATALOGUE APPLE — apple_produits.php
//  Affiche tous les iPhones disponibles.
//  Cliquer sur un modèle ouvre sa page de détail.
// =====================================================================
include 'db.php';

// Tentative de récupération depuis la base de données
$produitsDB = [];
try {
    $req = $pdo->query("SELECT * FROM produits WHERE nom LIKE '%iphone%' OR nom LIKE '%iPhone%' ORDER BY nom");
    $produitsDB = $req->fetchAll();
} catch (Exception $e) {
    // Si la table n'existe pas encore, on continue avec les produits statiques
}

// Produits statiques de secours (toujours affichés si la BD est vide)
$produits_statiques = [
    ['nom' => 'iPhone 6',  'image_url' => 'iphone 6.jpg',  'prix' => 55000,  'slug' => 'iphone_6'],
    ['nom' => 'iPhone 7',  'image_url' => 'iphone 7.jpg',  'prix' => 65000,  'slug' => 'iphone_7'],
    ['nom' => 'iPhone 8',  'image_url' => 'iphone 8.jpg',  'prix' => 80000,  'slug' => 'iphone_8'],
    ['nom' => 'iPhone XR', 'image_url' => 'XR.jpg',         'prix' => 120000, 'slug' => 'iphone_xr'],
    ['nom' => 'iPhone 11', 'image_url' => 'iphone 11.jpg', 'prix' => 145000, 'slug' => 'iphone_11'],
];

// Si la BD a des résultats on les utilise, sinon statiques
$produits = !empty($produitsDB) ? $produitsDB : $produits_statiques;

// Table de routing : slug → fichier de détail
$detail_pages = [
    'iphone_xr'  => 'iphone_xr.php',
    'iphone_6'   => 'iphone_xr.php',   // remplacer par iphone_6.php si créé
    'iphone_7'   => 'iphone_xr.php',
    'iphone_8'   => 'iphone_xr.php',
    'iphone_11'  => 'iphone_xr.php',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple — Catalogue iPhones | TechStore</title>
    <link rel="stylesheet" href="freddy4.css">
    <style>
        /* ---- styles spécifiques à cette page ---- */
        .page-header {
            padding: 40px 20px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            padding: 9px 18px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: 0.25s;
        }
        .back-btn:hover { background: rgba(255,255,255,0.2); }

        .page-title {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .page-title img { width: 50px; height: 50px; object-fit: contain; background: white; border-radius: 10px; padding: 6px; }
        .page-title h1 { font-size: 2rem; letter-spacing: 3px; text-transform: uppercase;
            background: linear-gradient(to right, #aaa, #fff); -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; background-clip: text; }

        /* Grille de produits */
        .produits-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .produit-card {
            flex: 0 0 auto;
            width: 200px;
            background: rgba(255,255,255,0.07);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            color: white;
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
            display: flex;
            flex-direction: column;
        }
        .produit-card:hover {
            transform: translateY(-8px);
            border-color: #007bff;
            box-shadow: 0 12px 30px rgba(0, 123, 255, 0.25);
        }

        .produit-card .img-wrap {
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            height: 180px;
        }
        .produit-card .img-wrap img {
            max-height: 140px;
            max-width: 100%;
            object-fit: contain;
        }

        .produit-card .card-info {
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
        }
        .produit-card .card-nom {
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }
        .produit-card .card-prix {
            font-size: 0.95rem;
            color: #00e676;
            font-weight: 600;
        }
        .produit-card .card-cta {
            margin-top: auto;
            display: inline-block;
            text-align: center;
            background: rgba(0, 123, 255, 0.25);
            border: 1px solid rgba(0, 123, 255, 0.5);
            color: #7ec8ff;
            padding: 7px;
            border-radius: 8px;
            font-size: 0.8rem;
            transition: 0.2s;
        }
        .produit-card:hover .card-cta {
            background: #007bff;
            color: white;
        }

        .section-label {
            font-size: 0.75rem;
            color: rgba(255,255,255,0.4);
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 0 20px 6px;
            max-width: 1200px;
            margin: 20px auto 0;
        }
    </style>
</head>
<body>

    <div class="page-header">
        <a href="freddy3.php" class="back-btn">← Retour</a>
        <div class="page-title">
            <img src="images/apple.jpg" alt="Apple">
            <h1>Apple</h1>
        </div>
    </div>

    <p class="section-label">Cliquez sur un modèle pour voir les détails, la vidéo et télécharger</p>

    <div class="produits-grid">
        <?php foreach ($produits as $p):
            // Déterminer le lien de détail
            $slug = isset($p['slug']) ? $p['slug'] : strtolower(str_replace(' ', '_', $p['nom']));
            $lien = isset($detail_pages[$slug]) ? $detail_pages[$slug] : 'iphone_xr.php';
            // Si le modèle est l'iPhone XR, lien direct
            if (stripos($p['nom'], 'xr') !== false) $lien = 'iphone_xr.php';
            $prix_fmt = number_format((float)$p['prix'], 0, ',', ' ');
        ?>
        <a href="<?php echo htmlspecialchars($lien); ?>" class="produit-card">
            <div class="img-wrap">
                <img src="images/<?php echo htmlspecialchars($p['image_url']); ?>" alt="<?php echo htmlspecialchars($p['nom']); ?>">
            </div>
            <div class="card-info">
                <span class="card-nom"><?php echo htmlspecialchars($p['nom']); ?></span>
                <span class="card-prix"><?php echo $prix_fmt; ?> FCFA</span>
                <span class="card-cta">Voir le détail →</span>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>&copy; 2026 — TechStore · Tous droits réservés.</p>
        <div class="social-icons">
            <span>📱 WhatsApp : +237 673 814 636</span>
            <span>|</span>
            <span>📘 Facebook : techstore</span>
        </div>
    </footer>

</body>
</html>
