<?php
  $P1 = 7.0;
  $P2 = 4.0;
  $P3 = 6.0;

  $Media = $P1 + $P2 + $P3 /3.0;
  printf("Media: %s", number_format  ($Media,2));
  if ($Media >= 6.0)
  {
  printf("<br>aprovado");
  }
  else
  {
    printf("<br>reprovado");
  }
 ?>
