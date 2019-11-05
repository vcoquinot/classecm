<?php session_start(); 
include ("fonctions_maths.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site de révisions pour les élèves de CM"> 
    <script src="https://kit.fontawesome.com/94ce8cff49.js" crossorigin="anonymous"></script>     
    <link rel="stylesheet" href="css/classecm.css">
    <title>Additions d'unités</title>
</head>

<body>
<?php $number=0; ?>
<div class="container">
    <!-- TO DO : CHECK TAG !!!-->
        <header class="d-flex align-items-center flex-column">
            <h1>Calcul mental d'unités</h1>
        </header>

        <header class="quizz text-center mb-4 pt-2 pb-2 bg-info">
            <h2 class="play text-light">C'EST PARTI</h2>
            <p class="subheading font-weight-light mb-2 text-light">Essaie sans t'aider de tes doigts !</p>
            <!-- Image -->
            <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairNotTooLong&accessoriesType=Blank&hairColor=Brown&facialHairType=Blank&clotheType=Hoodie&clotheColor=Pink&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Smile&skinColor=Light' alt=""/>
        </header>
    <!-- operation form-->
        <main>
            <form action="cible_calcul_mental.php" method="get">
                <div class="col-12">
                    <div class="row justify-content-center"> 
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <!-- first random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                            <b><?php $randFirstNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
                            <!-- second random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php $randSecondNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                             <!-- transmission des données-->
                            <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="resultatUn" type="text" placeholder="total">
                            <input name="firstCorrectResult" type="hidden"
                            value="<?php echo $firstCorrectResult= add($randFirstNumber, $randSecondNumber); 
                            ?>">
                        </div>                    
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- first random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                            <b><?php $randFirstNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
                            <!-- second random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php $randSecondNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                             <!-- transmission des données-->
                            <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="resultatUn" type="text" placeholder="total">
                            <input name="secondCorrectResult" type="hidden"
                            value="<?php echo $secondCorrectResult= add($randFirstNumber, $randSecondNumber); 
                            ?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="row justify-content-center"> 
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- first random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                            <b><?php $randFirstNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
                            <!-- second random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php $randSecondNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                             <!-- transmission des données-->
                            <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="resultatUn" type="text" placeholder="total">
                            <input name="thirdCorrectResult" type="hidden"
                            value="<?php echo $thirdCorrectResult= add($randFirstNumber, $randSecondNumber); 
                            ?>">
                        </div>
                    
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- first random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                            <b><?php $randFirstNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <i class="fa fa-plus-circle" style="color:#FF502F"></i> 
                            <!-- second random number-->
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php $randSecondNumber = randCountNumberWithOneFigure($number);?></b></span>
                            <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                             <!-- transmission des données-->
                            <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="resultatUn" type="text" placeholder="total">
                            <input name="fourthCorrectResult" type="hidden"
                            value="<?php echo $fourthCorrectResult= add($randFirstNumber, $randSecondNumber); 
                            ?>">
                        </div>
                    </div>
                    <!--bouton validation-->
                    <div class="col-lg-12 mt-4">
                        <div class="row justify-content-center">
                            <input class="bg-primary p-2" type="submit" value=" Mon score " >
                            <input class="col-lg-2" name="score" type="hidden" value="0">
                        </div>
                    </div>
                </div>
            </form>
        </main>
    
    </body>
  </html>