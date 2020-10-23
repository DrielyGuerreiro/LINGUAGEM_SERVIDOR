<?php
ini_set('display_errors', 1);
ini_set('display_startup_erroros', 1);
error_reporting(E_ALL);
var_dump($_POST);

$nota = $_POST ['nota'];
$explicacao =$_POST['explicacao'];

echo "<br><br> Você deu nota $nota pelo nosso serviço, por motivo $explicacao";