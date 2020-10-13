<?php

require_once 'db.php';
$objStmt = $objBanco->prepare('	INSERT INTO contatos 
									( nome, whatsapp)
								VALUES 
									( :nm, :wzap)');


//Substitui :nm e :wzap pelo valor enviado pelo usuário

$objStmt->bindParam(':nm', $_POST['nm']);					
$objStmt->bindParam(':wzap', $_POST['whats']);	


if ( $objStmt-> execute() ) {

	$msg = 'Obrigado por se cadastrar';

} else {

	$msg = ' :-( deu erro, tente novamente! ';
}

//Chama o template (front-end)

include ('grava_contato_tpl.php');

//Consulta contato

$tabela = array ();
$lista_sql = 'SELECT id, nome, whatsapp FROM contatos ORDER BY nome';
foreach ( $objBanco -> query ( $lista_sql ) as  $registro ) {
    $tabela [$registro ['id']] = ['nome' => $registro ['nome'], 
                                  'whatsapp' => $registro ['whatsapp']];
    
}

include  'lista_contato_tpl.php';