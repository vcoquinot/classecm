<?php session_start(); 
include ("fonctions_maths.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" co="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" co="ie=edge">
    <meta name="description" co="Site de révisions pour les élèves de CM"> 
    <script src="https://kit.fontawesome.com/94ce8cff49.js" crossorigin="anonymous"></script>     
    <link rel="stylesheet" href="css/classecm.css">
    <title>Multiplication par 1000</title>
</head>

<body>
    <!-- instantiation -->
    <?php 
    $number= 0; 
    $from = 11;
    $upTo = 999;
    $numberThousand = 1000;
    ?>

    <div class="container">
            <h1 class="text-center">Multiplication par 1000</h1>
            <header class="quizz text-center mb-4 pt-2 pb-2 bg-info">
                <h2 class="play text-light">C'EST PARTI</h2>
                <p class="subheading font-weight-light mb-2 text-light">Et un, et deux, et trois 0 !</p>
                <!-- Avatar -->
                <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairMiaWallace&accessoriesType=Blank&hairColor=Brown&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Pink&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Smile&skinColor=Light'' alt=""/>
            </header>
            <!-- operation form-->
            <main>
                <form action="cible_calcul_mental.php" method="get">
                    <div class="col-12">
                        <div class="row justify-content-center"> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo) ?></b></span>
                                <i class="fa fa-times-circle" style="color:#FF502F"></i> 
                                <!-- multiply by 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberThousand;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="firstResult" type="text" placeholder="total">
                                <!-- transmission of data-->
                                <input name="firstCorrectResult" type="hidden"
                                value="<?php echo $firstCorrectResult= multiply($randFirstNumber, $numberThousand); 
                                ?>">
                            </div>                    
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo) ?></b></span>
                                <i class="fa fa-times-circle" style="color:#FF502F"></i> 
                                <!-- multiply by 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberThousand;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="secondResult" type="text" placeholder="total">
                                <!-- transmission of data-->
                                <input name="secondCorrectResult" type="hidden"
                                value="<?php echo $secondCorrectResult= multiply($randFirstNumber, $numberThousand); 
                                ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row justify-content-center"> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo) ?></b></span>
                                <i class="fa fa-times-circle" style="color:#FF502F"></i> 
                                <!-- multiply by 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberThousand;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="thirdResult" type="text" placeholder="total">
                                <!-- transmission of data-->
                                <input name="thirdCorrectResult" type="hidden"
                                value="<?php echo $thirdCorrectResult= multiply($randFirstNumber, $numberThousand); 
                                ?>">
                            </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                <!-- first random number-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                <b><?php $randFirstNumber = searchRandNumber($number,$from, $upTo) ?></b></span>
                                <i class="fa fa-times-circle" style="color:#FF502F"></i> 
                                <!-- multiply by 10-->
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b><?php echo $numberThousand;?></b></span>
                                <span class="col-lg-1 col-md-1 col-sm-2 col-xs-2"><b>=</b></span>
                                <input class="col-lg-3 col-md-3 col-sm-3 col-xs-3" name="fourthResult" type="text" placeholder="total">
                                <!-- transmission of data-->
                                <input name="fourthCorrectResult" type="hidden"
                                value="<?php echo $fourthCorrectResult= multiply($randFirstNumber, $numberThousand); 
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