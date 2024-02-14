<?php
$nome = filter_input(INPUT_POST , "nome",FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST , "telefone", FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST , "msg", FILTER_SANITIZE_STRING);

#variáveis para enviar um email
$to = "cleber_fidelles@qi.edu.br";
$subject = "Novo contato pelo site";
$message = "Nome : $nome
            Telefone : $telefone
            Mensagem : $msg";
$headers = "from: cleber.fidelles@qi.edu.br";
#enviando para o email

try{
    mail($to ,$subject, $message ,$headers);
    echo "Obrigado, em breve entraremos em contato.";
}catch(Exception $error){
    echo "Erro ao enviar o seu contato, tente novamente mais tarde.";
}