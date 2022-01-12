<?php
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];
  $d = $b*$b - 4*$a*$c;

  if($d == 0){
    $r1 = $b/(2*$a);
    $r2 = "undefined";
  }

  else if ($d < 0) {
    $r1 = "undefined";
    $r2 = "undefined";
  }

  else {
    $r1 = (-$b + sqrt($b*$b -4*$a*$c))/2*$a;;
    $r2 = (-$b - sqrt($b*$b -4*$a*$c))/2*$a;;

  }

  echo "r1 = ".$r1.", r2 = ".$r2;
  ?>
