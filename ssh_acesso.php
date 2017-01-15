<?php

//Se chegou nessa página via "ssh_sair.php", desatribuir a variável $_GET['sair']
//para evitar loop
unset($_GET['sair']);

//Quando acessar essa página, chama o 'ssh_sair.php', para 
//garantir que a sessão esteja limpa
include('_functions/ssh_sair.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MT4 SSH Login</title>
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
    <body>
       <div class="container">
            
        <?php include('header.php'); ?>
        
           <h2 style="text-align:center; font-family: 'Times New Roman', Times, serif; margin-top: -8px;">
               Acesso remoto via SSH
           </h2> 
           <br>
           
           <div class='row'>
               
               <div class='col-sm-4'> </div>
               
               <div class='col-sm-4'>
                   
                   <form onsubmit="return validaCampos();" action="_functions/ssh_login.php" method="POST">
                   <div class="form-group">
                       <label for="ip">IP</label>
                       <input type="text" class="form-control" name="ip" id="ip"/>                       
                   </div>  
                   
                   <div class="form-group">
                       <label for="usuario">Usuário</label>
                       <input type="text" class="form-control" name="usuario" id="usuario"/> 
                   </div>  
                   
                   <div class="form-group">
                       <label for="senha">Senha</label>
                       <input type="password" class="form-control" name="senha" id="senha"/> 
                   </div> 
                   
                       <button type="submit" class="btn btn-default" style="float:right;">Entrar</button>
                   
                   <?php
                      if( isset($_SESSION['mensagem']) ){
                          echo "<p style='color: red'>".$_SESSION['mensagem']."</p>";
                      }
                   ?>
                   
                   </form>
                   
               </div> 
               
               <div class='col-sm-4'> </div>
               
           </div>   
            
        <?php include('footer.php'); ?>    
            
        </div>
    </body>
</html>