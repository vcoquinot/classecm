<?php 
session_start(); 
require_once("connexion_bdd.php");?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">     
        <link rel="stylesheet" href="css/classecm.css">
        <title>cible opération posée</title>
    </head>
    <body>

    <?php
    //Recovery of data session
    /*if (!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
    }

    /*if (!isset($_SESSION['operationNumber'])){
    $_SESSION['operationNumber'] = 1;
    }*/

    //operation number limitation
    $totalOperationNumber= 5;
    $url = $_GET["url"];

    if(($_SESSION['operationNumber']) <= $totalOperationNumber){
        //check user's answer
        $isCorrect=false;
        $total = $_GET["total1"].$_GET["total2"].$_GET["total3"].$_GET["total4"];

        //CASE 1 : correct answer
        if($total == $_GET["correctTotal"]){ 
            $isCorrect === true; 
            $_SESSION['score']++;
            $successComment = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
            // recherche d'un commentaire de réussite alléatoire   
            $successdata = $successComment->fetch();
            $congrats = $successdata['commentaire_reussite'];
            $successComment->closeCursor();
            ?>
            <!--comment display-->
            <main class="container">
                <div class="row alert alert-success font-weight-bold lead justify-content-center mt-4" role=" success alert">
                    <h2 class="alert-heading"><?php echo $congrats; ?></h2>
                </div>
            </main>
        <?php 
        }
        //CASE 2: incorrect answer
        else{
        ?>
        <main class="container">
            <div class="alert alert-warning text-warning font-weight-bold lead mt-4" role=" success alert">
                <h2 class="alert-heading"><?php echo "Oups, mauvaise réponse !"; ?></h2>
            </div>
        </main>
        <?php
        }
        
    }
    ?>
    <div class="row justify-content-center mt-4">
        <a href="<?php echo $url ?>"><button type="button" class="btn btn-outline-info rounded font-weight-bold">Question suivante</button></a></a>
    </div>
    <?php
    
    if(($_SESSION['operationNumber']) == $totalOperationNumber){
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
                scoreDisplay($totalOperationNumber);
                ?>
            </div>
            <?php 
            //Comment if maximum score is not reached      
            if(($_SESSION['score']) < $totalOperationNumber){
            ?>
                <div class="row justify-content-center ">
                    <h2 class="commentaire"><?php echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
                </div>
            <?php
            }
            //counters reset + redirection buttons
            resetScoreAndoperationNumber(); 
            ?>                
        </section>
  
        <section class="container">
            <div class="row justify-content-center">
                <a href="operation_addition.php"><button type="button" class="btn btn-outline-info rounded font-weight-bold mr-2">Rejouer</button></a>
                <a href="accueil.php"><button type="button" class="btn btn-outline-info rounded font-weight-bold mr-2">Accueil</button></a>
            </div>
        </section> 
        <?php
    }
    ?>
    

    


    </body>
</html>
