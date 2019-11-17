<?php
/*Operation*/
    function add($a,$b) {
      $additionResult = $a + $b;
      return $additionResult;
    }
    function substract($a,$b) {
      $substractResult = $a - $b;
      return $substractResult;
    }
    function multiply($a,$b) {
      $multiplyResult = $a * $b;
      return $multiplyResult;
    }
    function divide($a,$b) {
      $divideResult = $a / $b;
      return $divideResult;
    }
/*rand*/
    function searchRandNumber($number,$from, $upTo) {
      $randNumber=$number.mt_rand($from,$upTo);
      $randNumber=substr($randNumber,1);
      echo $randNumber;
      return $randNumber;
    }
  
   


  ?>
  