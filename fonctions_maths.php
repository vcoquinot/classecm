<!-- operations-->
<?php
    function add($a,$b){
      $additionResult = $a + $b;
      return $additionResult;
    }
    function substract($a,$b){
      $substractResult = $a - $b;
      return $substractResult;
    }
    function multiply($a,$b){
      $multiplyResult = $a * $b;
      return $multiplyResult;
    }
    function divide($a,$b){
      $divideResult = $a / $b;
      return $divideResult;
    }

    function randCountNumberWithOneFigure($number){
        $randNumberOneFigure = $number.mt_rand(1,9);
        $randNumber=substr($randNumberOneFigure,1);
        echo $randNumber;
        return $randNumber;
    }

    function randCountNumberWithSeveralFigures($number){
      $randNumberOneFigure = $number.mt_rand(10,999);
      $randNumber=substr($randNumberOneFigure,1);
      echo $randNumber;
      return $randNumber;
  }

  /*function searchRandNumnber($number, $from, $upTo){
    $randNumber=$number.mt_rand($from,$upTo);
    $randNumber=substr($randNumber,1);
    echo $randNumber;
  }
  */
   


  ?>
  