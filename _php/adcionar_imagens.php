<?php
include("conexao.php");
if( isset($_POST['ref'])){
    if(strlen($_POST['ref']) == 0) {
        echo "Preencha a referência";
    } else {
        $ref = $mysqli->real_escape_string($_POST['ref']);
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
        $foto21 = $_FILES['foto21'];
        $foto22 = $_FILES['foto22'];
        $foto23 = $_FILES['foto23'];
        $foto24 = $_FILES['foto24'];
        $foto25 = $_FILES['foto25'];
        $foto26 = $_FILES['foto26'];
        $foto27 = $_FILES['foto27'];
        $foto28 = $_FILES['foto28'];
        $foto29 = $_FILES['foto29'];
        $foto30 = $_FILES['foto30'];

        $pasta = "_imoveis/";

        $foto11Nome = $foto11['name'];
        $novonome11 = uniqid();

        $extensao11 = strtolower(PATHINFO($foto11Nome, PATHINFO_EXTENSION));
        $path11 = $pasta . $novonome11 . "." . $extensao11;

        $enviar11 = move_uploaded_file($foto11['tmp_name'], $path11);

        $foto12Nome = $foto12['name'];
        $novonome12 = uniqid();

        $extensao12 = strtolower(PATHINFO($foto12Nome, PATHINFO_EXTENSION));
        $path12 = $pasta . $novonome2 . "." . $extensao12;

        $enviar12 = move_uploaded_file($foto12['tmp_name'], $path12);

        $foto13Nome = $foto13['name'];
        $novonome13 = uniqid();

        $extensao13 = strtolower(PATHINFO($foto13Nome, PATHINFO_EXTENSION));
        $path13 = $pasta . $novonome13 . "." . $extensao13;

        $enviar13 = move_uploaded_file($foto13['tmp_name'], $path13);

        $foto14Nome = $foto14['name'];
        $novonome14 = uniqid();

        $extensao14 = strtolower(PATHINFO($foto14Nome, PATHINFO_EXTENSION));
        $path14 = $pasta . $novonome14 . "." . $extensao14;

        $enviar14 = move_uploaded_file($foto14['tmp_name'], $path14);

        $foto15Nome = $foto15['name'];
        $novonome15 = uniqid();

        $extensao15 = strtolower(PATHINFO($foto15Nome, PATHINFO_EXTENSION));
        $path15 = $pasta . $novonome15 . "." . $extensao15;

        $enviar15 = move_uploaded_file($foto15['tmp_name'], $path15);

        $foto16Nome = $foto16['name'];
        $novonome16 = uniqid();

        $extensao16 = strtolower(PATHINFO($foto16Nome, PATHINFO_EXTENSION));
        $path16 = $pasta . $novonome16 . "." . $extensao16;

        $enviar16 = move_uploaded_file($foto16['tmp_name'], $path16);

        $foto17Nome = $foto17['name'];
        $novonome17 = uniqid();

        $extensao17 = strtolower(PATHINFO($foto17Nome, PATHINFO_EXTENSION));
        $path17 = $pasta . $novonome17 . "." . $extensao17;

        $enviar17 = move_uploaded_file($foto17['tmp_name'], $path17);

        $foto18Nome = $foto18['name'];
        $novonome18 = uniqid();

        $extensao18 = strtolower(PATHINFO($foto18Nome, PATHINFO_EXTENSION));
        $path18 = $pasta . $novonome18 . "." . $extensao18;

        $enviar18 = move_uploaded_file($foto18['tmp_name'], $path18);

        $foto19Nome = $foto19['name'];
        $novonome19 = uniqid();

        $extensao19 = strtolower(PATHINFO($foto19Nome, PATHINFO_EXTENSION));
        $path19 = $pasta . $novonome19 . "." . $extensao19;

        $enviar19 = move_uploaded_file($foto19['tmp_name'], $path19);

        $foto20Nome = $foto20['name'];
        $novonome20 = uniqid();

        $extensao20 = strtolower(PATHINFO($foto20Nome, PATHINFO_EXTENSION));
        $path20 = $pasta . $novonome20 . "." . $extensao20;

        $enviar20 = move_uploaded_file($foto20['tmp_name'], $path20);

        $foto21Nome = $foto21['name'];
        $novonome1 = uniqid();

        $extensao21 = strtolower(PATHINFO($foto21Nome, PATHINFO_EXTENSION));
        $path21 = $pasta . $novonome21 . "." . $extensao21;

        $enviar21 = move_uploaded_file($foto1['tmp_name'], $path21);

        $foto22Nome = $foto22['name'];
        $novonome22 = uniqid();

        $extensao22 = strtolower(PATHINFO($foto22Nome, PATHINFO_EXTENSION));
        $path22 = $pasta . $novonome22 . "." . $extensao22;

        $enviar22 = move_uploaded_file($foto22['tmp_name'], $path22);

        $foto23Nome = $foto23['name'];
        $novonome23 = uniqid();

        $extensao23 = strtolower(PATHINFO($foto23Nome, PATHINFO_EXTENSION));
        $path23 = $pasta . $novonome23 . "." . $extensao23;

        $enviar23 = move_uploaded_file($foto23['tmp_name'], $path23);

        $foto24Nome = $foto24['name'];
        $novonome24 = uniqid();

        $extensao24 = strtolower(PATHINFO($foto24Nome, PATHINFO_EXTENSION));
        $path24 = $pasta . $novonome24 . "." . $extensao24;

        $enviar24 = move_uploaded_file($foto24['tmp_name'], $path24);

        $foto25Nome = $foto25['name'];
        $novonome25 = uniqid();

        $extensao25 = strtolower(PATHINFO($foto25Nome, PATHINFO_EXTENSION));
        $path25 = $pasta . $novonome25 . "." . $extensao25;

        $enviar25 = move_uploaded_file($foto25['tmp_name'], $path25);

        $foto26Nome = $foto26['name'];
        $novonome26 = uniqid();

        $extensao26 = strtolower(PATHINFO($foto26Nome, PATHINFO_EXTENSION));
        $path26 = $pasta . $novonome26 . "." . $extensao26;

        $enviar26 = move_uploaded_file($foto26['tmp_name'], $path26);

        $foto27Nome = $foto27['name'];
        $novonome27 = uniqid();

        $extensao27 = strtolower(PATHINFO($foto27Nome, PATHINFO_EXTENSION));
        $path27 = $pasta . $novonome27 . "." . $extensao27;

        $enviar27 = move_uploaded_file($foto27['tmp_name'], $path27);

        $foto28Nome = $foto28['name'];
        $novonome28 = uniqid();

        $extensao28 = strtolower(PATHINFO($foto28Nome, PATHINFO_EXTENSION));
        $path28 = $pasta . $novonome28 . "." . $extensao28;

        $enviar28 = move_uploaded_file($foto28['tmp_name'], $path28);

        $foto29Nome = $foto29['name'];
        $novonome29 = uniqid();

        $extensao29 = strtolower(PATHINFO($foto29Nome, PATHINFO_EXTENSION));
        $path29 = $pasta . $novonome29 . "." . $extensao29;

        $enviar29 = move_uploaded_file($foto29['tmp_name'], $path29);

        $foto30Nome = $foto30['name'];
        $novonome30 = uniqid();

        $extensao30 = strtolower(PATHINFO($foto30Nome, PATHINFO_EXTENSION));
        $path30 = $pasta . $novonome30 . "." . $extensao30;

        $enviar30 = move_uploaded_file($foto30['tmp_name'], $path30);

        $sql_code = "SELECT * FROM imoveis WHERE referencia= '$ref'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) { $mysqli-> query("UPDATE imoveis SET foto11 = '$novo_nome11', nome_foto11 = '$path11', foto12 = '$novo_nome12', nome_foto12 = '$path12', foto13 = '$novo_nome13', nome_foto13 = '$path13', foto14 = '$novo_nome14', nome_foto14 = '$path14', foto15 = '$novo_nome15', nome_foto15 = '$path15', foto16 = '$novo_nome16', nome_foto16 = '$path16', foto17 = '$novo_nome17', nome_foto17 = '$path17', foto18 = '$novo_nome18', nome_foto18 = '$path18', foto19 = '$novo_nome19', nome_foto19 = '$path19', foto20 = '$novo_nome20', nome_foto20 = '$path20', foto21 = '$novo_nome21', nome_foto21 = '$path21', foto22 = '$novo_nome22', nome_foto22 = '$path22', foto23 = '$novo_nome23', nome_foto23 = '$path23', foto24 = '$novo_nome24', nome_foto24 = '$path24', foto25 = '$novo_nome25', nome_foto25 = '$path25', foto26 = '$novo_nome26', nome_foto26 = '$path26', foto27 = '$novo_nome27', nome_foto27 = '$path27', foto28 = '$novo_nome28', nome_foto28 = '$path28', foto29 = '$novo_nome29', nome_foto29 = '$path29', foto30 = '$novo_nome30', nome_foto30 = '$path30' WHERE imoveis.referencia = '$ref';");
        echo("Cadastro efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao cadastrar! Referência Inexistente";
    }
}
}
?>