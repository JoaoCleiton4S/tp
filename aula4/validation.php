<?php
$nome= filter_input(INPUT_POST , 'nome', FILTER_SANITIZE_STRING);
$telefone= filter_input(INPUT_POST , 'telefone',FILTER_VALIDATE_INT);
$msg= filter_input(INPUT_POST , 'telefone',FILTER_SANITIZE_STRING);

$to = 'improvavelx@gmail.com';
$subject = "Novo contato pelo site";
$menssage = "nome: $nome
            telefone: $telefone
            mensagem: $msg";
$headers = 'From: improvavelx@gmail.com' . "\r\n" .
            'Reply-To: improvavelx@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$enviarEmail = mail($to, $subject, $menssage, $headers);

if($enviarEmail){
    echo "enviado com sucesso";
} else{
    echo "Erro não foi possivel entrar";
}
