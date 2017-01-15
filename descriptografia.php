<?php

//Inicia a sessão criptografia
session_start("criptografia");
//Desatribui a variável de sessão 'textoClaro', que caso exista,
//contém a última descriptografia
unset($_SESSION['textoClaro']);
//destrói a sessão, 
session_destroy();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MT4 Descriptografia</title>
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
        
           <h2 style="text-align:center; font-family: 'Times New Roman', Times, serif;">
               Descriptografe um texto
           </h2> 
           <br><br>
           
           <div class='row'>
               
               <div class='col-sm-2'> </div>
               
               <div class='col-sm-8'>
                  
                   <form onsubmit='return validaDescriptografia();' action='_functions/descriptografar_texto.php'
                         method='POST'>
                       
                       <div class="form-group">
                            <label for="comment">Cole o seu texto criptografado:</label>
                            <textarea class="form-control" rows="6" id="texto" name='texto'></textarea>
                        </div>
                        
                       <button type="submit" class="btn btn-default" id='botao'>Descriptografar</button>
                   
                   </form>  
                   
               </div> 
               
               <div class='col-sm-2'> </div>
               
           </div>   
            
        <?php include('footer.php'); ?>    
            
        </div>
    </body>
</html>