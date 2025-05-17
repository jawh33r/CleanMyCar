<?php
session_start();
require_once '../controller/ReservationController.php';

$resCtrl = new ReservationController();

if (!isset($_SESSION['client_id'])) {
    header("Location: login.php");
    exit();
}

$clientId = $_SESSION['client_id'];
$reservations = $resCtrl->getReservationsByClientId($clientId);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mon Compte - CleanMyCar</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }

  th {
    background-color: #f4f4f4;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  @media screen and (max-width: 768px) {
    table, thead, tbody, th, td, tr {
      display: block;
    }

    thead {
      display: none;
    }

    tr {
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 10px;
      background-color: #fdfdfd;
    }

    td {
      text-align: left;
      padding-left: 50%;
      position: relative;
      border: none;
      border-bottom: 1px solid #ddd;
    }

    td::before {
      content: attr(data-label);
      position: absolute;
      left: 10px;
      top: 10px;
      font-weight: bold;
      color: #555;
      white-space: nowrap;
    }

    td:last-child {
      border-bottom: none;
    }
  }
</style>

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
          <li><a href="logout.php"> 🔴 Déconnexion</a> </li>
      </ul>
    </nav>
  </div>
</header>


  <section class="container" style="padding: 40px 20px;">
    <h2>Mes Réservations</h2>
    <h2><a href="reservation.php">🟢 Ajouté une réservation</a></h2>
    <table>
        <thead>
            <tr>
              <th>Adresse</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Service</th>
              <th>Montant</th>
              <th>Statut</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $res): ?>
                <tr>
                    <td data-label="Adresse"><?= htmlspecialchars($res['adresse']) ?></td>
                    <td data-label="Date"><?= htmlspecialchars($res['date']) ?></td>
                    <td data-label="Heure"><?= htmlspecialchars($res['heure']) ?></td>
                    <td data-label="Service"><?= htmlspecialchars($res['typeService']) ?></td>
                    <td data-label="Montant"><?= htmlspecialchars($res['montant']) ?> TND</td>
                    <td data-label="Statut"><?= htmlspecialchars($res['statut']) ?></td>
                    <td data-label="Action">
                      <form action="delete_reservation.php" method="POST" style="display:inline;">
                        <input type="hidden" name="reservation_id" value="<?= $res['id'] ?>">
                        <button type="submit" style="background-color: grey; color: white; border: none; border-radius: 4px; padding: 4px 8px; cursor: pointer;">
                          ❌
                        </button>
                      </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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

