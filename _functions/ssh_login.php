<?php

//A sessão é iniciada dentro da classe Conexao.php

//Importando a classe Conexao
require_once ('../_src/Conexao.php');

//Recuperando usuario, senha, ip que foram passados na página anterior
$ip = $_POST['ip'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Instanciando a conexão
$conexao = new Conexao($ip, $usuario, $senha);

//Chamando método que faz a conexão
$conexao->conectar();

//Se a conexão não for realizada com sucesso, o método conectar() redireciona
//de volta para a página ssh_acesso, informando qual foi o problema e para que
//possa entrar com os dados novamente

//Aviso caso a conexão seja feita com sucesso
echo "<script>alert('Conexão realizada com sucesso!')</script>";

//Atribuindo variáveis ao escopo de sessão
$_SESSION['ip'] = $ip;
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;

//Redirecionamento para a página de execução de comandos
echo "<script>javascript:window.location='../ssh.php'; </script>";

?>
