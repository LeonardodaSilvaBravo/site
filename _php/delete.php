<?php
include("conexao.php");
if( isset($_POST['ref'])){
    if(strlen($_POST['ref']) == 0) {
        echo "Preencha a referência";
    } else {
        $ref = $mysqli->real_escape_string($_POST['ref']);
        $sql_code = "SELECT * FROM imoveis WHERE referencia= '$ref'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) { $mysqli-> query("DELETE FROM imoveis WHERE imoveis.referencia = '$ref'");
        echo("Exclusão efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao excluir! Referência Inexistente";
    }
}
}
?>