<?php

//Inicializa sessão 'criptografia'
session_start('criptografia');

//Caso a variável de sessão 'textoCifrado' não tenha valor ou não exista, voltará
//para a página onde é inserido o texto claro.
//Para evitar que esta página seja acessada sem passar pela que insere o texto para cifrar.
if( !isset($_SESSION['textoCifrado']) ){
    header("Location: criptografia.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MT4 Criptografia</title>
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
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
       <div class="container">
            
        <?php include('header.php'); ?>
        
           <h2 style="text-align:center; font-family: 'Times New Roman', Times, serif;">
               Resultado
           </h2> 
           <br>
           
           <div class='row'>
               
               <div class='col-sm-2'> </div>
               
               <div class='col-sm-8'>
                   
                   <!-- Imprime o texto criptografado -->
                   <h5 style="text-align: center"> <?php echo $_SESSION['textoCifrado']; ?> </h5><br/>
                   <form action='criptografia.php' method='POST'>
                        <button type="submit" class="btn btn-default" id='botao'>Voltar</button>
                    </form>   
               </div> 
               
               <div class='col-sm-2'> </div>
               
           </div>   
            
        <?php include('footer.php'); ?>    
            
        </div>
    </body>
</html>