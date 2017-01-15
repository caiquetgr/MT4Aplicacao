<?php

//Inicializando sessão
session_start('ssh');

//Verificando se há os atributos da conexão
//Caso não haja, pede para que o login seja feito e redireciona para a
//páina ssh_acesso.php
if( !isset($_SESSION['ip']) || !isset($_SESSION['usuario']) || !isset($_SESSION['senha'])  ){
    echo "<script>alert('Faça o login!')</script>";
    echo "<script>javascript:window.location='ssh_acesso.php'; </script>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MT4 SSH</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="_css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="_css/header.css">
        <link rel="stylesheet" type="text/css" href="_css/footer.css">
        <link rel="stylesheet" type="text/css" href="_css/index.css">
        <link rel="stylesheet" type="text/css" href="_css/criptografia.css">
        
        <script src="_js/bootstrap.min.js"></script>
        <script src="_js/jquery.min.js"></script>
        <script src="_js/mt4aplicacao.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body onload="rolarTextArea()">
       <div class="container">
            
        <?php include('header.php'); ?>
        
           <div class='row'>
           
                <div class='col-sm-2'> </div> 
               
                
                <div class='col-sm-8'>
                    <h2 style="text-align:center; font-family: 'Times New Roman', Times, serif; margin-top:-5px;">
                        Acesso SSH (<?php echo $_SESSION['usuario'] ?>)
                    </h2> 
                </div>    
           
                <div class='col-sm-1'> </div> 
                
                <div class='col-sm-1'> 
                    <form action='_functions/ssh_sair.php' method='GET'>
                        <input type='hidden' value='true' name='sair'/>
                        <button type='submit' class='btn btn-default' id='sair'>Sair</button>
                   </form>
                </div>   
            </div>
           
             <br>      
           
           <div class='row'>
               
               <div class='col-sm-2'> </div>
               
               <div class='col-sm-8'>
                   <form onsubmit="return validaComando();" action='_functions/ssh_comando.php' method='POST'>
                        <div class="form-group">
                            
<!--                        Operador ternário para saber se há conteúdo na variável de sessão "retorno",
                            se tiver, imprime ela na textarea, se não, imprime vazio-->
                            
                            <textarea disabled class="form-control" rows="6" id="texto" 
                            name='texto'><?php echo ( isset($_SESSION['retorno']) ? 
                                    $_SESSION['retorno'] : "" );  ?></textarea>
                            
                            <br/>
                            
                            <label for="comando">Comando:</label><input type="text"
                            class="form-control" name="comando" autofocus>
                        </div>
                       
                        <button type="submit" class="btn btn-default" id='botao'>Executar</button>
                        
                    </form>   
               </div> 
               
               <div class='col-sm-2'> </div>
               
           </div>   
            
        <?php include('footer.php'); ?>    
            
        </div>
    </body>
</html>