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

        $foto31Nome = $foto31['name'];
        $novonome31 = uniqid();

        $extensao31 = strtolower(PATHINFO($foto31Nome, PATHINFO_EXTENSION));
        $path31 = $pasta . $novonome31 . "." . $extensao31;

        $enviar31 = move_uploaded_file($foto31['tmp_name'], $path31);

        $foto32Nome = $foto32['name'];
        $novonome32 = uniqid();

        $extensao32 = strtolower(PATHINFO($foto32Nome, PATHINFO_EXTENSION));
        $path32 = $pasta . $novonome32 . "." . $extensao32;

        $enviar32 = move_uploaded_file($foto32['tmp_name'], $path32);

        $foto33Nome = $foto3['name'];
        $novonome3 = uniqid();

        $extensao33 = strtolower(PATHINFO($foto33Nome, PATHINFO_EXTENSION));
        $path33 = $pasta . $novonome33 . "." . $extensao33;

        $enviar3 = move_uploaded_file($foto3['tmp_name'], $path3);

        $foto34Nome = $foto34['name'];
        $novonome34 = uniqid();

        $extensa3o4 = strtolower(PATHINFO($foto34Nome, PATHINFO_EXTENSION));
        $path34 = $pasta . $novonome34 . "." . $extensao34;

        $enviar34 = move_uploaded_file($foto34['tmp_name'], $path34);

        $foto35Nome = $foto35['name'];
        $novonome35 = uniqid();

        $extensao35 = strtolower(PATHINFO($foto35Nome, PATHINFO_EXTENSION));
        $path35 = $pasta . $novonome35 . "." . $extensao35;

        $enviar35 = move_uploaded_file($foto35['tmp_name'], $path35);

        $foto36Nome = $foto36['name'];
        $novonome36 = uniqid();

        $extensao36 = strtolower(PATHINFO($foto36Nome, PATHINFO_EXTENSION));
        $path36 = $pasta . $novonome36 . "." . $extensao36;

        $enviar36 = move_uploaded_file($foto36['tmp_name'], $path36);

        $foto37Nome = $foto37['name'];
        $novonome37 = uniqid();

        $extensao37 = strtolower(PATHINFO($foto37Nome, PATHINFO_EXTENSION));
        $path37 = $pasta . $novonome37 . "." . $extensao37;

        $enviar37 = move_uploaded_file($foto37['tmp_name'], $path37);

        $foto38Nome = $foto38['name'];
        $novonome38 = uniqid();

        $extensao38 = strtolower(PATHINFO($foto38Nome, PATHINFO_EXTENSION));
        $path38 = $pasta . $novonome38 . "." . $extensao38;

        $enviar38 = move_uploaded_file($foto38['tmp_name'], $path38);

        $foto39Nome = $foto39['name'];
        $novonome39 = uniqid();

        $extensao39 = strtolower(PATHINFO($foto39Nome, PATHINFO_EXTENSION));
        $path39 = $pasta . $novonome39 . "." . $extensao39;

        $enviar39 = move_uploaded_file($foto39['tmp_name'], $path39);

        $foto40Nome = $foto40['name'];
        $novonome10 = uniqid();

        $extensao40 = strtolower(PATHINFO($foto40Nome, PATHINFO_EXTENSION));
        $path40 = $pasta . $novonome40 . "." . $extensao40;

        $enviar40 = move_uploaded_file($foto40['tmp_name'], $path40);

        $foto41Nome = $foto41['name'];
        $novonome41 = uniqid();

        $extensao41 = strtolower(PATHINFO($foto41Nome, PATHINFO_EXTENSION));
        $path41 = $pasta . $novonome41 . "." . $extensao41;

        $enviar41 = move_uploaded_file($foto41['tmp_name'], $path41);

        $foto42Nome = $foto42['name'];
        $novonome42 = uniqid();

        $extensao42 = strtolower(PATHINFO($foto42Nome, PATHINFO_EXTENSION));
        $path42 = $pasta . $novonome42 . "." . $extensao42;

        $enviar42 = move_uploaded_file($foto42['tmp_name'], $path42);

        $foto43Nome = $foto43['name'];
        $novonome43 = uniqid();

        $extensao43 = strtolower(PATHINFO($foto43Nome, PATHINFO_EXTENSION));
        $path43 = $pasta . $novonome43 . "." . $extensao43;

        $enviar43 = move_uploaded_file($foto43['tmp_name'], $path43);

        $foto44Nome = $foto44['name'];
        $novonome44 = uniqid();

        $extensao44 = strtolower(PATHINFO($foto44Nome, PATHINFO_EXTENSION));
        $path44 = $pasta . $novonome44 . "." . $extensao44;

        $enviar44 = move_uploaded_file($foto44['tmp_name'], $path44);

        $foto45Nome = $foto45['name'];
        $novonome45 = uniqid();

        $extensao45 = strtolower(PATHINFO($foto45Nome, PATHINFO_EXTENSION));
        $path45 = $pasta . $novonome45 . "." . $extensao45;

        $enviar45 = move_uploaded_file($foto45['tmp_name'], $path45);

        $foto46Nome = $foto46['name'];
        $novonome46 = uniqid();

        $extensao46 = strtolower(PATHINFO($foto46Nome, PATHINFO_EXTENSION));
        $path46 = $pasta . $novonome46 . "." . $extensao46;

        $enviar46 = move_uploaded_file($foto46['tmp_name'], $path46);

        $foto47Nome = $foto47['name'];
        $novonome47 = uniqid();

        $extensao47 = strtolower(PATHINFO($foto47Nome, PATHINFO_EXTENSION));
        $path47 = $pasta . $novonome47 . "." . $extensao47;

        $enviar47 = move_uploaded_file($foto47['tmp_name'], $path47);

        $foto48Nome = $foto48['name'];
        $novonome48 = uniqid();

        $extensao48 = strtolower(PATHINFO($foto48Nome, PATHINFO_EXTENSION));
        $path48 = $pasta . $novonome48 . "." . $extensao48;

        $enviar48 = move_uploaded_file($foto48['tmp_name'], $path48);

        $foto49Nome = $foto49['name'];
        $novonome49 = uniqid();

        $extensao49 = strtolower(PATHINFO($foto49Nome, PATHINFO_EXTENSION));
        $path49 = $pasta . $novonome49 . "." . $extensao49;

        $enviar49 = move_uploaded_file($foto49['tmp_name'], $path49);

        $foto50Nome = $foto50['name'];
        $novonome50 = uniqid();

        $extensao50 = strtolower(PATHINFO($foto50Nome, PATHINFO_EXTENSION));
        $path50 = $pasta . $novonome50 . "." . $extensao50;

        $enviar50 = move_uploaded_file($foto50['tmp_name'], $path50);



        $sql_code = "SELECT * FROM imoveis WHERE endereco = '$endereco'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

        $mysqli-> query("INSERT INTO imoveis (referencia, endereco, area_terreno, area_construida, numero_quartos, numero_suites, numero_banheiros, bairro, preco, oportunidade, venda_loc, piscina, foto1, nome_foto1, foto2, nome_foto2, foto3, nome_foto3, foto4, nome_foto4, foto5, nome_foto5) VALUES ('$ref', '$endereco', '$areaTer', '$areaCon', '$quartos', '$suites', '$banheiros', '$bairo', '$preco', '$oportunidade', '$venda_ou_loc', '$piscina', '$novonome1', '$path1', '$novonome2', '$path2', '$novonome3', '$path3', '$novonome4', '$path4', '$novonome5', '$path5')");
        echo("Cadastro efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao cadastrar! Endereço já cadastrado";
    }
}
}
?>