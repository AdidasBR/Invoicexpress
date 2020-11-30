<?php


	$para = "design-challenge@rupeal.com";
	$assunto = "Nova subscrição Newsletter";


    $nome = utf8_decode ($_POST['nome']);
    $email = utf8_decode ($_POST['email']);
    $profissao = utf8_decode ($_POST['profissao']);
    
    // Monta o corpo da mensagem com os campos
    $corpo .= "Informacoes utilizador " . "\r\n" . "\r\n";
    $corpo .= "Nome: $nome "  . "\r\n";
    $corpo .= "Email: $email " . "\r\n";
    $corpo .= "Profissao: $profissao " . "\r\n";


      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: $nome <$email>';


    

    mail($para, '=?utf-8?B?'.base64_encode($assunto).'?=', $corpo);

    header('Location: ../thanks.html');

?>
