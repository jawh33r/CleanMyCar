<?php
session_start();
//ouvrier
require_once '../controller/OuvrierController.php';

$resCtrl = new OuvrierController();

$ouvriers = $resCtrl->liste();
$ouvriers2 = $resCtrl->liste();
//reservation total
require_once '../controller/ReservationController.php';

$resCtrl1 = new ReservationController();

$reservations = $resCtrl1->liste();
$reservations2 = $resCtrl1->liste();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - CleanMyCar</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
  }

  th {
    background-color: #eee;
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
      background-color: #f9f9f9;
    }

    td {
      text-align: left;
      padding-left: 50%;
      position: relative;
      border: none;
      border-bottom: 1px solid #ccc;
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
          <li><a href="admin.php">Dashboard</a></li>
          <li><a href="logout.php">🔴 Déconnexion</a></li>
          
        </ul>
      </nav>
    </div>
  </header>

  <section class="container" style="padding: 40px 20px;">
    <br><br>
    <h2>list des Ouvrier</h2>
    <h2><a href="ajout_ouvrier.php">🟢 Ajout des Ouvrier</a></h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>zoneService</th>
          <th>disponible</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <?php foreach ($ouvriers as $res): ?>
                <tr>
                    <td data-label="Adresse"><?= htmlspecialchars($res['id']) ?></td>
                    <td data-label="Date"><?= htmlspecialchars($res['nom']) ?></td>
                    <td data-label="Heure"><?= htmlspecialchars($res['zoneService']) ?></td>
                    <td data-label="Service"><?= htmlspecialchars($res['disponible']) ?></td>
                    <td data-label="Action">
                      <form action="delete_ouvrier.php" method="POST" style="display:inline;">
                        <input type="hidden" name="ouvrier_id" value="<?= $res['id'] ?>">
                        <button type="submit" style="background-color: grey; color: white; border: none; border-radius: 4px; padding: 4px 8px; cursor: pointer;">
                          ❌
                        </button>
                      </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>list des Réservations</h2>
    <table>
        <thead>
            <tr>
              <th>Id</th>
              <th>id client</th>
              <th>Adresse</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Service</th>
              <th>Montant</th>
              <th>Statut</th>
              <th>ouvrierId</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($reservations as $res): ?>
                <tr>
                    <td data-label="id"><?= htmlspecialchars($res['id']) ?></td>
                    <td data-label="id"><?= htmlspecialchars($res['clientId']) ?></td>
                    <td data-label="Adresse"><?= htmlspecialchars($res['adresse']) ?></td>
                    <td data-label="Date"><?= htmlspecialchars($res['date']) ?></td>
                    <td data-label="Heure"><?= htmlspecialchars($res['heure']) ?></td>
                    <td data-label="Service"><?= htmlspecialchars($res['typeService']) ?></td>
                    <td data-label="Montant"><?= htmlspecialchars($res['montant']) ?> TND</td>
                    <td data-label="Statut"><?= htmlspecialchars($res['statut']) ?></td>
                    <td data-label="ouvrierId"><?= htmlspecialchars($res['ouvrierId']) ?></td>
                    <td data-label="Action">
                      <form action="delete_reservation.php" method="POST" style="display:inline;">
                        <input type="hidden" name="reservation_id" value="<?= $res['id'] ?>">
                        <button type="submit" style="background-color: grey; color: white; border: none; border-radius: 4px; padding: 4px 8px; cursor: pointer;">
                          ❌
                        </b utton>
                      </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<div class="form-container">
    <h2>Gestion des Réservations</h2>

    <form action="passerreservation.php" method="POST">
      <div class="form-group">
        <label class="form-label">Id Ouvrier :</label>
        <select name="sl" id="" class="form-control" required>
        <option value="" selected disabled>-- Sélectionnez Reservation --</option>
        <?php foreach ($ouvriers2 as $res): ?>

        <option value="<?= htmlspecialchars($res['id']) ?>"><?= htmlspecialchars($res['id']) ?> - <?= htmlspecialchars($res['nom']) ?></option>

        <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Id Reservation :</label>
        <select name="sl2" id="" class="form-control" required>
          <option value="" selected disabled>-- Sélectionnez Reservation --</option>
          <?php foreach ($reservations2 as $res): ?>

          <option value="<?= htmlspecialchars($res['id']) ?>"> <?= htmlspecialchars($res['id']) ?> - <?= htmlspecialchars($res['adresse']) ?> </option>

          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Montant :</label>
        <input type="text" name="montant" class="form-control" required>
      </div>

      <button type="submit" class="btn-primary">Passer la reservation</button>
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