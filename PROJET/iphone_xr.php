<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone XR — Fiche Détail | TechStore</title>
    <link rel="stylesheet" href="freddy4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* =====================================================
           PAGE DÉTAIL IPHONE XR
           ===================================================== */
        .detail-wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px 80px;
        }

        /* Bouton retour */
        .nav-top {
            padding: 28px 0 20px;
            display: flex;
            align-items: center;
            gap: 12px;
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

        /* Titre produit */
        .product-title {
            margin-bottom: 30px;
        }
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

        /* =====================================================
           LAYOUT DEUX COLONNES : photo gauche / infos droite
           ===================================================== */
        .product-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }
        @media (max-width: 620px) {
            .product-layout { grid-template-columns: 1fr; }
        }

        /* ---- Photo principale ---- */
        .photo-panel {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            min-height: 320px;
        }
        .photo-panel img {
            max-width: 100%;
            max-height: 320px;
            object-fit: contain;
            transition: transform 0.4s ease;
        }
        .photo-panel img:hover { transform: scale(1.05); }

        /* ---- Caractéristiques ---- */
        .specs-panel {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .spec-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.1);
            border-left: 3px solid #007bff;
            border-radius: 10px;
            padding: 12px 16px;
            transition: 0.2s;
        }
        .spec-item:hover { background: rgba(0,123,255,0.12); border-left-color: #00e0ff; }
        .spec-item .spec-icon { font-size: 1.2rem; color: #7ec8ff; min-width: 26px; text-align: center; margin-top: 1px; }
        .spec-item .spec-text {}
        .spec-item .spec-label { font-size: 0.72rem; color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: 1px; display: block; }
        .spec-item .spec-val { font-size: 0.95rem; font-weight: 600; color: rgba(255,255,255,0.92); }

        /* =====================================================
           SECTION VIDÉO
           ===================================================== */
        .section-block {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 28px;
        }
        .section-block h3 {
            font-size: 1rem;
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
            background: #000;
        }

        /* =====================================================
           SECTION TÉLÉCHARGEMENT
           ===================================================== */
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

        .dl-card .dl-icon { font-size: 2.5rem; margin-bottom: 10px; }
        .dl-card p { font-size: 0.82rem; color: rgba(255,255,255,0.5); margin-bottom: 14px; line-height: 1.5; }

        .btn-dl {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            transition: 0.25s;
            border: none;
            cursor: pointer;
        }
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
        <a href="apple_produits.php" class="back-btn"><i class="fa fa-arrow-left"></i> Retour Apple</a>
        <span class="breadcrumb">
            <a href="freddy3.php">Accueil</a> &rsaquo;
            <a href="apple_produits.php">Apple</a> &rsaquo;
            iPhone XR
        </span>
    </div>

    <!-- Titre & Prix -->
    <div class="product-title">
        <h1>iPhone XR</h1>
        <span class="subtitle">Apple · iOS 16 · Reconditionné / Neuf disponible</span>
        <span class="prix">120 000 FCFA</span>
    </div>

    <!-- Layout : Photo + Caractéristiques -->
    <div class="product-layout">

        <!-- Photo -->
        <div class="photo-panel">
            <img src="images/XR.jpg" alt="iPhone XR">
        </div>

        <!-- Spécifications -->
        <div class="specs-panel">

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-display"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Écran</span>
                    <span class="spec-val">6,1" LCD Liquid Retina HD · 1792×828 px</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-microchip"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Processeur</span>
                    <span class="spec-val">Apple A12 Bionic (7 nm)</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-memory"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Mémoire</span>
                    <span class="spec-val">3 Go RAM · 64 / 128 / 256 Go stockage</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-camera"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Caméra</span>
                    <span class="spec-val">12 MP f/1.8 + 7 MP FaceTime HD</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-battery-three-quarters"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Batterie</span>
                    <span class="spec-val">2 942 mAh · jusqu'à 25h d'autonomie</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-wifi"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Connectivité</span>
                    <span class="spec-val">4G LTE · Wi-Fi ac · Bluetooth 5.0 · NFC</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-palette"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Coloris disponibles</span>
                    <span class="spec-val">Noir · Blanc · Rouge · Bleu · Jaune · Corail</span>
                </div>
            </div>

            <div class="spec-item">
                <span class="spec-icon"><i class="fa fa-shield-halved"></i></span>
                <div class="spec-text">
                    <span class="spec-label">Sécurité</span>
                    <span class="spec-val">Face ID · Chiffrement AES 256-bit</span>
                </div>
            </div>

        </div><!-- fin specs-panel -->
    </div><!-- fin product-layout -->


    <!-- ========== SECTION VIDÉO DE PRÉSENTATION ========== -->
    <div class="section-block">
        <h3><i class="fa fa-circle-play"></i> Vidéo de présentation</h3>
        <div class="video-container">
            <video controls preload="metadata" poster="images/XR.jpg">
                <source src="images/video/video iphone xr.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture vidéo HTML5.
            </video>
        </div>
    </div>


    <!-- ========== SECTION TÉLÉCHARGEMENT ========== -->
    <div class="section-block">
        <h3><i class="fa fa-download"></i> Téléchargements</h3>
        <div class="download-grid">

            <!-- Télécharger la photo -->
            <div class="dl-card">
                <div class="dl-icon">🖼️</div>
                <p>Photo officielle iPhone XR<br>Format JPG · Haute résolution</p>
                <a href="images/XR.jpg" download="iPhone_XR_photo.jpg" class="btn-dl btn-photo">
                    <i class="fa fa-image"></i> Télécharger la photo
                </a>
            </div>

            <!-- Télécharger la vidéo -->
            <div class="dl-card">
                <div class="dl-icon">🎬</div>
                <p>Vidéo de présentation iPhone XR<br>Format MP4</p>
                <a href="images/video/video iphone xr.mp4" download="iPhone_XR_video.mp4" class="btn-dl btn-video">
                    <i class="fa fa-video"></i> Télécharger la vidéo
                </a>
            </div>

        </div>
    </div>

</div><!-- fin .detail-wrapper -->

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
