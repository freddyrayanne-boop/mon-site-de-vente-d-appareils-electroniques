<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTE DES APPAREILS ELECTRONIQUES </title>
    <link rel="stylesheet" href="freddy4.css">
</head>
<body>
    <header class="hero">
        <h1>VENTES DES APPAREILS ELECTRONIQUES</h1>
    </header>
    <main class="content">
        <section class="category-section">
            
<h2> NOS TELEPHONES</h2>
<div class="brand-wrapper">
<div class="scroll-container">
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/apple.jpg" alt="APPLE">
                <p>APPLE</p>
            </div>
            <div class="brand-card">
                <?php
                $reqIphone=$pdo->query("SELECT * FROM produits WHERE nom LIKE 'iphone%'");
                while ($p =$reqIphone->fetch()) : ?>
                <div class="produit-card">
                    <img src="images/<?php echo $p ['iphone_11.jpg']; ?>" alt="iphone 11">
                    <h3><?php echo $p ['iphone 11']; ?></h3>
                    <p class="prix"><?php echo number_format( float $number , int $decimals = 0 ,['prix'], 0,) </p>
                    <?php endwhile; ?>
                </div>
                <img src="C:/xampp/htdocs/images/samsung.jpg" alt="SAMSUNG">
                <p>SAMSUNG</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/xiaomi.jpg" alt="XIAOMI">
                <p>XIAOMI</p>
            </div>
                <div class="brand-card">
                <img src="C:/xampp/htdocs/images/pixel.jpg" alt="pixel">
                <p>GOOGLE PIXEL</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/infinix.jpg" alt="INFINIX">
                <p>INFINIX</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/huawei.jpg" alt="HUAWEI">
                <p>HUAWEI</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/techno.jpg" alt="TECHNO">
                <p>TECNO</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/itel.jpg" alt="ITEL">
                <p>ITEL</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/vivo.jpg" alt="VIVO">
                <p>VIVO</p>
            </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/honor.jpg" alt="HONOR">
                <p>HONOR</p>
            </div>
            </div>
            </div>
            </section>
        <section class="category-section">
            
                <h2>NOS ORDINATEURS</h2>
                <div class="container-grid">
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/apple.jpg" alt="APPLE">
                <p>APPLE</p>
                </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/dell.jpg" alt="DELL">
                <p>DELL</p>
                </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/hp.jpg" alt="HP">
                <p>HP</p>
                </div>
            <div class="brand-card">
                <img src="C:/xampp/htdocs/images/intel.jpg" alt="INTEL">
                <p>INTEL</p>
                </div>
                <div class="brand-card">
                <img src="C:/xampp/htdocs/images/lenovo.jpg" alt="LENOVO">
                <p>LENOVO</p>
            </div>
            </div>
            </section>
            <footer>
               <p>&copy; 2026 - ventes des appareils Electroniques. Tous droits réservés.</p> 
               <div class="social-icons">
                <span>whatsapp: +237 673814636</span>
                <span> | facebook: techstore</span>
                <span> | instagramm: techstore</span>
               </div>
            </footer>
            
        </body>
</html>