<?php session_start(); 
include ("fonctions_maths.php"); ?>  
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">       
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   
      <link rel="stylesheet" href="css/classecm.css">
      <title>Additions posées</title>
   </head>
   <body>
   <?php     
    // Two random numbers to add      
    $a=0;
    $b=0;
    $randFirstNumber = mt_rand(10,999);
    $randSecondNumber = mt_rand(100,999);
    ?>

    <div class="container">
        <h1 class="text-center">Additions posées</h1>
        <header class="text-center mb-4 pt-2 pb-2 bg-info">
            <h2 class="text-light">C'EST PARTI</h2>
            <p class="subheading font-weight-light mb-2 text-light">Place bien les untités, dizaines, centaines... </p>
            <!-- Image -->
            <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=Blonde&facialHairType=Blank&clotheType=Hoodie&clotheColor=Red&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Smile&skinColor=Pale' alt=""/>
        </header>

        <form action="cible_operations.php" method="get">
          <!-- operation display-->
            <div class="row justify-content-center">
                <h3 class="text-info font-weight-bold"><?php echo "Calcule ". $randFirstNumber . " + " . $randSecondNumber ?></h3>
            </div>
            <small class="form-text text-muted text-center offset-lg-2">Indique ici  les retenues si tu en as</small>
            <div class="input-group mb-3 justify-content-center">                
                <input type="text" class="form-control col-lg-1 offset-lg-2" placeholder="retenue" aria-label="retenue" aria-describedby="">
                <input type="text" class="form-control col-lg-1" placeholder="retenue" aria-label="retenue" aria-describedby="1">
                <input type="text" class="form-control col-lg-1" placeholder="retenue" aria-label="retenue" aria-describedby="1">
                <input type="text" class="form-control col-lg-1" placeholder="retenue" aria-label="retenue" aria-describedby="">
              </div>
            <!--operation first line-->
            <div class="input-group mb-3 justify-content-center">
                <input type="text" class="form-control col-lg-1 offset-lg-2" placeholder="millier" aria-label="millier" aria-describedby="">
                <input type="text" class="form-control col-lg-1" placeholder="centaine" aria-label="centaine" aria-describedby="1">
                <input type="text" class="form-control col-lg-1" placeholder="dizaine" aria-label="dizaine" aria-describedby="1">
                <input type="text" class="form-control col-lg-1" placeholder="unite" aria-label="unite" aria-describedby="">
            </div>
            <!--operator + operation second line-->
            <div class="input-group mb-3 justify-content-center">
                <div class="input-group-prepend col-lg-1 offset-lg-1">
                  <span class="input-group-text">+</span>
                </div>
                <input type="text" class="form-control col-lg-1" placeholder="millier" aria-label="millier" aria-describedby="">
                <input type="text" class="form-control col-lg-1" placeholder="centaine" aria-label="centaine" aria-describedby="1">
                <input type="text" class="form-control col-lg-1" placeholder="dizaine" aria-label="dizaine" aria-describedby="1">
                <input type="text" class="form-control col-lg-1" placeholder="unite" aria-label="unite" aria-describedby="">
            </div>
            <!--total-->
            <div class="input-group mb-3 justify-content-center">
                <div class="input-group-prepend col-lg-1 offset-lg-1">
                  <span class="input-group-text">=</span>
                </div>
                <input type="text" class="form-control col-lg-1" placeholder="millier" aria-label="millier" aria-describedby="" name="total1">
                <input type="text" class="form-control col-lg-1" placeholder="centaine" aria-label="centaine" aria-describedby="" name="total2">
                <input type="text" class="form-control col-lg-1" placeholder="dizaine" aria-label="dizaine" aria-describedby="" name="total3">
                <input type="text" class="form-control col-lg-1" placeholder="unite" aria-label="unite" aria-describedby="" name="total4">
            </div>
            <div>
              <!-- hidden input to send user answer data-->
                <input type="hidden" name="correctTotal" value="<?php $correctTotal= add($randFirstNumber, $randSecondNumber); 
                echo $correctTotal; ?>">
                <input type="hidden" name="questionNumber" >
                <input class="input border border-primary" type="hidden" name="url" value="operation_addition.php">
            </div>
            <!-- validation button-->
            <div class="row justify-content-center">
              <button type="submit" class="btn btn-info mb-2 justify-content-center">Vérifier</button>
            </div>
          </div>
      </form>
   </body>
</html>
