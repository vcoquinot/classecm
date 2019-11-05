<!-- operations-->
<?php
    function add($a,$b){
      $additionResult = $a + $b;
      return $additionResult;
    }
    function substract($a,$b){
      $additionResult = $a - $b;
      return $additionResult;
    }
    function multiplyn($a,$b){
      $additionResult = $a * $b;
      return $additionResult;
    }
    function divide($a,$b){
      $additionResult = $a / $b;
      return $additionResult;
    }

    function randCountNumberWithOneFigure($number){
        $randNumberOneFigure = $number.mt_rand(1,9);
        $randNumber=substr($randNumberOneFigure,1);
        echo $randNumber;
        return $randNumber;
      }
   


  ?>
  