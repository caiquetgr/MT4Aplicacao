<?php

class Criptografia {
    
    //Atributos
    private $chave;
    private $metodo;
    private $iv;
    
    //Construtor
    function __construct() {
        $this->chave = "An0th3r_0ne-B1tes Th3Dus7";
        $this->metodo = "aes-256-cbc";
    }
    
    //Getters e Setters
    function getChave() {
        return $this->chave;
    }

    function getMetodo() {
        return $this->metodo;
    }

    function getIv() {
        return $this->iv;
    }

    function setChave($chave) {
        $this->chave = $chave;
    }

    function setMetodo($metodo) {
        $this->metodo = $metodo;
    }

    function setIv($iv) {
        $this->iv = $iv;
    }

    /*
     * Metodo criptografar($texto)
     * Criptografa o texto recebido com AES-256.
     * Retorna: string $criptografado
     */
    function criptografar($texto){
        
        //Gerando e settando iv
        $this->setIv( mcrypt_create_iv( 16, MCRYPT_DEV_URANDOM ) );
        
        //Criptografando
        $criptografado = openssl_encrypt( $texto, $this->getMetodo(),
                $this->getChave(), OPENSSL_RAW_DATA, $this->getIv() );
        
        //Codifica com MIME base64 a string criptografada e concatena com o iv 
        $criptografado = base64_encode( $this->getIv() . $criptografado );
        
        //Retorna o texto cifrado
        return $criptografado;
        
    }

    /*
     * Metodo descriptografar($texto)
     * Descriptografa o texto recebido.
     * Retorna: string $descriptografado
     */
    function descriptografar($texto){
        
        //Decodificando MIME base64, recuperando o iv do texto cifrado
        //e settando no iv atual do objeto
        $this->setIv( substr( base64_decode( $texto ), 0, 16 ) );
        
        //Descriptografando texto cifrado
        $descriptografado = stripslashes(  openssl_decrypt( substr( base64_decode($texto), 16 ),
                $this->getMetodo(), $this->getChave(), OPENSSL_RAW_DATA, $this->getIv() )  );
        
        //Retorna o texto claro
        return $descriptografado;
        
    }
    
}
