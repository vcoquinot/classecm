<?php require_once("connexion_bdd.php")?>
<?php include("fonctions.php");?>
<?php include("fonctions_maths.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">       
    <link rel="stylesheet" href="css/classecm.css">
    <title>Document</title>
</head>
<body>
    <?php
    $operationNumber= 4;
    $score= $_GET['score'];
    $firstCorrectResult= $_GET['firstCorrectResult'];
    $firstResult = $_GET['firstResult'];
    $secondCorrectResult= $_GET['secondCorrectResult'];
    $secondResult = $_GET['secondResult'];
    $thirdCorrectResult= $_GET['thirdCorrectResult'];
    $thirdResult = $_GET['thirdResult'];
    $fourthCorrectResult= $_GET['fourthCorrectResult'];
    $fourthResult = $_GET['fourthResult'];

    //check of user's answer
    $isCorrect= false;
    if($firstResult == $firstCorrectResult){ 
        $isCorrect === true; 
        $score++; 
    }
    if($secondResult == $secondCorrectResult){ 
        $isCorrect === true; 
        $score++; 
    }
    if($thirdResult == $thirdCorrectResult){ 
        $isCorrect === true; 
        $score++; 
    }
    if($fourthResult == $fourthCorrectResult){ 
        $isCorrect === true; 
        $score++; 
    }        
    ?>

    <div class="container">
        <header>
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <img class="img-fluid" src="img/target.png" alt ="cible">
                </div>
            </div>
            <div class="row justify-content-center">
                <h3><?php echo "Tu as obtenu ". $score. " points sur ". $operationNumber;?></h3>
            </div>
        </header>
        <main class="row justify-content-center">
            <?php
            if($score==$operationNumber){
                $successComment = $bdd->query("SELECT commentaire_reussite FROM reussite ORDER BY RAND() LIMIT 1");
                $successData = $successComment->fetch();
                $congrats = $successData['commentaire_reussite'];
                ?>
                <div class="row alert alert-success font-weight-bold lead justify-content-center" role=" success alert">
                    <h2 class="alert-heading"><?php echo $congrats; ?></h2>
                </div>            
            <?php        
            }else { 
                ?>
                <div class="row alert alert-warning font-weight-bold lead justify-content-center" role="failure alert">     <h2><?php  echo "Entraîne-toi encore un peu pour obtenir un max de points !"; ?></h2>
                </div>
            <?php
            }
            ?>
        </main>
        <section class="row justify-content-center">
            <a href="calcul_mental.php"><button type="button" class="btn btn-outline-info rounded font-weight-bold mr-2">Calcul mental</button></a>
            <a href="accueil.php"><button type="button" class="btn btn-outline-info rounded font-weight-bold">Accueil</button></a>
        </section>
    </div>
</body>
</html>