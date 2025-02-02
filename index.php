<?php
// Defining variables for dynamic content
$phone = "+33605821519";
$email = "batilieu7@gmail.com";
$whatsapp_link = "https://wa.me/+33605821519";
$address = "0 Rue Exemple, Ville, Marseille";
$facebook_link = "https://www.facebook.com";
$instagram_link = "https://www.instagram.com";
$linkedin_link = "https://www.linkedin.com";
$twitter_link = "https://www.twitter.com";
$youtube_link = "https://www.youtube.com";
$pinterest_link = "https://www.pinterest.com";
$tiktok_link = "https://www.tiktok.com";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batilieu - Entreprise de Construction et Rénovation</title>
    <meta name="description" content="Batilieu est votre expert en construction et rénovation. Nous offrons des services de qualité pour vos projets de rénovation, de construction et bien plus encore. Contactez-nous aujourd'hui !">
    <meta name="keywords" content="construction, rénovation, services de rénovation, entreprise de construction, Batilieu, travaux de rénovation, experts en rénovation, construction sur mesure">
    <meta name="author" content="Batilieu">
    <meta property="og:title" content="Batilieu - Entreprise de Construction et Rénovation">
    <meta property="og:description" content="Batilieu est votre partenaire de confiance pour tous vos projets de construction et rénovation. Nous offrons des solutions sur mesure adaptées à vos besoins.">
    <meta property="og:image" content="logo.png">
    <meta property="og:url" content="https://www.batilieu.com">
    <meta name="twitter:title" content="Batilieu - Entreprise de Construction et Rénovation">
    <meta name="twitter:description" content="Batilieu est votre partenaire de confiance pour tous vos projets de construction et rénovation. Nous offrons des solutions sur mesure adaptées à vos besoins.">
    <meta name="twitter:image" content="logo.png">
    <meta name="twitter:card" content="summary_large_image">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: white;
        }

        header {
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            justify-content: space-between;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .logo img {
            height: 80px;
        }

        .logo-second img {
            height: 80px;
        }

        .cover-container {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: url('5.gif') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .cover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .cover-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            max-width: 90%;
            margin: 0 auto;
        }

        .cover-content h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .cover-content p {
            font-size: 1.2em;
        }

        .section {
            padding: 40px 20px;
            text-align: center;
        }

        .section h2, .section p {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .service-box {
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.5);
        }

        .contact {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 40px;
        }

        .contact h2, .contact p {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .social-icons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
            margin-top: 20px;
        }

        .social-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-icon {
            font-size: 2.5em;
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icon:hover {
            color: #4CAF50;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        @media (max-width: 768px) {
            .cover-content h1 {
                font-size: 2.5em;
            }

            .cover-content p {
                font-size: 1em;
            }

            .cover-container {
                background-size: cover;
                background-position: center center;
                height: 50vh;
            }

            .cover-content {
                padding: 15px;
                max-width: 90%;
            }

            .service-box {
                padding: 15px;
            }

            .social-icon {
                font-size: 2em;
            }
        }

        .progress-bar-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: #f3f3f3;
        }

        .progress-bar {
            width: 0;
            height: 100%;
            background-color: #4CAF50;
        }
    </style>
</head>
<body>

    <div class="progress-bar-container">
        <div class="progress-bar" id="progress-bar"></div>
    </div>

    <header>
        <div class="logo-container">
            <div class="logo">
                <img src="1.png" alt="Logo Image">
            </div>
            <div class="logo-second">
                <img src="2.png" alt="Text Logo">
            </div>
        </div>
    </header>

    <div class="cover-container">
        <div class="cover-overlay"></div>
        <div class="cover-content">
            <h1>Bienvenue Batilieu</h1>
            <p>Votre partenaire de confiance pour tous vos projets de construction et rénovation en France.</p>
        </div>
    </div>

    <div class="section">
        <h2>Nos Services</h2>
        <p>
            Batilieu est spécialisée dans la construction, la rénovation, la plomberie, l'électricité et bien plus. Voici nos services :
        </p>
        <div class="services-container">
            <div class="service-box">
                <i class="fas fa-sync-alt"></i>
                <strong>Renovation Interieure et Exterieure</strong>
                <p>Nous offrons des services de rénovation complète à l'intérieur et à l'extérieur de vos bâtiments.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-building"></i>
                <strong>Ravalement de Facades</strong>
                <p>Nous rénovons et entretenons les façades des bâtiments pour garantir leur durabilité.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-plug"></i>
                <strong>Plomberie et Electricité</strong>
                <p>Nos experts assurent des services de plomberie et d'électricité pour votre confort.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-paint-roller"></i>
                <strong>Finitions et Aménagements Intérieurs</strong>
                <p>Nous nous occupons des finitions et des aménagements intérieurs pour un résultat impeccable.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-sun"></i>
                <strong>Isolation Thermique, Acoustique et Hydrique</strong>
                <p>Offrez à votre bâtiment une isolation thermique, acoustique et hydrique de haute qualité.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-tree"></i>
                <strong>Design de Jardins et Espaces Extérieurs</strong>
                <p>Conception et aménagement des jardins, terrasses et autres espaces extérieurs.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-swimmer"></i>
                <strong>Construction de Piscines et Espaces Aquatiques</strong>
                <p>Nous créons des piscines, des spas et des espaces aquatiques personnalisés.</p>
            </div>
        </div>
    </div>

    <div class="section contact">
        <h2>Contactez-nous</h2>
        <p>Nous donnons vie à vos idées de rénovation! Contactez-nous pour des solutions adaptées à vos besoins.</p>
        <div class="contact-details">
            <p><i class="fas fa-phone-alt"></i> Téléphone : <?php echo $phone; ?></p>
            <p><i class="fas fa-envelope"></i> Email : <?php echo $email; ?></p>
            <p><i class="fab fa-whatsapp"></i> WhatsApp : <a href="<?php echo $whatsapp_link; ?>" target="_blank">Cliquez ici</a></p>
        </div>

        <div class="social-icons">
            <div class="social-group">
                <a href="<?php echo $whatsapp_link; ?>" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:<?php echo $email; ?>" target="_blank" class="social-icon"><i class="fas fa-envelope"></i></a>
                <a href="https://www.google.com/maps?q=<?php echo urlencode($address); ?>" target="_blank" class="social-icon"><i class="fas fa-map-marker-alt"></i></a>
            </div>

            <div class="social-group">
                <a href="<?php echo $facebook_link; ?>" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo $instagram_link; ?>" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo $linkedin_link; ?>" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="<?php echo $twitter_link; ?>" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo $youtube_link; ?>" target="_blank" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="<?php echo $pinterest_link; ?>" target="_blank" class="social-icon"><i class="fab fa-pinterest"></i></a>
                <a href="<?php echo $tiktok_link; ?>" target="_blank" class="social-icon"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2024 Batilieu. Tous droits réservés.
    </footer>

    <script>
        window.onscroll = function() {
            let scroll = document.documentElement.scrollTop || document.body.scrollTop;
            let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrollPercentage = (scroll / totalHeight) * 100;
            document.getElementById('progress-bar').style.width = scrollPercentage + '%';
        }
    </script>

</body>
</html>
