<?php

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

    function operacao(	float $num1, //float é o tipo de dado que queremos 
					float $num2 , 
					string $operacao = '+'  ): ?float {// Saída, o ? permite null  

        switch ($operacao ){

		case '+':
			return $num1 + $num2; // saída e por isso não preciso usar break

		case '-':

			return $num1 - $num2;
		case '/':

			return $num1 / $num2;

		case '*':

			return $num1 * $num2;

		default:

			return null;
	}
 }

  $dia = 2;//Variável fora do escopo da função 

  function dia_da_semana( int $dia ): string
  {
	$semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

	return $semana[$dia] ?? 'Use de 0 a 6';
  }

  echo "<br><br> O resultado é: " . operacao( 2.5, 2.5, '*') . "<br><br> ";

  echo "<br><br> O dia é " . dia_da_semana(6) . "<br><br> ";

 $nome = 'Driely';
 function muda_nome( string $var): string {
     $var =  'Outro nome';
     return  $var;
 }
 echo "<br>A função retornará: " .muda_nome($nome). "<br><br>";

 echo "<br A variavel \$nome  ainda vale: $nome <br><br>";


