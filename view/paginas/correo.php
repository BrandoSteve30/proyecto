<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mensaje'])){ 
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mensaje=$_POST['mensaje'];
        $header.= "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$email,$name,$mensaje);
        if ($mail){
            echo"<h4>Mensaje enviado exitosamente</h4>";
        }

    }
}


?>
