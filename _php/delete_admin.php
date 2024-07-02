<?php
include("conexao.php");
if(isset($_POST['email_atual'])){
    if(strlen($_POST['email_atual']) == 0) {
        echo "Preencha seu e-mail";
    } else {
        $emailAtual = $mysqli->real_escape_string($_POST['email_atual']);

        $sql_code = "SELECT * FROM administradores WHERE email = '$emailAtual'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

        $mysqli-> query("DELETE FROM administradores WHERE administradores.email = '$emailAtual'");  
        echo("Cadastro atualizado com sucesso");
        header("Location: admin.php");
    } else {
        echo "Falha ao atualizar! E-mail inexistente";
    }
}
}
?>