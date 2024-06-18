<?php
include("conexao.php");
if(isset($_POST['endereco']) || isset($_POST['ref'])){
    if(strlen($_POST['endereco']) == 0) {
        echo "Preencha o endereço";
    } else if(strlen($_POST['ref']) == 0) {
        echo "Preencha a referência";
    } else {
        $endereco = $mysqli->real_escape_string($_POST['endereco']);
        $ref = $mysqli->real_escape_string($_POST['ref']);
        $foto1 = $_FILES['foto1'];
        $foto2 = $_FILES['foto2'];
        $foto3 = $_FILES['foto3'];
        $foto4 = $_FILES['foto4'];
        $foto5 = $_FILES['foto5'];
        $foto6 = $_FILES['foto6'];
        $foto7 = $_FILES['foto7'];
        $foto8 = $_FILES['foto8'];
        $foto9 = $_FILES['foto9'];
        $foto10 = $_FILES['foto10'];
        $foto11 = $_FILES['foto11'];
        $foto12 = $_FILES['foto12'];
        $foto13 = $_FILES['foto13'];
        $foto14 = $_FILES['foto14'];
        $foto15 = $_FILES['foto15'];
        $foto16 = $_FILES['foto16'];
        $foto17 = $_FILES['foto17'];
        $foto18 = $_FILES['foto18'];
        $foto19 = $_FILES['foto19'];
        $foto20 = $_FILES['foto20'];

        $pasta = "_imoveis/";

        

        $sql_code = "SELECT * FROM imoveis WHERE endereco = '$endereco'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

        $mysqli-> query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");  
        echo("Cadastro efetuado com sucesso");
        header("Location: login.php");
    } else {
        echo "Falha ao cadastrar! E-mail já cadastrado";
    }
}
}
?>