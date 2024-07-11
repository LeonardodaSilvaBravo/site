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
        $areaTer = $mysqli->real_escape_string($_POST['areaTer']);
        $areaCon = $mysqli->real_escape_string($_POST['AC']);
        $quartos = $mysqli->real_escape_string($_POST['quartos']);
        $suites = $mysqli->real_escape_string($_POST['suites']);
        $banheiros = $mysqli->real_escape_string($_POST['banheiros']);
        $bairo = $mysqli->real_escape_string($_POST['bairo']);
        $preco = $mysqli->real_escape_string($_POST['preco']);
        $oportunidade = $mysqli->real_escape_string($_POST['oportunidade']);
        $descricao = $mysqli->real_escape_string($_POST['desc']);
        $piscina = $mysqli->real_escape_string($_POST['piscina']);
        $venda_ou_loc = $mysqli->real_escape_string($_POST['venda_ou_loc']);
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

        $sql_code = "SELECT * FROM imoveis WHERE endereco = '$endereco'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

        $mysqli-> query("INSERT INTO imoveis (referencia, endereco, area_terreno, area_construida, numero_quartos, numero_suites, numero_banheiros, bairro, preco, oportunidade, descricao, venda_loc, piscina, foto1, nome_foto1, foto2, nome_foto2, foto3, nome_foto3, foto4, nome_foto4, foto5, nome_foto5, foto6, nome_foto6, foto7, nome_foto7, foto8, nome_foto8, foto9, nome_foto9, foto10, nome_foto10) VALUES ('$ref', '$endereco', '$areaTer', '$areaCon', '$quartos', '$suites', '$banheiros', '$bairo', '$preco', '$oportunidade', '$descricao', '$venda_ou_loc', '$piscina', '$novonome1', '$path1', '$novonome2', '$path2', '$novonome3', '$path3', '$novonome4', '$path4', '$novonome5', '$path5', '$novonome6', '$path6', '$novonome7', '$path7', '$novonome8', '$path8', '$novonome9', '$path9', '$novonome10', '$path10')");
        echo("Cadastro efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao cadastrar! Endereço já cadastrado";
    }
}
}
?>