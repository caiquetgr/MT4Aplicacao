/*
 * Arquivo de JavaScript da aplicação para MT4 Networks.
 * Por Caique Aquino Borges - 14/01/2016
 * 
 */


//Função para verificar se os campos da página de acesso ssh não estão vazios
function validaCampos(){
    
    var ip = document.getElementById('ip');
    var usuario = document.getElementById('usuario');
    var senha = document.getElementById('senha');
    
    if ( ip.value == "" || usuario.value == "" || senha.value == "" ){
        
        alert("Preencha todos os campos!");
        return false;
        
    }
    
    return true;
    
}

//Função para verificar se o usuário escreveu o comando antes de processar
function validaComando(){
    
    var comando = document.getElementById('comando');
    
    if( comando.value == "" ){
        
        alert("Insira um comando para executar!");
        return false;
        
    }
    
    return true;
    
}

//Função para rolar a textarea para a última linha, quando a página carregar
function rolarTextArea(){
    
    var textarea = document.getElementById('texto');
    textarea.scrollTop = textarea.scrollHeight;
    
    
}

//Função para verificar se foi escrito algum texto na página de criptografia
function validaCriptografia(){
    
    var texto = document.getElementById('texto');
    
    if( texto.value == "" ){
        alert("Escreva algum texto para ser criptografado!");
        return false;
    }
    
    return true;
    
}

//Função para verificar se foi escrito algum texto na página de criptografia
function validaDescriptografia(){
    
    var texto = document.getElementById('texto');
    
    if( texto.value == "" ){
        alert("Cole o seu texto descriptografado para que ele seja cifrado!");
        return false;
    }
    
    return true;
    
}