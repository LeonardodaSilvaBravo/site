<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        if(password_verify($senha,$usuario['senha']) == true){
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            

            $mysqli-> query("DELETE FROM usuarios WHERE usuarios.email = '$email'");
            header("Location: logout.php");
        } else {
            echo "Falha ao deletar! E-mail ou senha incorretos";
            header("Location: painel.php");
        }

    } else {
        echo "Falha ao deletar! E-mail ou senha incorretos";
        header("Location: painel.php");
    }
}
}
?>