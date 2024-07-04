<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['emailAtual']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senhaAtual']) == 0) {
        echo "Preencha sua senha";
    } else {

        $emailAtual = $mysqli->real_escape_string($_POST['emailAtual']);
        $senhaAtual = $mysqli->real_escape_string($_POST['senhaAtual']);
        $emailNovo = $mysqli->real_escape_string($_POST['emailNovo']);
        $senhaNova = $mysqli->real_escape_string($_POST['senhaNova']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$emailAtual'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        if(password_verify($senha,$usuario['senha']) == true){
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            

            $mysqli-> query("UPDATE FROM usuarios  WHERE usuarios.email = '$emailAtual'");
            header("Location: logout.php");
        } else {
            echo "Falha ao Atualizar! E-mail ou senha incorretos";
            header("Location: painel.php");
        }

    } else {
        echo "Falha ao Atualizar! E-mail ou senha incorretos";
        header("Location: painel.php");
    }
}
}
?>