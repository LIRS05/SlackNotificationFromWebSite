<?php 
$p_mess= $_POST['messaggio'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
//URL = CANALE SLACK 
$URL = $_POST['url'];
//Codice cliente = PERSONALIZZAZIONE 
$codcliente = $_POST['codcliente'];
$file = "NOME:".$nome."- Cognome:".$cognome."CodiceCliente".$codcliente."    ##########RICHIESTA#############".$p_mess;
$messaggio = '{"text":"'.$file.'" }';
$email_support = "supporto@xxxx.dataknowl.net";    
$subject = "supporto".$nome."-".$cognome;    
//invio mail al sistema di ticketing
mail($email_support,$subject,$p_mess);
//invio mail all'utente come conferma  
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
}
  else{
    echo "messaggio non inviato : contatta i nostri ufficio al n° 0984 18 30 339";
}
// chiudo
curl_close($ch);
 ?>
 