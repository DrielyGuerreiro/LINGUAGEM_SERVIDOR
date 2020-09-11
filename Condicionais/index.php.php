<?php
$clima = 'gelado';
//Condicional if
if ($clima ==  'gelado'){
    echo "<br><br>Meu pé congela !<br><br>";
}

$bool = '1';

//Condicional "operador ternário"
$var = $bool === 1 ? '$bool é igual de 1': '$bool é diferente de 1';

 echo $var .  '<br><br>';

 $var = $bool !== 1 ? '$bool é diferente de 1': '$bool é igual de 1';

 echo $var . '<br><br>';

 $var = $bool !== 1 ?  '$bool é diferente de 1': '$bool é igual de 1';

 echo $var . '<br><br>';

 $frase =  'Meu pai tinha um cachorro amarelo e rosa';
 // if com compatador de valor e tipo de váriavel
    if (strpos ($frase, 'Meu') !== false) {
      echo "Encontrei o cachorro!";
    }elseif (stropos( $frase, 'meu')!== false){
      
    echo'Encontrei meu';
    }elseif (stropos( $frase, 'mEU')!== false){
      
    echo'Encontrei MEU';

    }elseif (stropos( $frase, 'Meu')!== false){
      
        echo'Encontrei Meu';
    
    }else {
      echo "Não há cachorro algum !";
 }

echo '<br><br>';      
      
//switch
switch ($clima){

    case 'quente':
        echo 'Adoro clima quente!';
            if (true){
            echo '<br> .... if  dentro de um switch';
            }
            if (true){
            echo '<br>.... if aninhado dentro de um switch';
            }
        break; 
    case 'morno':  
        echo 'Morno é melhor que frio!';
        break;
    case 'frio':
        echo 'Frio eu adoro quando está longe';
        break;
    case 'gelado':
        echo'Canadá';
        break;       
    default:
        echo 'Clima desconhecido';
        break;
}
$isso ='véi';

//Condicional nova no php

$isso = $isso ?? 'coisa';

echo "<br><br> Olha só $isso";

