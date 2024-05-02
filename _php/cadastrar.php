<?php
include("conexao.php");
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string(password_hash($_POST['senha'], PASSWORD_DEFAULT));
        $mysqli-> query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");  
        echo("Cadastro efetuado com sucesso");
        header("Location: login.php");
}
}
?>