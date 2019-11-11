<?php session_start(); 
include ("fonctions_maths.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site de révisions pour les élèves de CM"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="css/classecm.css">
    <title>Soustraction par 10</title>
</head>

<body>
    <?php 
    $number= 0; 
    $numberTen = 10;
    $from=10;
    $upTo= 9999;
    ?>
    <div class="container">
            <h1 class="text-center">Soustraction par 10</h1>
            <header class="quizz text-center mb-4 pt-2 pb-2 bg-info">
                <h2 class="play text-light">C'EST PARTI</h2>
                <p class="subheading font-weight-light mb-2 text-light">Essaie sans t'aider de tes doigts !</p>
                <!-- Image -->
                <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=Blonde&facialHairType=Blank&clotheType=Hoodie&clotheColor=Red&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Smile&skinColor=Pale' alt=""/>
            </header>
        <!-- operation form-->
            <main>
                <form action="cible_calcul_mental.php" method="get">
                    <div class="col-12">
                        <div class="row justify-content-center"> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo); ?></b></span>
                                <i class="fa fa-minus-circle"></i> 
                                <!-- substract 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberTen;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="firstResult" type="text" placeholder="total">
                                <input name="firstCorrectResult" type="hidden"
                                value="<?php echo $firstCorrectResult= substract($randFirstNumber, $numberTen); 
                                ?>">
                            </div>                    
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo); ?></b></span>
                                <i class="fa fa-minus-circle"></i> 
                                <!-- substract 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberTen;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="secondResult" type="text" placeholder="total">
                                <input name="secondCorrectResult" type="hidden"
                                value="<?php echo $secondCorrectResult= substract($randFirstNumber, $numberTen); 
                                ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row justify-content-center"> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo); ?></b></span>
                                <i class="fa fa-minus-circle"></i> 
                                <!-- substract 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberTen;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="thirdResult" type="text" placeholder="total">
                                <input name="thirdCorrectResult" type="hidden"
                                value="<?php echo $thirdCorrectResult= substract($randFirstNumber, $numberTen); 
                                ?>">
                            </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo); ?></b></span>
                                <i class="fa fa-minus-circle"></i> 
                                <!-- substract 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberTen;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="fourthResult" type="text" placeholder="total">
                                <input name="fourthCorrectResult" type="hidden"
                                value="<?php echo $fourthCorrectResult= substract($randFirstNumber, $numberTen); 
                                ?>">
                            </div>
                        </div>
                        <!--validation button-->
                        <div class="col-lg-12 mt-4">
                            <div class="row justify-content-center">
                                <input class="bg-primary p-2" type="submit" value=" Mon score " >
                                <input class="col-lg-2" name="score" type="hidden" value="0">
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>        
    </body>
  </html>