<?php require_once "connexion_bdd.php";
include "functions_french.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/classecm.css">
    <title>conjugaison : present premier groupe</title>
</head>
<body>
  <div class="container">
  <header class="d-flex align-items-center flex-column">
      <h1>Le présent du 1er groupe</h1>
  </header>

  <main>
    <section class="text-center mb-4 pt-2 pb-2 bg-info">
      <h2 class="play text-light">À TOI DE JOUER</h2>
      <p class="subheading font-weight-light mb-2 text-light">Conjugue les verbes au présent</p>
      <!-- Image -->
      <img class="mb-4" src="img/avatars.svg" alt="">
      
      <?php
      //BDD random question
      $question = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 2 && id_theme = 20 ORDER BY RAND() LIMIT 1");
      $donnees = $question->fetch();
      ?>

      <div class="form-group">
        <form action="cible_conjugation.php" method="get">        
          <!--question display -->
          <p class="font-weight-bold text-light"><?php echo $donnees['intitule_question']; ?></p>
          <?php
          $_SESSION['id_question'] = $donnees['id_question'];
          $_SESSION['intitule_question'] = $donnees['intitule_question'];
          $question->closeCursor();?>
          <!--Form answer-->
          <?php conjugationDisplay();?>
          <input class="input border border-primary" type="hidden" name="url" value="present_1.php">
        </form>
      </div>
    </section>
  </main>
</body>
</html>