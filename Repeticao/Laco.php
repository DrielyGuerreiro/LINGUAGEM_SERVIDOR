<?php

date_default_timezone_set ('America / Sao_Paulo');

// Exemplo de para
 para ($ i = 0, $ j = 4; $ i <5 && $ j> = 0; $ i ++, $ j--) {

 echo "Linha: $ i $ j <br>";
}

 echo '<br> <br>';

 // Exemplo de enquanto
 $ i = 0;
 $ j = 4;
 
 enquanto ($ i <5 && $ j> = 0) {

 echo "Linha: $ i $ j <br>";

 $ i ++;
 $ j--;
}

 echo '<br> <br>';

 // Exemplo de do while
 $ i = 0;
 $ j = 4;

 do {

 echo "Linha: $ i $ j <br>";

 $ i ++;
 $ j--;

} enquanto ($ i <5 && $ j> = 0);

 echo '<br> <br>';

 // Solução com muitas linhas (sem vetor)
 $ domingo = 0;
 $ segunda = 1;
 $ terca = 2;
 $ quarta = 3;
 $ quinta = 4;
 $ sexta = 5;
 $ sabado = 6;

 echo '<br> <br>';

 var_dump (data ('d / m / Y')); // Para fazer o debug (detalhado)

 echo '<br> <br>';

 switch (data ('w')) {

 case $ domingo:
 echo 'Domingo';
 pausa;
 case $ segunda:
 echo 'Segunda';
 pausa;
 case $ terca:
 echo 'Terça';
 pausa;
 case $ quarta:
 echo 'Quarta';
 pausa;
 case $ quinta:
 echo 'Quinta do switch <br>';
 pausa;
 case $ sexta:
 echo 'Sexta';
 pausa;
 case $ sabado:
 eco 'Sábado'; 		
 pausa; 	
} 

 // Solução com linhas linhas (com vetor)
 $ semana [0] = 'Domingo';
 $ semana [1] = 'Segunda';
 $ semana [2] = 'Terça';
 $ semana [3] = 'Quarta';
 $ semana [4] = 'Quinta';
 $ semana [5] = 'Sexta';
 $ semana [6] = 'Sábado';

 $ hoje = data ('w');

 eco "Hoje é". $ semana [$ hoje];