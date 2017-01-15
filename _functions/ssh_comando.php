<?php

//sessão já foi iniciada na classe Conexão.php
require_once ('../_src/Conexao.php');

//Recuperando usuario, senha, ip do escopo de sessão
$ip = $_SESSION['ip'];
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
//Conectando com os dados da sessão
$conexao = new Conexao($ip, $usuario, $senha);
$conexao->conectar();

//Recuperando o comando digitado
$comando = $_POST['comando'];


//Verificação da conexão
if( $conexao->getHost() == $ip && $conexao->getUsuario() == $usuario && 
        $conexao->getSenha() == $senha  ){
    
    //Executando comando
    $resultado = $conexao->executarComando( $comando );    
    
    //Se o atributo de sessão 'retorno' já existir, concatena o resultado com os anteriores
    //Se não, simplesmente coloca o primeiro resultado no atributo 'retorno'
    if( isset($_SESSION['retorno']) ){
        
        $_SESSION['retorno'] .= "\n".$resultado;
        
    } else {
    
        $_SESSION['retorno'] = $resultado;
        
    }
    //Voltando para a página de comando
   header("Location: ../ssh.php");
    
} else {
    //Caso tenha algum problema na conexão, realizar ela novamente.
    echo "<script>alert('Realize a conexão novamente!')</script>";
    echo "<script>javascript:window.location='../ssh_acesso.php'; </script>";
    
}



