<?php session_start();?>
<?php include "fonctions.php";?>
<?php require_once "connexion_bdd.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     
    <link rel="stylesheet" href="css/classecm.css">
    <title>cible conjugaison</title>
</head>

<body>
    <?php
    //Recovery of data session
    $userAnswer = $_GET["reponse"];
    $idQuestion = $_SESSION['id_question'];
    $question = $_SESSION['intitule_question'];
    $questionNumber = $_SESSION['numeroQuestion'];
    $url = $_GET["url"];
    //Number of questions limitation
    $totalNumberOfQuestions = 6;
    
    //echo $_SESSION['numeroQuestion'];
    //User answer check
    if ($questionNumber <= $totalNumberOfQuestions) {
        //search of the associated answer to the question in BDD
        $answer = $bdd->query("SELECT intitule_reponse FROM question,reponse WHERE question.id_question = $idQuestion AND reponse.id_reponse = $idQuestion");
        $answerData = $answer->fetch();
        //comparison user answer / correct answer
        $isCorrect = false;
        $correctAnswer = $answerData['intitule_reponse'];
        $answer->closeCursor();

        //CASE 1 : user answer is correct
        if ($userAnswer == $correctAnswer) {
            $isCorrect === true;
            // + 1 point
            $_SESSION['score']++;
            $successComment = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
            //Random success comment
            $successData = $successComment->fetch();
            $congrats = $successData['commentaire_reussite'];
            ?>
            <!--Success comment display-->
            <div class="container">
                <div class="row alert alert-success font-weight-bold lead justify-content-center" role=" success alert">
                    <h2 class="alert-heading"><?php echo $congrats; ?></h2>
                </div>
            </div> 
            <?php       
        } else {
            //CASE 2 : user answer is not correct
            ?>
            <div class="container">
                <section class="text-center mb-4">
                    <div class="alert alert-warning text-warning font-weight-bold lead" role=" failure alert"><?php echo "Oups, mauvaise réponse !"; ?>
                    </div>
                    <!-- Image -->
                    <img class="justify-content-center mb-4" src="img/avatar3.svg" alt="">
                    <div class="font-weight-bold m-4" role="alert">
                        <p class="row justify-content-center m-4"><?php echo $question ?></p>
                        <?php echo $correctAnswer ?>    
                    </div>
                </section>
            </div>
        <?php
        }
    }
    $_SESSION['numeroQuestion']++;
    //echo $_SESSION['numeroQuestion'];
    
    //as long as total number of questions is not reached, next question button
    if ($questionNumber < $totalNumberOfQuestions) {
        ?>
        <div class="row justify-content-center">
            <a href="<?php echo $url ?>"><button type="button" class="btn btn-outline-info rounded font-weight-bold">Question suivante</button></a>
        </div>
    <?php
    }
    //Score display
    if ($questionNumber == $totalNumberOfQuestions) {
        ?>
        <section class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-2 mt-4">
                    <img class="img-fluid" src="img/target.png" alt ="cible">                    
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <h2 class="row text-center">SCORE FINAL </h2>
                <?php
                //when number of questions is reached
                scoreDisplay($totalNumberOfQuestions);
                ?>
            </div>
            <?php 
            //Comment if maximum score is not reached      
            if(($_SESSION['score']) < $totalNumberOfQuestions){
            ?>
                <div class="row justify-content-center ">
                    <h2 class="commentaire"><?php echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
                </div>
            <?php
            }
            //counters reset + redirection buttons
            resetScoreAndQuestionNumber(); 
            ?>                
        </section>
  
        <section class="container">
            <div class="row justify-content-center">
                <a href="<?php echo $url ?>"><button type="button" class="btn btn-outline-info rounded font-weight-bold mr-2">Rejouer</button></a>
                <a href="accueil.php"><button type="button" class="btn btn-outline-info rounded font-weight-bold mr-2">Accueil</button></a>
            </div>
        </section> 
        <?php
    }
    ?>
    
</body>
</html>