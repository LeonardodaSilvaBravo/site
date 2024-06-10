<?php

if(!empty($_POST['enviar'])){
    $to = "suporte@doliveiraimobiliaria.com.br";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comentario = $_POST['comentario'];
    $assunto = "Mensagem do Site";

    $mailHeaders = "Nome : " . $nome . " \r \n Email: " . $email . "\r \n Telefone: " . $telefone . " \r \n Comentario: " . $comentario . "\r \n ";

    if(mail($to, $nome, $mailHeaders)){
        header("Location: email.php");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../_imagens/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="../_css/style.css"/>
    <title>D'Oliveira Imóveis</title>
</head>
<body>
    <div class="conteudo" id="modal-sucesso">

        <div class="modal">

        <img src="../_imagens/logotipo-doliveira (3).png" alt="logotipo da imobiliaria" class="logo">

        <h2>Obrigado pela mensagem</h2>

        <p>Nossa equipe já recebeu o seu <span>E-mail</span> e iremos tomar as devidas providências.</p>

        <p>Entraremos em <span>contato</span> em breve</p>

        <button class="fechar"><a href="../index.html">FECHAR</a></button>

        </div>

    </div>
    <script src="../_javascript/functions.js"></script>
</body>
</html>