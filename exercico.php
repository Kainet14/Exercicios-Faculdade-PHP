<?php
  $a = 10;
  $b = 'USCS';
  $c = TRUE;
  $d = 5.1;

  if(is_integer($a)) {
    echo '<br>$a é do tipo inteiro';
  }else{
    echo '<br>$nome não é do tipo inteiro';
  }
  if(is_string($b)) {
    echo '<br>$b é do tipo string';
  }else{
    echo '<br>$b não é do tipo string';
  }
  if(is_bool($c)) {
    echo '<br>$c é do tipo booleana';
  }else{
    echo '<br>$c não é do tipo booleana';
  }
  if(is_float($d)) {
    echo '<br>$d é do tipo float';
  }else{
    echo '<br>$d não é do tipo float';
}
?>
