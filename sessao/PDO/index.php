<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'mysql:dbname=wp;host=localhost';

//Tutorial para instalação dos drivers: 
//https://hcode.com.br/blog/instalando-sql-server-e-conectando-com-php

//DSN para SQL Server
//$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=MyDatabase';
$user = 'root';
$password = '';

$db = new PDO($dsn, $user, $password);

$sql = 'SELECT nome, telefone FROM cliente';

foreach ( $db->query($sql) as $registro ) {

	echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}<br>\n";
}
