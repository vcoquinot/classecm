<?php 
    session_start();
    require_once "connexion_bdd.php";
    include "fonctions_français.php";
    include "fonctions.php";
?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/classecm.css">
        <title>Conjuguer à l'imparfait</title>
    </head>

    <body> 
        <div class="container">
            <header class="d-flex align-items-center flex-column">
                <h1>Conjuguer à l'imparfait</h1>
            </header>

            <main class="quizz text-center mb-4 pt-2 pb-2 bg-info">
            <h2 class="play text-light">À TOI DE JOUER</h2>
            <p class="subheading font-weight-light mb-2 text-light">Conjugue les verbes à l'imparfait</p>
            <!-- Image -->
            <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortRound&accessoriesType=Blank&hairColor=Brown&facialHairType=Blank&clotheType=ShirtCrewNeck&clotheColor=Blue02&eyeType=Default&eyebrowType=RaisedExcited&mouthType=Smile&skinColor=Light' alt="">

            <?php
            //BDD random question
            $question = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 2 && id_theme BETWEEN '16' AND '19' ORDER BY RAND() LIMIT 1");
            $questionData = $question->fetch();            
            
            $_SESSION['id_question'] = $questionData['id_question'];
            $_SESSION['intitule_question'] = $questionData['intitule_question'];
            $question->closeCursor();
            ?>

            <div class="form-group">
                <form action="cible_conjugaison.php" method="get">        
                    <!--question display -->
                    <p class="font-weight-bold text-light"><?php echo $_SESSION['intitule_question']; ?></p>
                    
                    <!--Form answer-->
                    <?php conjugationForm();?>
                    <input class="input border border-primary" type="hidden" name="url" value="conjugaison_imparfait_mix.php">
                </form>
            </div>
        </main>
    </body>
</html>