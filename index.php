<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="image/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CleanMyCar - Accueil</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
  <div class="container">
  <a href="index.php"><h1 class="logo"><img src="image/logo2.png" alt="Logo CleanMyCar"></h1></a>
    <button class="menu-toggle" aria-label="Menu">&#9776;</button>
    <nav>
      <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="view/services.php">Services</a></li>
          <li><a href="view/reservation.php">Réserver</a></li>
          <li><a href="view/login.php">Connexion</a></li>
          <li><a href="view/contact.php">Contact</a></li>
          <li><a href="view/loginadmin.php">🛠️ Admin Portal 🛠️</a></li>
      </ul>
    </nav>
  </div>
</header>


  <section class="hero">
    <div class="hero-text">
      <h2>Lavage de voiture à domicile</h2>
      <p>Propre. Pratique. Partout.</p>
      <a href="view/reservation.php" class="btn-primary">Réservez maintenant</a>
    </div>
  </section>

  <section class="features">
    <div class="feature">
      <h3>Service rapide</h3>
      <p>Réservez en ligne et un professionnel vient chez vous.</p>
    </div>
    <div class="feature">
      <h3>Respect de l’environnement</h3>
      <p>Produits écologiques et économie d’eau garantie.</p>
    </div>
    <div class="feature">
      <h3>100% mobile</h3>
      <p>Gérez tout depuis votre smartphone ou ordinateur.</p>
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
