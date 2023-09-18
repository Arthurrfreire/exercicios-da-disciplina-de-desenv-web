<?php

 $var1 = 10;
 $var2 = 20;

 if($var1 > $var2){
	echo "$var1 é maior que $var2";
 }
 
 ---------------------------------------------------------------
<?php

 $var1 = 10;
 $var2 = 20;

 if($var1 > $var2){
	echo "$var1 é maior que $var2";
 }else{
	echo "$var1 é menor que $var2";
 }
 
 -------------------------------------------------------------------
 
<?php

 $var1 = 10;
 $var2 = 10;

 if($var1 > $var2){
	echo "$var1 é maior que $var2";
 }elseif($var1 < $var2){
	echo "$var1 é menor que $var2";
 }else{
	echo "$var1 e $var2 são iguais";
 }
 
 -----------------------------------------------------------------------
 
<?php

 switch($var1){
	case 10:
		echo "var1 é igual a 10";
	case 20:
		echo "var1 é igual a 20";
		break;
	default:
		echo "var1 não é igual a 10 e nem a 20";
		break;
 }
 
 ---------------------------------------------------------------------------------
 
<?php

 $var1 = 10;
 $var2 = 10;

 if($var1 > $var2):
	echo "$var1 é maior que $var2";
 elseif($var1 < $var2):
	echo "$var1 é menor que $var2";
 else:
	echo "$var1 e $var2 são iguais";
 endif;
 
 ---------------------------------------------------------------------------------------
 
 <?php

 $var1 = 10;
 $var2 = ($var1 >= 10) ? 11 : 9;
 echo $var2; //imprimirá 11

----------------------------------------------------------------------------------------- 
<?php

 $i = 2;
 while ($i <= 20) {
	echo $i;
	$i+=2;
	echo "\n";
 }

 /*Sintaxe alternativa*/
 $i = 2;
 while ($i <= 20):
	echo $i;
	$i+=2;
	echo "\n";
 endwhile;
 
 ----------------------------------------------------------------------------------------------
 
<?php

 $i = 2;
 do {
	echo $i;
	$i+=2;
	echo "\n";
 }while ($i <= 20);
 
 ----------------------------------------------------------------------------------------------
 
 <?php

 for ($i = 1; $i <= 20; $i++) {
	echo $i;
	echo "\n";
 }
 
 ------------------------------------------------------------------------------------------------
 
 <?php
 $carros = Array("Fusca", "Monza", "Passat");

 foreach($carros as $carro){
	echo $carro;
	echo "\n";
 }

 for ($i = 0; $i < count($carros); $i++) {
	echo $carros[$i];
	echo "\n";
 }