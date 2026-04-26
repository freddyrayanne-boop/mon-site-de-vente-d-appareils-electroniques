<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore — Vente d'Appareils Électroniques</title>
    <link rel="stylesheet" href="freddy4.css">
</head>
<body>

    <!-- ============ HEADER ============ -->
    <header class="hero">
        <h1>TechStore</h1>
        <p>Vente d'Appareils Électroniques · Yaoundé</p>
    </header>

    <main class="content">

        <!-- ============ SECTION TÉLÉPHONES ============ -->
        <section class="category-section">
            <h2>📱 Nos Téléphones — Choisissez une marque</h2>

            <!--
                CORRECTION :
                - .brand-wrapper + .scroll-container → affichage horizontal garanti
                - Chaque .brand-card est un élément DIRECT de .scroll-container
                - La requête PHP Apple a été retirée d'ici → elle est dans apple_produits.php
                - Samsung : chemin d'image CORRIGÉ (relatif)
            -->
            <div class="brand-wrapper">
                <div class="scroll-container">

                    <!-- Apple → lien vers la page catalogue Apple -->
                    <a href="apple_produits.php" class="brand-card" title="Voir les produits Apple">
                        <img src="images/apple.jpg" alt="Apple">
                        <p>Apple</p>
                        <span class="badge-link">Voir →</span>
                    </a>

                    <!-- Samsung — chemin image CORRIGÉ -->
                    <div class="brand-card">
                        <img src="images/samsung.jpg" alt="Samsung">
                        <p>Samsung</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/xiaomi.jpg" alt="Xiaomi">
                        <p>Xiaomi</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/pixel.jpg" alt="Google Pixel">
                        <p>Google Pixel</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/infinix.jpg" alt="Infinix">
                        <p>Infinix</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/huawei.jpg" alt="Huawei">
                        <p>Huawei</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/techno.jpg" alt="Tecno">
                        <p>Tecno</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/itel.jpg" alt="Itel">
                        <p>Itel</p>
                    </div>

                    <div class="brand-card">
                        <img src="images/vivo.jpg" alt="Vivo">
                        <p>Vivo</p>
                    </div>

                    <!-- Honor — chemin CORRIGÉ (était "simages/honor.jpg") -->
                    <div class="brand-card">
                        <img src="images/honor.jpg" alt="Honor">
                        <p>Honor</p>
                    </div>

                </div><!-- fin .scroll-container -->
            </div><!-- fin .brand-wrapper -->
        </section>

        <!-- ============ SECTION ORDINATEURS ============ -->
        <section class="category-section">
            <h2>💻 Nos Ordinateurs</h2>
            <div class="container-grid">

                <div class="brand-card">
                    <img src="images/apple.jpg" alt="Apple">
                    <p>Apple</p>
                </div>

                <div class="brand-card">
                    <img src="images/dell.jpg" alt="Dell">
                    <p>Dell</p>
                </div>

                <div class="brand-card">
                    <img src="images/hp.jpg" alt="HP">
                    <p>HP</p>
                </div>

                <div class="brand-card">
                    <img src="images/intel.jpg" alt="Intel">
                    <p>Intel</p>
                </div>

                <div class="brand-card">
                    <img src="images/lenovo.jpg" alt="Lenovo">
                    <p>Lenovo</p>
                </div>

            </div>
        </section>

    </main>

    <!-- ============ FOOTER ============ -->
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
