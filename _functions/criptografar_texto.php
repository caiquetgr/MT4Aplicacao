<?php

//Importando classe Criptografia
require_once("../_src/Criptografia.php");

//Iniciando sessão
session_start("criptografia");

//Recebe o texto claro passado via POST
$texto = $_POST['texto'];

//Instancia objeto de Criptografia
$cript = new Criptografia();


//Criptografando e armazenando na variavel textoCriptografado
$textoCifrado = $cript->criptografar($texto);

//Atribuindo à variável de sessão textoCifrado
$_SESSION['textoCifrado'] = $textoCifrado;

//Redirecionando para a página que exibe o resultado
header("Location: ../criptografia_resultado.php");

?>