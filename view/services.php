<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CleanMyCar - Services</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<header>
  <div class="container">
  <a href="../index.php"><h1 class="logo"><img src="../image/logo2.png" alt="Logo CleanMyCar"></h1></a>
    <button class="menu-toggle" aria-label="Menu">&#9776;</button>
    <nav>
      <ul>
          <li><a href="../index.php">Accueil</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="reservation.php">Réserver</a></li>
          <li><a href="login.php">Connexion</a></li>
          <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>


  <section class="container" style="padding: 40px 20px;">
  <h2>Nos Services</h2>
  <p>Chez CleanMyCar, nous offrons des services de lavage de voiture professionnels et adaptés à vos besoins :</p>

  <div class="service">
    <img src="../image/picservice1.jpg" alt="lavage-ext" class="service-image">
    <h3>Lavage extérieur à domicile</h3>
    <p>Nous nous déplaçons chez vous pour un lavage extérieur complet, incluant le lavage de la carrosserie, des jantes, des vitres, et le traitement anti-pluie. Idéal pour garder votre voiture éclatante sans bouger de chez vous.</p>
  </div>

  <div class="service">
    <img src="../image/picservice2.png" alt="lavage-ext" class="service-image">
    <h3>Lavage intérieur complet</h3>
    <p>Ce service inclut l’aspiration complète de l’habitacle, le nettoyage des sièges (en tissu ou cuir), tapis, moquettes, tableau de bord, vitres intérieures, ainsi que la désinfection des surfaces de contact.</p>
  </div>

  <div class="service">
    <img src="../image/picservice3.png" alt="lavage-ext" class="service-image">
    <h3>Formules personnalisées</h3>
    <p>Créez votre propre formule de lavage selon vos besoins : intérieur, extérieur, traitements spécifiques (anti-odeurs, rénovation plastique, etc.). Parfait pour un service sur mesure et flexible.</p>
  </div>

  <div class="service">
    <img src="../image/picservice4.png" alt="lavage-ext" class="service-image">
    <h3>Nettoyage écologique</h3>
    <p>Nous utilisons des produits respectueux de l’environnement et des techniques sans eau pour un lavage responsable, efficace, et respectueux de votre véhicule et de la planète.</p>
  </div>
</section>


  <footer>
    <p>&copy; 2025 CleanMyCar CMC - Tous droits réservés</p>
  </footer>
  <script>
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('nav');

  menuToggle.addEventListener('click', () => {
    nav.classList.toggle('active');
  });
</script>
</body>
</html>
