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

        $sql_code = "SELECT * FROM administradores WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

        $mysqli-> query("INSERT INTO administradores (nome, email, senha) VALUES ('$nome', '$email', '$senha')");  
        echo("Cadastro efetuado com sucesso");
        header("Location: admin.php");
    } else {
        echo "Falha ao cadastrar! E-mail já cadastrado";
    }
}
}
?>