<?php

session_start('ssh');

//Importando biblioteca SSH2 da phpseclib
set_include_path("../_lib/phpseclib/");
include("../_lib/phpseclib/Net/SSH2.php");

class Conexao {
    
    //Atributos
    private $host;
    private $usuario;
    private $senha;
    private $conexao;
    
    //Construtor
    function __construct($host, $usuario, $senha){
        $this->host = $host;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->conexao = null;
    }
    
    //Getters e Setters
    function getHost() {
        return $this->host;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    
    function getConexao() {
        return $this->conexao;
    }

    function setConexao($conexao) {
        $this->conexao = $conexao;
    }

        //Fim Getters e Setters
    
    
    /*
        Método conectar()
     *  Realiza a conexão via SSH com o $host e atribui a $conexao
     */
    function conectar(){
        
        //Instancia um objeto Net_SSH2, passando o Ip digitado como parâmetro
        $ssh = new Net_SSH2( $this->getHost() );

        //Verificação
        //Caso não esteja certo, verifica qual foi o problema (Usuário/Senha ou a conexão)
        //e envia de volta para a página de login, informando o problema
        if( !$ssh->login( $this->getUsuario() , $this->getSenha() ) ){
            
            $_SESSION['mensagem'] = $ssh->isConnected() ?
            'Usuário e/ou senha errado(s)!' : 'Falha na conexão!';
            
            header('Location: ../ssh_acesso.php');
            
        } else {
        
            //Sem mensagem, pois não houve erro nem problemas
        $_SESSION['mensagem'] = "";    
            //Atribui o objeto à conexão, utilizado para executar
        $this->setConexao( $ssh );
        
        }
    }
    
    /*
     * Método executarComando()
     * Executa um comando no terminal via SSH
     * Retorna: string $resultado (resultado do comando)
     * 
     * Obs: Precisa que a conexão tenha sido realizada (via método conectar)
     */
    function executarComando($comando){
        
        $resultado = "";
        
        //Se a conexão existir
        if( $this->getConexao() != null ){
            //Chama o método exec(), passando o comando, e atribui à
            // variável $resultado
          $resultado = $this->getConexao()->exec($comando); 
            
        } else {
            //Caso haja algum problema com a conexão, cancela a execução
            die("A conexão precisa ser realizada!");
            
        }
        //retorna o resultado do comando para ser exibido
        return $resultado;
        
    }
    
    
}
