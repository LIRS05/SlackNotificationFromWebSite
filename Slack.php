<!doctype html>
<html lang="ita">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <title>Intelligence Support System</title>
    
    <style>
        html, body{
            margin: 0px; height: 100%; width: 100%; display: block;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="login-bg" style="background-image: linear-gradient(120deg,#ededed 1%,#fff 63%);">
      
     <body class="bg-light" cz-shortcut-listen="true">
    <div class="container">
  <div class="py-5 text-center">
      <i class="far fa-life-ring" style= " font-size: 72px; width: 72px; color: #a10000;"></i>
    <h2>Assistenza Clienti</h2>
    
  </div>





<div class="container">
<div class="row">
    <div class="col-md-2"></div>
    
    <!---------FORM INVIO ------------>
     <div class="col-md-8">


<?php 

//LAVORO : https://hooks.slack.com/services/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
// SUPPORT TECNICO :   https://hooks.slack.com/services/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

$p_mess= $_POST['messaggio'];

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$URL = $_POST['url'];
$codcliente = $_POST['codcliente'];

$file = "NOME:".$nome."- Cognome:".$cognome."CodiceCliente".$codcliente."    ##########RICHIESTA#############".$p_mess;



$messaggio = '{"text":"'.$file.'" }';
 
$email_support = "supporto@lirs.dataknowl.net";    
$subject = "supporto".$nome."-".$cognome;    

//mail($email_support,$subject,$p_mess);
  
mail($email,$subject,$p_mess);    
    
// inizializzo curl
$ch = curl_init();

// imposto la URl del form remoto
curl_setopt($ch, CURLOPT_URL, $URL);

// preparo l'invio dei dati tramite il metodo POST
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $messaggio);

// eseguo la chiamata
if (curl_exec($ch)){
   
    
    
    echo '<center><i class="fas fa-thumbs-up" style="font-size: 90px; margin-bottom:30px; color: green;"></i><br> ';
     echo '<p style="margin-bottom:30px;" class="alert alert-success">messaggio inviato con successo </p><br>';
     
     echo '<a href="./" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Torna indietro</a>  <a href="https://lirsgroup.it" class="btn btn-success"><i class="fas fa-home"></i> Vai al portale</a></center>';
    
    
    
    
    
}else{
    echo "messaggio non inviato : contatta i nostri ufficio al n° 0984 18 30 339";
}

// chiudo
curl_close($ch);
 ?>
 
 
 
  </div>
    <!-------------FORM INVIO ---------->
     <div class="col-md-2"></div>
</div>
</div>
   

     



  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2015-2019 LIRS - Progettato e Sviluppato con <i class="fas fa-heart" style="color: red;"></i> per i nostri clienti.</p>
    <ul class="list-inline">
      

    </ul>
  </footer>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    
    <script>

  </body>
</html>
     
 