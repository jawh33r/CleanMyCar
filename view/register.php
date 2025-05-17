<?php
session_start();
if (isset($_SESSION['register_error'])) {
  echo '<center><div class="alert alert-danger" style="background-color: #dc3545; color: white; padding: 10px 15px; border-radius: 5px; margin-bottom: 15px;">' . $_SESSION['register_error'] . '</div></center>';
    unset($_SESSION['register_error']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CleanMyCar - Inscription</title>
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


<section class="container">
  <div class="form-container">
    <h2>Créer un compte</h2>
    

    
    <form action="register_Action.php" method="POST">
      <div class="form-group">
        <label class="form-label">Nom :</label>
        <input type="text" name="nom" class="form-control" required>
      </div>
      
      <div class="form-group">
        <label class="form-label">Email :</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      
      <div class="form-group">
        <label class="form-label">Mot de passe :</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      
      <button type="submit" class="btn-primary">S'inscrire</button>
      
      <div class="form-footer">
        Déjà Membre ? <a href="login.php" class="link-register">Connexion</a>
      </div>
    </form>
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
