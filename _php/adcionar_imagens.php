<?php
include("conexao.php");
if( isset($_POST['ref'])){
    if(strlen($_POST['ref']) == 0) {
        echo "Preencha a referência";
    } else {
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
        

        $pasta = "_imoveis/";

        $foto1Nome = $foto1['name'];
        $novonome1 = uniqid();

        $extensao1 = strtolower(PATHINFO($foto1Nome, PATHINFO_EXTENSION));
        $path1 = $pasta . $novonome1 . "." . $extensao1;

        $enviar1 = move_uploaded_file($foto1['tmp_name'], $path1);

        $foto2Nome = $foto2['name'];
        $novonome2 = uniqid();

        $extensao2 = strtolower(PATHINFO($foto2Nome, PATHINFO_EXTENSION));
        $path2 = $pasta . $novonome2 . "." . $extensao2;

        $enviar2 = move_uploaded_file($foto2['tmp_name'], $path2);

        $foto3Nome = $foto3['name'];
        $novonome3 = uniqid();

        $extensao3 = strtolower(PATHINFO($foto3Nome, PATHINFO_EXTENSION));
        $path3 = $pasta . $novonome3 . "." . $extensao3;

        $enviar3 = move_uploaded_file($foto3['tmp_name'], $path3);

        $foto4Nome = $foto4['name'];
        $novonome4 = uniqid();

        $extensao4 = strtolower(PATHINFO($foto4Nome, PATHINFO_EXTENSION));
        $path4 = $pasta . $novonome4 . "." . $extensao4;

        $enviar4 = move_uploaded_file($foto4['tmp_name'], $path4);

        $foto5Nome = $foto5['name'];
        $novonome5 = uniqid();

        $extensao5 = strtolower(PATHINFO($foto5Nome, PATHINFO_EXTENSION));
        $path5 = $pasta . $novonome5 . "." . $extensao5;

        $enviar5 = move_uploaded_file($foto5['tmp_name'], $path5);

        $foto6Nome = $foto6['name'];
        $novonome6 = uniqid();

        $extensao6 = strtolower(PATHINFO($foto6Nome, PATHINFO_EXTENSION));
        $path6 = $pasta . $novonome6 . "." . $extensao6;

        $enviar6 = move_uploaded_file($foto6['tmp_name'], $path6);

        $foto7Nome = $foto7['name'];
        $novonome7 = uniqid();

        $extensao7 = strtolower(PATHINFO($foto7Nome, PATHINFO_EXTENSION));
        $path7 = $pasta . $novonome7 . "." . $extensao7;

        $enviar7 = move_uploaded_file($foto7['tmp_name'], $path7);

        $foto8Nome = $foto8['name'];
        $novonome8 = uniqid();

        $extensao8 = strtolower(PATHINFO($foto8Nome, PATHINFO_EXTENSION));
        $path8 = $pasta . $novonome8 . "." . $extensao8;

        $enviar8 = move_uploaded_file($foto8['tmp_name'], $path8);

        $foto9Nome = $foto9['name'];
        $novonome9 = uniqid();

        $extensao9 = strtolower(PATHINFO($foto9Nome, PATHINFO_EXTENSION));
        $path9 = $pasta . $novonome9 . "." . $extensao9;

        $enviar9 = move_uploaded_file($foto9['tmp_name'], $path9);

        $foto10Nome = $foto10['name'];
        $novonome10 = uniqid();

        $extensao10 = strtolower(PATHINFO($foto10Nome, PATHINFO_EXTENSION));
        $path10 = $pasta . $novonome10 . "." . $extensao10;

        $enviar10 = move_uploaded_file($foto10['tmp_name'], $path10);

        $foto11Nome = $foto11['name'];
        $novonome11 = uniqid();

        $extensao11 = strtolower(PATHINFO($foto11Nome, PATHINFO_EXTENSION));
        $path11 = $pasta . $novonome11 . "." . $extensao11;

        $enviar11 = move_uploaded_file($foto11['tmp_name'], $path11);

        $foto12Nome = $foto12['name'];
        $novonome12 = uniqid();

        $extensao12 = strtolower(PATHINFO($foto12Nome, PATHINFO_EXTENSION));
        $path12 = $pasta . $novonome12 . "." . $extensao12;

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

        $sql_code = "SELECT * FROM imoveis WHERE referencia= '$ref'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) { $mysqli-> query("UPDATE imoveis SET foto1 = '$novonome1', nome_foto1 = '$path1', foto2 = '$novonome2', nome_foto2 = '$path2', foto3 = '$novonome3', nome_foto3 = '$path3', foto4 = '$novonome4', nome_foto4 = '$path4', foto5 = '$novonome5', nome_foto5 = '$path5', foto6 = '$novonome6', nome_foto6 = '$path6', foto7 = '$novonome7', nome_foto7 = '$path7', foto8 = '$novonome8', nome_foto8 = '$path8', foto9 = '$novonome9', nome_foto9 = '$path9', foto10 = '$novonome10', nome_foto10 = '$path10', foto11 = '$novonome11', nome_foto11 = '$path11', foto12 = '$novonome12', nome_foto12 = '$path12', foto13 = '$novonome13', nome_foto13 = '$path13', foto14 = '$novonome14', nome_foto14 = '$path14', foto15 = '$novonome15', nome_foto15 = '$path15' WHERE imoveis.referencia = '$ref';");
        echo("Cadastro efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao cadastrar! Referência Inexistente";
    }
}
}
?>