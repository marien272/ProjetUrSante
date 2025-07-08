<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil - UFR Santé</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'partials/header.php'; ?>

  <main class="main-content">
    <section class="video-directeur">
      <h2>Mot du Directeur</h2>
      <video controls width="600">
        <source src="videos/mot_directeur.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture vidéo.
      </video>
    </section>

    <section class="specialites">
      <h2>Nos Spécialités</h2>
      <div class="medecins-container">
        <div class="medecin">
          <img src="images/medecin1.jpg" alt="Médecin 1">
          <p><strong>Dr. OLYMPIO Hugues</strong><br>Spécialiste en radiologie depuis 2012.</p>
        </div>
        <div class="medecin">
          <img src="images/medecin2.jpg" alt="Médecin 2">
          <p><strong>Dr. GUEDE Junior</strong><br>Urologue diplômé de Dakar.</p>
        </div>
        <div class="medecin">
          <img src="images/medecin3.jpg" alt="Médecin 3">
          <p><strong>Dr. IBRAHIMA Salem</strong><br>Chirurgienne dentiste avec 15 ans d'expérience.</p>
        </div>
        <div class="medecin">
          <img src="images/medecin4.jpg" alt="Médecin 4">
          <p><strong>Dr. AWISOGBA Lucas</strong><br>Expert en diagnostic médical.</p>
        </div>
      </div>
    </section>
  </main>

  <?php include 'partials/footer.php'; ?>
</body>
</html>
