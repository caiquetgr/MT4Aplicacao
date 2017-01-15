<?php

//Arquivo para destruir os atributos da sessão ao clicar no botão "Sair"
//na página ssh.php

//Inicializa sessão
session_start('ssh');

//Desatribuindo as variáveis
unset($_SESSION['ip']);
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
unset($_SESSION['retorno']);


//Saber se veio da página ssh.php, para evitar loop caso venha da própria ssh_acesso.php
if( isset($_GET['sair']) ){
    echo "<script>javascript:window.location='../ssh_acesso.php'; </script>";
}