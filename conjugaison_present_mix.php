<?php session_start();?>
<?php include "fonctions.php";?>
<?php include "fonctions_français.php";?>
<?php require_once "connexion_bdd.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href="css/classecm.css">
    <title>Conjuguer au présent</title>
</head>

<body>
    <?php resetScoreAndQuestionNumber(); ?> 
    <div class="container">
        <header class="d-flex align-items-center flex-column">
            <h1>Tous les types de verbes</h1>
        </header>

        <main class="quizz text-center mb-4 pt-2 pb-2 bg-info">
            
                <h2 class="play text-light">À TOI DE JOUER</h2>
                <p class="subheading font-weight-light mb-2 text-light">Conjugue au présent</p>
                <!-- Image -->
                <img class="mb-4" src="img/avatar2.svg" alt="">
                
                <?php
                //BDD random question
                $question = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 2 && id_theme  BETWEEN '20' AND '22' AND '25' ORDER BY RAND() LIMIT 1");
                $questionData = $question->fetch();
                ?>

                <div class="form-group">
                    <form action="cible_conjugaison.php" method="get">        
                    <!--question display -->
                    <p class="font-weight-bold text-light"><?php echo $questionData['intitule_question']; ?></p>
                    <?php
                    $_SESSION['id_question'] = $questionData['id_question'];
                    $_SESSION['intitule_question'] = $questionData['intitule_question'];
                    $question->closeCursor();?>
                    
                    <!--Form answer-->
                    <?php conjugationForm();?>
                    <input class="input border border-primary" type="hidden" name="url" value="conjugaison_present_mix.php">
                    </form>
                </div>
       
        </main>
    </div>
</body>
</html>

