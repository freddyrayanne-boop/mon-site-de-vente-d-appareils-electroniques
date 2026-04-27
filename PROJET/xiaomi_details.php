<?php
// =====================================================================
//  iphone_detail.php — Page de détail DYNAMIQUE
//  Usage : iphone_detail.php?model=iphone_xr
//           iphone_detail.php?model=iphone_11
//           iphone_detail.php?model=iphone_6   etc.
//
//  Cette page unique lit le paramètre GET "model" et affiche
//  les données correspondantes. Plus besoin d'une page par modèle.
// =====================================================================

// ── BASE DE DONNÉES DE TOUS LES MODÈLES ──────────────────────────────
// Chaque entrée : nom, image (dans /images/), prix, specs, video, slug
$catalogue = [

    'redmi_9A' => [
        'nom'        => 'redmi 9A',
        'sous_titre' => 'xiaomi ·  · Un classique abordable',
        'prix'       => '55 000',
        'image'      => 'redmi9A.jpg',   // nom réel du fichier
        'video'      => '',               // pas de vidéo pour ce modèle
        'specs'      => [
            ['icon' => 'fa-display',          'label' => 'Écran',         'val' => '4,7" IPS LCD Retina · 1334×750 px'],
            ['icon' => 'fa-microchip',        'label' => 'Processeur',    'val' => 'Apple A8 (20 nm)'],
            ['icon' => 'fa-memory',           'label' => 'Mémoire',       'val' => '1 Go RAM · 16 / 64 / 128 Go'],
            ['icon' => 'fa-camera',           'label' => 'Caméra',        'val' => '8 MP f/2.2 + 1,2 MP FaceTime'],
            ['icon' => 'fa-battery-half',     'label' => 'Batterie',      'val' => '1 810 mAh · jusqu\'à 14h autonomie'],
            ['icon' => 'fa-wifi',             'label' => 'Connectivité',  'val' => '4G LTE · Wi-Fi n · Bluetooth 4.2'],
            ['icon' => 'fa-palette',          'label' => 'Coloris',       'val' => 'Gris sidéral · Argent · Or'],
            ['icon' => 'fa-shield-halved',    'label' => 'Sécurité',      'val' => 'Touch ID (capteur empreinte)'],
        ],
    ],

    'redmi_12' => [
        'nom'        => 'redmi 12',
        'sous_titre' => 'xiaomi · iOS 15 · Résistant à l\'eau IP67',
        'prix'       => '105000',
        'image'      => 'redmi12.jpg',
        'video'      => '',
        'specs'      => [
            ['icon' => 'fa-display',          'label' => 'Écran',         'val' => '4,7" IPS LCD Retina · 1334×750 px'],
            ['icon' => 'fa-microchip',        'label' => 'Processeur',    'val' => 'Apple A10 Fusion (16 nm)'],
            ['icon' => 'fa-memory',           'label' => 'Mémoire',       'val' => '2 Go RAM · 32 / 128 / 256 Go'],
            ['icon' => 'fa-camera',           'label' => 'Caméra',        'val' => '12 MP f/1.8 OIS + 7 MP FaceTime'],
            ['icon' => 'fa-battery-three-quarters', 'label' => 'Batterie','val' => '1 960 mAh · jusqu\'à 21h autonomie'],
            ['icon' => 'fa-wifi',             'label' => 'Connectivité',  'val' => '4G LTE · Wi-Fi ac · Bluetooth 4.2 · NFC'],
            ['icon' => 'fa-droplet',          'label' => 'Étanchéité',    'val' => 'IP67 — résistant à l\'eau (1 m / 30 min)'],
            ['icon' => 'fa-shield-halved',    'label' => 'Sécurité',      'val' => 'Touch ID · Secure Enclave'],
        ],
    ],

    'redmi_13' => [
        'nom'        => 'redmi 13',
        'sous_titre' => 'xiaomi · iOS 16 · Charge sans fil Qi',
        'prix'       => '125 000',
        'image'      => 'redmi13.jpg',
        'video'      => 'redmi13C.mp4',
        'specs'      => [
            ['icon' => 'fa-display',          'label' => 'Écran',         'val' => '4,7" IPS LCD Retina · 1334×750 px'],
            ['icon' => 'fa-microchip',        'label' => 'Processeur',    'val' => 'Apple A11 Bionic (10 nm)'],
            ['icon' => 'fa-memory',           'label' => 'Mémoire',       'val' => '2 Go RAM · 64 / 256 Go'],
            ['icon' => 'fa-camera',           'label' => 'Caméra',        'val' => '12 MP f/1.8 OIS + 7 MP Portrait mode'],
            ['icon' => 'fa-battery-full',     'label' => 'Batterie',      'val' => '1 821 mAh · Charge rapide + sans fil Qi'],
            ['icon' => 'fa-wifi',             'label' => 'Connectivité',  'val' => '4G LTE · Wi-Fi ac · Bluetooth 5.0 · NFC'],
            ['icon' => 'fa-droplet',          'label' => 'Étanchéité',    'val' => 'IP67 — résistant à l\'eau'],
            ['icon' => 'fa-shield-halved',    'label' => 'Sécurité',      'val' => 'Touch ID · Secure Enclave'],
        ],
    ],

    'iphone_xr' => [
        'nom'        => 'iPhone XR',
        'sous_titre' => 'Apple · iOS 16 · Liquid Retina HD',
        'prix'       => '120 000',
        'image'      => 'XR.jpg',
        'video'      => 'images/video/video iphone xr.mp4',
        'specs'      => [
            ['icon' => 'fa-display',          'label' => 'Écran',         'val' => '6,1" LCD Liquid Retina HD · 1792×828 px'],
            ['icon' => 'fa-microchip',        'label' => 'Processeur',    'val' => 'Apple A12 Bionic (7 nm)'],
            ['icon' => 'fa-memory',           'label' => 'Mémoire',       'val' => '3 Go RAM · 64 / 128 / 256 Go'],
            ['icon' => 'fa-camera',           'label' => 'Caméra',        'val' => '12 MP f/1.8 + 7 MP FaceTime HD'],
            ['icon' => 'fa-battery-three-quarters', 'label' => 'Batterie','val' => '2 942 mAh · jusqu\'à 25h autonomie'],
            ['icon' => 'fa-wifi',             'label' => 'Connectivité',  'val' => '4G LTE · Wi-Fi ac · Bluetooth 5.0 · NFC'],
            ['icon' => 'fa-palette',          'label' => 'Coloris',       'val' => 'Noir · Blanc · Rouge · Bleu · Jaune · Corail'],
            ['icon' => 'fa-shield-halved',    'label' => 'Sécurité',      'val' => 'Face ID · Chiffrement AES 256-bit'],
        ],
    ],

    'iphone_11' => [
        'nom'        => 'iPhone 11',
        'sous_titre' => 'Apple · iOS 17 · Double capteur photo',
        'prix'       => '145 000',
        'image'      => 'iphone11.jpg',
        'video'      => '',
        'specs'      => [
            ['icon' => 'fa-display',          'label' => 'Écran',         'val' => '6,1" IPS LCD Liquid Retina · 1792×828 px'],
            ['icon' => 'fa-microchip',        'label' => 'Processeur',    'val' => 'Apple A13 Bionic (7 nm)'],
            ['icon' => 'fa-memory',           'label' => 'Mémoire',       'val' => '4 Go RAM · 64 / 128 / 256 Go'],
            ['icon' => 'fa-camera',           'label' => 'Caméra',        'val' => 'Double 12 MP (grand angle + ultra grand angle) + 12 MP Face ID'],
            ['icon' => 'fa-battery-full',     'label' => 'Batterie',      'val' => '3 110 mAh · jusqu\'à 17h vidéo · Charge rapide'],
            ['icon' => 'fa-wifi',             'label' => 'Connectivité',  'val' => '4G LTE · Wi-Fi 6 · Bluetooth 5.0 · NFC'],
            ['icon' => 'fa-droplet',          'label' => 'Étanchéité',    'val' => 'IP68 — résistant à l\'eau (2 m / 30 min)'],
            ['icon' => 'fa-shield-halved',    'label' => 'Sécurité',      'val' => 'Face ID · Secure Enclave'],
        ],
    ],

];

// ── LECTURE DU PARAMÈTRE GET ──────────────────────────────────────────
$model = isset($_GET['model']) ? $_GET['model'] : '';

// Sécurité : on vérifie que le modèle existe dans le catalogue
if (!array_key_exists($model, $catalogue)) {
    // Modèle inconnu → redirection vers le catalogue
    header('Location: apple_produits.php');
    exit;
}

$p = $catalogue[$model]; // raccourci
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($p['nom']); ?> — Fiche Détail | TechStore</title>
    <link rel="stylesheet" href="freddy4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .detail-wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px 80px;
        }
        .nav-top {
            padding: 28px 0 20px;
            display: flex;
            align-items: center;
            gap: 12px;
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
        .breadcrumb { font-size: 0.8rem; color: rgba(255,255,255,0.4); }
        .breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; }
        .breadcrumb a:hover { color: white; }

        .product-title { margin-bottom: 30px; }
        .product-title h1 {
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 700;
            letter-spacing: 2px;
            background: linear-gradient(to right, #eee, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 6px;
        }
        .product-title .subtitle { color: rgba(255,255,255,0.5); font-size: 0.9rem; letter-spacing: 1px; }
        .product-title .prix {
            font-size: 1.8rem;
            font-weight: 700;
            color: #00e676;
            margin-top: 10px;
            display: block;
        }

        .product-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }
        @media (max-width: 620px) { .product-layout { grid-template-columns: 1fr; } }

        .photo-panel {
            background: white;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            min-height: 300px;
        }
        .photo-panel img {
            max-width: 100%;
            max-height: 300px;
            object-fit: contain;
            transition: transform 0.4s ease;
        }
        .photo-panel img:hover { transform: scale(1.05); }

        .specs-panel { display: flex; flex-direction: column; gap: 10px; }

        .spec-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.1);
            border-left: 3px solid #007bff;
            border-radius: 10px;
            padding: 10px 14px;
            transition: 0.2s;
        }
        .spec-item:hover { background: rgba(0,123,255,0.12); border-left-color: #00e0ff; }
        .spec-icon { font-size: 1.1rem; color: #7ec8ff; min-width: 24px; text-align: center; margin-top: 2px; }
        .spec-label { font-size: 0.7rem; color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: 1px; display: block; }
        .spec-val   { font-size: 0.88rem; font-weight: 600; color: rgba(255,255,255,0.9); }

        .section-block {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 28px;
        }
        .section-block h3 {
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.6);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .section-block h3 i { color: #007bff; }

        .no-video {
            text-align: center;
            color: rgba(255,255,255,0.3);
            font-size: 0.85rem;
            padding: 20px;
        }

        .video-container {
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
            background: black;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .video-container video {
            width: 100%;
            max-height: 400px;
            display: block;
        }

        .download-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        @media (max-width: 500px) { .download-grid { grid-template-columns: 1fr; } }

        .dl-card {
            background: rgba(255,255,255,0.05);
            border: 1px dashed rgba(255,255,255,0.18);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: 0.25s;
        }
        .dl-card:hover { background: rgba(0,123,255,0.1); border-color: #007bff; }
        .dl-card .dl-icon { font-size: 2.4rem; margin-bottom: 10px; }
        .dl-card p { font-size: 0.82rem; color: rgba(255,255,255,0.5); margin-bottom: 14px; line-height: 1.5; }
        .btn-dl {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            transition: 0.25s;
        }
        .btn-dl.disabled { opacity: 0.35; cursor: not-allowed; pointer-events: none; }
        .btn-photo { background: #2c3e50; color: #a8d8ff; border: 1px solid #3a5068; }
        .btn-photo:hover { background: #34495e; }
        .btn-video { background: #1a3a2a; color: #7fffb2; border: 1px solid #27ae60; }
        .btn-video:hover { background: #1e4a35; }
    </style>
</head>
<body>

<div class="detail-wrapper">

    <!-- Navigation -->
    <div class="nav-top">
        <a href="xiaomi_produits.php" class="back-btn"><i class="fa fa-arrow-left"></i> Retour xiaomi</a>
        <span class="breadcrumb">
            <a href="freddy3.php">Accueil</a> &rsaquo;
            <a href="xiaomi_produits.php">xiaomi</a> &rsaquo;
            <?php echo htmlspecialchars($p['nom']); ?>
        </span>
    </div>

    <!-- Titre & Prix -->
    <div class="product-title">
        <h1><?php echo htmlspecialchars($p['nom']); ?></h1>
        <span class="subtitle"><?php echo htmlspecialchars($p['sous_titre']); ?></span>
        <span class="prix"><?php echo $p['prix']; ?> FCFA</span>
    </div>

    <!-- Photo + Specs -->
    <div class="product-layout">

        <!-- Photo — rawurlencode gère les espaces dans le nom du fichier -->
        <div class="photo-panel">
            <img src="images/<?php echo rawurlencode($p['image']); ?>"
                 alt="<?php echo htmlspecialchars($p['nom']); ?>"
                 onerror="this.src='images/xiaomi.jpg'">
        </div>

        <!-- Spécifications dynamiques -->
        <div class="specs-panel">
            <?php foreach ($p['specs'] as $spec): ?>
            <div class="spec-item">
                <span class="spec-icon"><i class="fa <?php echo $spec['icon']; ?>"></i></span>
                <div>
                    <span class="spec-label"><?php echo htmlspecialchars($spec['label']); ?></span>
                    <span class="spec-val"><?php echo htmlspecialchars($spec['val']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Vidéo -->
    <div class="section-block">
        <h3><i class="fa fa-circle-play"></i> Vidéo de présentation</h3>
        <?php if (!empty($p['video'])): ?>
        <div class="video-container">
            <video controls preload="metadata"
                   poster="images/<?php echo rawurlencode($p['image']); ?>">
                <source src="<?php echo htmlspecialchars($p['video']); ?>" type="video/mp4">
                Votre navigateur ne supporte pas la lecture vidéo HTML5.
            </video>
        </div>
        <?php else: ?>
        <p class="no-video">📽️ Aucune vidéo disponible pour ce modèle pour l'instant.</p>
        <?php endif; ?>
    </div>

    <!-- Téléchargements -->
    <div class="section-block">
        <h3><i class="fa fa-download"></i> Téléchargements</h3>
        <div class="download-grid">

            <!-- Photo -->
            <div class="dl-card">
                <div class="dl-icon">🖼️</div>
                <p>Photo officielle <?php echo htmlspecialchars($p['nom']); ?><br>Format JPG</p>
                <a href="images/<?php echo rawurlencode($p['image']); ?>"
                   download="<?php echo rawurlencode($p['nom']); ?>_photo.jpg"
                   class="btn-dl btn-photo">
                    <i class="fa fa-image"></i> Télécharger la photo
                </a>
            </div>

            <!-- Vidéo -->
            <div class="dl-card">
                <div class="dl-icon">🎬</div>
                <p>Vidéo de présentation <?php echo htmlspecialchars($p['nom']); ?><br>Format MP4</p>
                <?php if (!empty($p['video'])): ?>
                <a href="<?php echo htmlspecialchars($p['video']); ?>"
                   download="<?php echo rawurlencode($p['nom']); ?>_video.mp4"
                   class="btn-dl btn-video">
                    <i class="fa fa-video"></i> Télécharger la vidéo
                </a>
                <?php else: ?>
                <span class="btn-dl btn-video disabled">
                    <i class="fa fa-video"></i> Vidéo non disponible
                </span>
                <?php endif; ?>
            </div>

        </div>
    </div>

</div>

<footer>
    <p>&copy; 2026 — TechStore · Vente d'Appareils Électroniques · Tous droits réservés.</p>
    <div class="social-icons">
        <span>📱 WhatsApp : +237 673 814 636</span>
        <span>|</span>
        <span>📘 Facebook : techstore</span>
        <span>|</span>
        <span>📸 Instagram : techstore</span>
    </div>
</footer>

</body>
</html>
