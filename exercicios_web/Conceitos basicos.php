<!doctype html>
<html lang="pt-BR">
<head>Primeiro código PHP com tags HTML</head>
<body>
 <h1>Título do texto</h1>
 <p><?php echo "Olá, mundo"; ?></p>
</body>
</html>

<?php
//Comentários de uma linha são realizados com a utilização de barras duplas

/*
Cada comando deve ser terminado com ;
Abaixo temos alguns exemplos de término de comandos
*/

echo "Olá, mundo\n";
$var1 = 2 + 2;

echo "O Resultado da soma é igual a: " . $var1;

<?php
 $_nomeCurso = "Programação de Páginas Dinâmicas com PHP";
 $ano_criacao = 1994;
 $flagLinguagemScript = true;
 
 <?php

$var1 = 4; //a variável foi inicializada com o valor de 4
$var1 += 2; //com a utilização da combinação de operadores a variável $var1 passou a ter o valor de 6 (4 + 2)
$var1 *= 2; //com a utilização da combinação de operadores a variável $var1 passou a ter o valor de 12 (4 + 2) * 2

$var2 = "Programação";
$var2 .= " com PHP"; //com a utilização da combinação de operadores a variável $var2 passou a ter o conteúdo "Programação com PHP"

$var = ($var4 = "Copie esses códigos") . " e pratique seus conhecimentos!" ;
/*
No exemplo acima o conteúdo da variável $var3 é igual a "Copie esses códigos e pratique seus conhecimentos!"
Já a variável $var4 possui o conteúdo "Copie esses códigos"
*/