<?php

    if (isset($_POST['email'] && !empty($_POST['email'])) {
    }

    $nome  = addslashes($_POST['nome'])
    $email = addslashes($_POST['email'])
    $mensagem  = addslashes($_POST['mensagem'])

    $to = "cristianoliveira01.co@gmail.com"; 
    $subjet = "Contato portifole";
    $body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem:  ".mensagem; 
        $header = "From:cristianoliveira01.co@gmail.com"."\r\n".
        "Reply-To:"$email."\e\n".
        "X=Mailer:PHP/".phpversion(); 


        if (mail($to,$subjet,$body, $header)){


            echo("Email enviado com sucesso!");

             }else {
                echo("Erro ao enviar o email!");
             }
        }




?>