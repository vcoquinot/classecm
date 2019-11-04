<?php
$numberOfQuestions = 0;
function scoreDisplay($numberOfQuestions){
  ?>
  <section class="container">
    <header class="row justify-content-center">
      <h3><?php echo "Tu as obtenu un total de ". $_SESSION['score']. " points sur ". $numberOfQuestions ;?></h3>
    </header>
  </section>
  <?php
}

function resetScoreAndQuestionNumbers(){
    $_SESSION['score'] = 0; 
    $_SESSION['numeroQuestion'] = 1;
    }
    ?>

