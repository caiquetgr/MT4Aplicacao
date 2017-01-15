<!DOCTYPE html>
<html>
    <head>
        <title>MT4 Aplicação - Sobre</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="_css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="_css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="_css/header.css">
        <link rel="stylesheet" type="text/css" href="_css/footer.css">
        <link rel="stylesheet" type="text/css" href="_css/index.css">
        
        <script src="_js/bootstrap.min.js"></script>
        <script src="_js/jquery.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container">
        <?php include('header.php'); ?>
        
            <div class='row'>
                
             <div class='col-sm-2'></div>
                
               <div class='col-sm-8'>
                <h4 style='font-weight: normal; font-size: 16px;'><p>Este aplicativo web foi feito para um teste em uma
                    vaga de estaǵio na MT4 Networks, proposto por Antonio Vieira, para que possam ter
                    uma análise do meu perfil de desenvolvedor.</p>
                <p>A proposta deste desafio é criar um mini sistema web, que tenha duas funcionalidades: 
                Integração SSH e Criptografia. Coloquei também a descriptografia com um adicional e também por teste.</p>
                <p>Na integração SSH, é requerido o IP do equipamento/servidor, o usuário e a senha. Depois das
                validações, é possível digitar os comandos em um textbox e receber o resultado numa textarea.</p>
                <p>Nas partes de criptografia/descriptografia, são feitas pelo método AES256. Apenas é requerido o texto
                para ser (des)criptografado, a ao apertar o botão (Des)Criptografar, é apresentado o resultado.</p>
                <p>Procurei nesta aplicação colocar verificações em todos os campos, e também segurança para evitar
                    que páginas sejam acessadas sem passar pelos campos e verificações.</p>
                <br/><br/>
                <p>Todos os direitos da logo utilizada na banner são reservados à MT4 Networks.</p>
               </div>
                    </h4>
              <div class='col-sm-2'></div>
            
            </div>
        <?php include('footer.php'); ?>  
        </div>    
    </body>
</html>
