<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore — Appareils Électroniques · Yaoundé</title>
    <link rel="stylesheet" href="freddy4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- ================================================
     NAVBAR
     ================================================ -->
<nav class="navbar">

    <!-- Logo -->
    <a href="freddy3.php" class="nav-logo">
        <div class="logo-icon">⚡</div>
        <span>TechStore</span>
    </a>

    <!-- Barre de recherche -->
    <div class="nav-search">
        <i class="fa fa-magnifying-glass search-icon"></i>
        <input type="text" id="searchInput" placeholder="Rechercher un appareil…">
    </div>

    <!-- Actions -->
    <div class="nav-actions">
        <button class="nav-btn btn-cart" onclick="toggleCart()">
            <i class="fa fa-cart-shopping"></i>
            Panier
            <span class="cart-badge" id="cartCount">0</span>
        </button>
        <a href="tel:+237673814636" class="nav-btn btn-contact">
            <i class="fa fa-phone"></i>
            Contact
        </a>
    </div>

</nav>

<!-- ================================================
     HERO
     ================================================ -->
<header class="hero">
    <span class="hero-tag">
        <i class="fa fa-bolt"></i>
        Yaoundé · Cameroun
    </span>

    <h1>Votre Tech,<br>Livré Chez Vous</h1>

    <p>Téléphones, ordinateurs et accessoires des meilleures marques mondiales. Qualité garantie, prix imbattables.</p>

    <!-- Stats -->
    <div class="hero-stats">
        <div class="stat">
            <span class="stat-num">10+</span>
            <span class="stat-label">Marques</span>
        </div>
        <div class="stat-sep"></div>
        <div class="stat">
            <span class="stat-num">500+</span>
            <span class="stat-label">Produits</span>
        </div>
        <div class="stat-sep"></div>
        <div class="stat">
            <span class="stat-num">24h</span>
            <span class="stat-label">Livraison</span>
        </div>
        <div class="stat-sep"></div>
        <div class="stat">
            <span class="stat-num">100%</span>
            <span class="stat-label">Garanti</span>
        </div>
    </div>
</header>

<!-- ================================================
     CONTENU PRINCIPAL
     ================================================ -->
<main class="content">

    <!-- ── ONGLETS ── -->
    <div class="tabs-header" role="tablist">
        <button class="tab-btn active"
                role="tab"
                data-tab="telephones"
                onclick="switchTab('telephones', this)">
            <span class="tab-icon">📱</span> Téléphones
        </button>
        <button class="tab-btn"
                role="tab"
                data-tab="ordinateurs"
                onclick="switchTab('ordinateurs', this)">
            <span class="tab-icon">💻</span> Ordinateurs
        </button>
    </div>

    <!-- ════════════════════════════════════════════
         PANNEAU TÉLÉPHONES
         ════════════════════════════════════════════ -->
    <div id="tab-telephones" class="tab-panel active">

        <div class="scroll-wrapper">
            <!-- Flèche gauche -->
            <button class="scroll-arrow left"
                    onclick="scrollBrands('telephones', -1)"
                    aria-label="Défiler à gauche">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="scroll-container" id="scroll-telephones">

                <!-- Apple — cliquable -->
                <a href="apple_produits.php" class="brand-card">
                    <img src="images/apple.jpg"   alt="Apple"
                         onerror="this.src='images/apple.jpg'">
                    <p>Apple</p>
                    <span class="badge-link">Voir →</span>
                </a>

                <div class="brand-card">
                    <img src="images/samsung.jpg" alt="Samsung"
                         onerror="this.style.display='none'">
                    <p>Samsung</p>
                </div>

                <div class="brand-card">
                    <img src="images/xiaomi.jpg"  alt="Xiaomi"
                         onerror="this.style.display='none'">
                    <p>Xiaomi</p>
                </div>

                <div class="brand-card">
                    <img src="images/pixel.jpg"   alt="Google Pixel"
                         onerror="this.style.display='none'">
                    <p>Google Pixel</p>
                </div>

                <div class="brand-card">
                    <img src="images/infinix.jpg" alt="Infinix"
                         onerror="this.style.display='none'">
                    <p>Infinix</p>
                </div>

                <div class="brand-card">
                    <img src="images/huawei.jpg"  alt="Huawei"
                         onerror="this.style.display='none'">
                    <p>Huawei</p>
                </div>

                <div class="brand-card">
                    <img src="images/techno.jpg"  alt="Tecno"
                         onerror="this.style.display='none'">
                    <p>Tecno</p>
                </div>

                <div class="brand-card">
                    <img src="images/itel.jpg"    alt="Itel"
                         onerror="this.style.display='none'">
                    <p>Itel</p>
                </div>

                <div class="brand-card">
                    <img src="images/vivo.jpg"    alt="Vivo"
                         onerror="this.style.display='none'">
                    <p>Vivo</p>
                </div>

                <div class="brand-card">
                    <img src="images/honor.jpg"   alt="Honor"
                         onerror="this.style.display='none'">
                    <p>Honor</p>
                </div>

            </div><!-- fin scroll-container -->

            <!-- Flèche droite -->
            <button class="scroll-arrow right"
                    onclick="scrollBrands('telephones', 1)"
                    aria-label="Défiler à droite">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div><!-- fin scroll-wrapper -->

    </div><!-- fin tab-telephones -->

    <!-- ════════════════════════════════════════════
         PANNEAU ORDINATEURS
         ════════════════════════════════════════════ -->
    <div id="tab-ordinateurs" class="tab-panel">

        <div class="scroll-wrapper">
            <button class="scroll-arrow left"
                    onclick="scrollBrands('ordinateurs', -1)"
                    aria-label="Défiler à gauche">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="scroll-container" id="scroll-ordinateurs">

                <div class="brand-card">
                    <img src="images/apple.jpg"  alt="Apple Mac"
                         onerror="this.style.display='none'">
                    <p>Apple</p>
                </div>

                <div class="brand-card">
                    <img src="images/dell.jpg"   alt="Dell"
                         onerror="this.style.display='none'">
                    <p>Dell</p>
                </div>

                <div class="brand-card">
                    <img src="images/hp.jpg"     alt="HP"
                         onerror="this.style.display='none'">
                    <p>HP</p>
                </div>

                <div class="brand-card">
                    <img src="images/intel.jpg"  alt="Intel"
                         onerror="this.style.display='none'">
                    <p>Intel</p>
                </div>

                <div class="brand-card">
                    <img src="images/lenovo.jpg" alt="Lenovo"
                         onerror="this.style.display='none'">
                    <p>Lenovo</p>
                </div>

            </div>

            <button class="scroll-arrow right"
                    onclick="scrollBrands('ordinateurs', 1)"
                    aria-label="Défiler à droite">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

    </div><!-- fin tab-ordinateurs -->

</main>

<!-- ================================================
     FOOTER
     ================================================ -->
<footer>
    <div class="footer-logo">TechStore ⚡</div>
    <p>&copy; 2026 — Vente d'Appareils Électroniques · Yaoundé, Cameroun</p>
    <div class="social-icons">
        <a href="https://wa.me/237673814636" target="_blank" class="social-pill">
            <i class="fa-brands fa-whatsapp"></i> +237 673 814 636
        </a>
        <a href="#" class="social-pill">
            <i class="fa-brands fa-facebook"></i> TechStore
        </a>
        <a href="#" class="social-pill">
            <i class="fa-brands fa-instagram"></i> @techstore
        </a>
    </div>
</footer>

<!-- ================================================
     JAVASCRIPT
     ================================================ -->
<script>
/* ── Onglets ─────────────────────────────── */
function switchTab(tab, btn) {
    // Masquer tous les panneaux
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

    // Afficher le bon
    document.getElementById('tab-' + tab).classList.add('active');
    btn.classList.add('active');

    // Re-déclencher les animations des cards du panneau activé
    const cards = document.querySelectorAll('#tab-' + tab + ' .brand-card');
    cards.forEach((c, i) => {
        c.style.animation = 'none';
        c.offsetHeight; // reflow
        c.style.animation = '';
        c.style.animationDelay = (i * 0.06) + 's';
    });
}

/* ── Flèches de défilement ───────────────── */
function scrollBrands(id, dir) {
    const el = document.getElementById('scroll-' + id);
    el.scrollBy({ left: dir * 220, behavior: 'smooth' });
}

/* ── Recherche live ──────────────────────── */
document.getElementById('searchInput').addEventListener('input', function () {
    const q = this.value.toLowerCase().trim();
    document.querySelectorAll('.brand-card').forEach(card => {
        const nom = (card.querySelector('p') || {}).textContent || '';
        if (!q || nom.toLowerCase().includes(q)) {
            card.style.opacity   = '1';
            card.style.transform = '';
        } else {
            card.style.opacity   = '0.2';
            card.style.transform = 'scale(0.93)';
        }
    });
});

/* ── Panier (compteur simple) ────────────── */
let cartCount = 0;
function toggleCart() {
    // À relier à un vrai panier plus tard
    alert('Panier en cours de développement.\nContactez-nous par WhatsApp pour commander !');
}
</script>

</body>
</html>
