<?php
//Conectat o sgbd
$db = mysqli_connect ('localhost', 'root', '', 'php');

//insere nome da entidade e seus atributos 
//$query =  mysqli_query( $db, 'CREATE TABLE contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, nome VARCHAR (255) NOT NULL, whatsapp BIGINT)');

//if ($query ){
    //echo  'Tabela criada com sucesso ! <br>';
//} else {
    //echo 'Não foi possível criar a tabela contatos';
//}
// Inserindo atributos  /////////////
$contato = [ 'nome' => 'Jose Bezerra' , 'whatsapp' => '55970260756'];
$insereContato = mysqli_query( $db,"INSERT INTO contatos (nome, whatsapp) VALUES ('{$contato['nome']}', '{$contato['whatsapp']}')");
if ($insereContato){
    echo 'Contato inserido com sucesso !';
}
// Listar o que eu quero na tabela
$query = mysqli_query( $db,  ' SELECT 
                                     id, nome,  whatsapp
                                FROM
                                 contatos');
//echo '<br><br><br><br>';                                 
//var_dump( $query -> fetch_assoc() );

echo '<table>';
echo "<tr><td>ID</td><td>Nome</td><td>Whatsapp</td><tr>";
while ( $registro = $query -> fetch_assoc() ){
    echo 
    "<tr>
    <td>{$registro ['id']}</td>
    <td>{$registro['nome']}</td>
    <td>{$registro ['whatsapp']}</td>
    <tr>";
}
echo '</table>';

if (mysqli_query( $db, 'DELETE FROM contatos WHERE ID = 6 ') ){
     echo "Registro apagado com sucesso!";
} else {
    echo "Não foi possível apagar o registro";
}
// $_POST $_GET $_REQUEST - Recebemos dados dos usuários através desses métodos
echo "<br><br> Nome enviado {$_POST['nm']} , whatsapp: {$_POST['whats']}";