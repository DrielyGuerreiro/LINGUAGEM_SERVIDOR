<?php

require_once 'config.php';

$objBanco = new PDO( DSN, DB_USER, DB_PASS); // conectou no banco de dados com objeto


$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM php.contatos', PDO::FETCH_ASSOC) ;



// var_dump($objBanco ->errorInfo() ); // Debug para corrigirmos os nosso erros 


foreach ($consulta as $registro ){
    echo "ID: {$registro ['id']}  NOME:{$registro['nome']} WZAP:{$registro['whatsapp']} <br>";
}

//if ( $objBanco ->query('DELETE FROM php.contatos WHERE id = 4') ){
 //   echo "<br>REGISTRO APAGADO <br>";
//}

if ($objBanco-> query ("INSERT INTO php.contatos (nome, whatsapp) VALUES ('Joaquim Santos', '55071260947')") ) {
    echo "<br> DADOS INSERIDOS COM SUCESSO <br>";
}else{
    echo "<br> Falha ao inserir <br> .";
}

if ($objBanco-> query ("UPDATE php.contatos SET nome = 'Eugenio Fagundes' WHERE id ='4')") ) {
    echo "<br> DADOS ATUALIZADOS COM SUCESSO <br>";
}else{
    echo "<br> FALHA AO ATUALIZAR .";
}
//var_dump($objBanco ->errorInfo() );
