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
        $piscina = $mysqli->real_escape_string($_POST['piscina']);
        $venda_ou_loc = $mysqli->real_escape_string($_POST['venda_ou_loc']);
        $foto1 = $_FILES['foto1'];
        /* 
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
        $foto31 = $_FILES['foto31'];
        $foto32 = $_FILES['foto32'];
        $foto33 = $_FILES['foto33'];
        $foto34 = $_FILES['foto34'];
        $foto35 = $_FILES['foto35'];
        $foto36 = $_FILES['foto36'];
        $foto37 = $_FILES['foto37'];
        $foto38 = $_FILES['foto38'];
        $foto39 = $_FILES['foto39'];
        $foto40 = $_FILES['foto40'];
        $foto41 = $_FILES['foto41'];
        $foto42 = $_FILES['foto42'];
        $foto43 = $_FILES['foto43'];
        $foto44 = $_FILES['foto44'];
        $foto45 = $_FILES['foto45'];
        $foto46 = $_FILES['foto46'];
        $foto47 = $_FILES['foto47'];
        $foto48 = $_FILES['foto48'];
        $foto49 = $_FILES['foto49'];
        $foto50 = $_FILES['foto50'];
        */

        $pasta = "_imoveis/";

        $foto1Nome = $foto1['name'];
        $novonome1 = uniqid();

        $extensao1 = strtolower(PATHINFO($foto1Nome, PATHINFO_EXTENSION));
        $path1 = $pasta . $novonome1 . "." . $extensao1;

        $enviar1 = move_uploaded_file($foto1['tmp_name'], $path1);



        $sql_code = "SELECT * FROM imoveis WHERE endereco = '$endereco'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

        $mysqli-> query("INSERT INTO imoveis (referencia, endereco, area_terreno, area_construida, numero_quartos, numero_suites, numero_banheiros, bairro, preco, oportunidade, venda_loc, piscina, foto1, nome_foto1) VALUES ('$ref', '$endereco', '$areaTer', '$areaCon', '$quartos', '$suites', '$banheiros', '$bairo', '$preco', '$oportunidade', '$venda_ou_loc', '$piscina', '$novonome1', '$path1')");  
        echo("Cadastro efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao cadastrar! Endereço já cadastrado";
    }
}
}
?>