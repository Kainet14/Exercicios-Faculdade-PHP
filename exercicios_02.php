<?php
  $consumoconbustivel = 12;
  $velocidademedia =85;
  $tempodeviagem = 10;
  $custolitrogasolina = 4;


  $distanciapercorrida = $velocidademedia * $tempodeviagem;
  $litrogastos = $distanciapercorrida / $consumoconbustivel;
  $custoviagem = $litrogastos * $custolitrogasolina;


   ?>
