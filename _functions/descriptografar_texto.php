<?php

//Importando classe Criptografia
require_once("../_src/Criptografia.php");

//Iniciando sessão
session_start("criptografia");

//Recebe o texto criptografado passado via POST
$texto = $_POST['texto'];

//Instancia objeto de Criptografia
$cript = new Criptografia();


//Descriptografando e armazenando na variavel $textoClaro
$textoClaro = $cript->descriptografar($texto);

//Atribuindo à variável de sessão textoClaro
$_SESSION['textoClaro'] = $textoClaro;

//Redirecionando para a página que exibe o resultado
header("Location: ../descriptografia_resultado.php");


?>