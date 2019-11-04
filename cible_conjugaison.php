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
            $donneesReussite = $successComment->fetch();
            $felicitation = $donneesReussite['commentaire_reussite'];
            ?>
            <!--Success comment display-->
            <div class="container">
            <div class="row alert alert-success font-weight-bold lead justify-content-center" role=" success alert">
                <h2 class="alert-heading"><?php echo $felicitation; ?></h2>
            </div>
        </div>
            <?php
            //next question
            header("refresh:2;url='$url'");
                
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
                        <?php echo  $correctAnswer ?>    
                    </div>
                </section>

                <div class="row justify-content-center">
                    <a href="<?php echo $url ?>"><button type="button" class="btn btn-outline-info rounded font-weight-bold">Question suivante</button></a>
                </div>
            </div>
        <?php
        }
        $_SESSION['numeroQuestion']++;
        echo "n° question : " . $_SESSION['numeroQuestion']++;
     
        //when number of questions is reached
        } else {
        scoreDisplay($totalNumberOfQuestions);
            if ($_SESSION['score'] = ($totalNumberOfQuestions)) {
                ?>
                <div class="container">
                    <div class="row justify-content-center ">
                        <h2 class="commentaire"><?php echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
                    </div>
                </div>
                <?php resetScoreAndQuestionNumber();
        }
        ?>
        <section class="container">
            <div class="row justify-content-center">
                <a href="<?php echo $url ?>"><button type="button" class="btn">Rejouer</button></a>
                <a href="accueil.php"><button type="button" class="btn">Accueil</button></a>
            </div>
        </section>
        <?php
    }
    ?>      
</body>
</html>