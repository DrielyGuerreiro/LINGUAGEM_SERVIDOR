<?php
 
 
 date_default_timezone_set ('America/Sao_Paulo');


 //Código para mostrar erros

    ini_set ('display_errors', 1);
    ini_set ('display_startup_errors', 1);
    error_reporting ('E_ALL');
 
 // Solução com linhas linhas (com vetor)

 $semana [0] = 'Domingo';
 $semana [1] = 'Segunda';
 $semana [2] = 'Terça';
 $semana [3] = 'Quarta';
 $semana [4] = 'Quinta';
 $semana [5] = 'Sexta';
 $semana [6] = 'Sábado';

 $hoje = date ('w');

 echo "<br>Hoje é   ". $semana [$hoje] .  "<br>";
 echo "<br><br>";
 
 unset($semana); //deleta a função- sem termos que apagar o código.
 
//Início da aula 03/09

//var_damp - Serve para ver o debug das coisas 

 // var_dump ($semana);//

 // Índice alfanumérico

$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terça'] = 2;
$semana['Quarta'] = 3;
$semana['Thursday'] = 4;
$semana['Sexta'] = 5;
$semana['Sabado'] = 6;

$hoje = date('l');

//var_dump($hoje);

// *Prof segui certinho o passo a passo e não funcionou nesse código ;( não soube resolver sozinha.

echo "<br>Hoje é " . $semana [$hoje] . " com índice alfanumérico<br>";

echo "<br> <br>";

echo "<br> Hoje  é " . $semana['Sabado'] . " com índice alfanumérico <br>";

echo "<br><br>";

unset($semana);

//deleta a função- sem termos que apagar o código.

//Escrever frase usando vetor : "O professor Luiz Bono tem 25 anos, pesa 67,8 Kg e é aquariano

$usuario = [
                'nome' => 'Luiz Bono',
                'idade' => 25,
                'peso' => 67.8,
                'profissão' => 'professor',
                'signo' => 'aquariano'];

echo "<br><br>";

echo "<br> O ". $usuario['profissão'] . $usuario['nome'] . " tem " . $usuario['idade'] . " anos, pesa " . $usuario['peso'] . " Kg e é " .  $usuario['signo']. ".";

echo "<br><br>";

// Como mostrar vetor dentrp de string especial (Entre aspas duplas)

// echo "<br> O  {$usuario['profissão']}{ $usuario['nome']}  tem  { $usuario[idade']} anos, pesa {$usuario['peso']} Kg e é {$usuario['signo']} .";
    
//Não coloquei formatação pois no servidor web o meu apareceu da forma correta, mas ciente do campo number_format (String)
unset($usuario); //deleta a função- sem termos que apagar o código.


//Exemplo de vetor com mais de uma dimensão (martriz)

$professores = array(0 => array( 'nome' => 'Luiz Bono',
                                'idade' => 25,
                                'peso' => 67.8,
                                'profissão' => 'professor',
                                'signo' => 'aquariano'),
                    1 => array( 'nome' => 'Thiago Claro',
                                'idade' => 35,
                                'peso' => 120.8,
                                'profissão' => 'professor',
                                'signo' => 'sagitariano'),
                     3 => array(  'nome' => 'Thiago Quintas',
                                'idade' => 21,
                                'peso' => 78.8,
                                'profissão' => 'leonino'),);
?>


<table border="1">
"<tr><td>ID</td><td>Nome</td><td>Idade</td><td>Peso</td><td>Signo</td></tr>"

<?php

//Exemplo de Matriz e html 

foreach ($professores as  $linhas => $professor) {

    echo "<tr> 
        <td>$linhas</td>
        <td>{$professor['nome']}</td>
        <td>{$professor['idade']}</td>
        <td>{$professor['peso']}</td>
        <td>{$professor['signo']}</td></tr>";
}

?>
</table>
