<?php
include 'db.php';

// Produits statiques — image_url avec urlencode() pour les espaces
$produits = [
    [
        'nom'       => 'redmi 9A',
        'image_url' => 'redmi9A.jpg',
        'prix'      => 115000,
        'model'     => 'redmi_9A',
    ],
    [
        'nom'       => 'redmi 13',
        'image_url' => 'redmi13.jpg',
        'prix'      => 125000,
        'model'     => 'redmi_13',
    ],
    [
        'nom'       => 'redmi 12',
        'image_url' => 'redmi12.jpg',
        'prix'      => 105000,
        'model'     => 'redmi_12',
    ],
    [
        'nom'       => 'redmi note 14',
        'image_url' => 'redminote14.jpg',
        'prix'      => 175000,
        'model'     => 'redmi_note_14',
    ],
    [
        'nom'       => 'redmi 14C',
        'image_url' => 'redmi14C.jpg',
        'prix'      => 115000,
        'model'     => 'redmi_14C',
    ],
[
        'nom'       => 'redmi 15',
        'image_url' => 'redmi15.jpg',
        'prix'      => 140000,
        'model'     => 'redmi_15',
    ],
    [
        'nom'       => 'redmi A5',
        'image_url' => 'redmiA5.jpg',
        'prix'      => 140000,
        'model'     => 'redmi_A5',
    ];


// Si la BD est disponible, on tente de compléter les prix
try {
    $req = $pdo->query("SELECT * FROM produits WHERE nom LIKE '%redmi%' OR nom LIKE '%redmi%'");
    $rows = $req->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($rows)) {
        // Met à jour les prix depuis la BD
        foreach ($produits as &$p) {
            foreach ($rows as $row) {
                if (stripos($row['nom'], str_replace('redmi ', '', $p['nom'])) !== false) {
                    $p['prix'] = $row['prix'];
                }
            }
        }
        unset($p);
    }
} catch (Exception $e) {
    // BD non disponible, on continue avec les données statiques
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xiaomi — Catalogue xiaomi | TechStore</title>
    <link rel="stylesheet" href="freddy4.css">
    <style>
        .page-header {
            padding: 40px 20px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
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
        .page-title img {
            width: 50px; height: 50px;
            object-fit: contain;
            background: white;
            border-radius: 10px;
            padding: 6px;
        }
        .page-title h1 {
            font-size: 2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            background: linear-gradient(to right, #aaa, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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

        /* Grille de produits */
        .produits-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            padding: 16px 20px 60px;
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
            box-shadow: 0 12px 30px rgba(0,123,255,0.25);
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
        .card-nom  { font-weight: 600; font-size: 1rem; }
        .card-prix { font-size: 0.95rem; color: #00e676; font-weight: 600; }
        .card-cta  {
            margin-top: auto;
            display: block;
            text-align: center;
            background: rgba(0,123,255,0.2);
            border: 1px solid rgba(0,123,255,0.4);
            color: #7ec8ff;
            padding: 7px;
            border-radius: 8px;
            font-size: 0.8rem;
            transition: 0.2s;
        }
        .produit-card:hover .card-cta { background: #007bff; color: white; }
    </style>
</head>
<body>

<div class="page-header">
    <a href="freddy3.php" class="back-btn">← Retour</a>
    <div class="page-title">
        <img src="images/xiaomi.jpg" alt="Xiaomi">
        <h1>XIAOMI</h1>
    </div>
</div>

<p class="section-label">Cliquez sur un modèle pour voir les détails, la vidéo et télécharger</p>

<div class="produits-grid">
    <?php foreach ($produits as $p):
        /* ─── CORRECTION CLÉ ───────────────────────────────────────
           Lien vers iphone_detail.php avec le paramètre ?model=xxx
           Chaque iPhone ouvre SA propre fiche, pas forcément XR
           ──────────────────────────────────────────────────────── */
        $lien      = 'xiaomi_detail.php?model=' . urlencode($p['model']);

        /* URL-encode le nom de fichier pour gérer les espaces
           "iphone 6.jpg" → "iphone%206.jpg" dans le src            */
        $img_src   = 'images/' . rawurlencode($p['image_url']);

        $prix_fmt  = number_format((float)$p['prix'], 0, ',', ' ');
    ?>
    <a href="<?php echo $lien; ?>" class="produit-card">
        <div class="img-wrap">
            <img src="<?php echo $img_src; ?>"
                 alt="<?php echo htmlspecialchars($p['nom']); ?>"
                 onerror="this.src='images/xiaomi.jpg'">
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
