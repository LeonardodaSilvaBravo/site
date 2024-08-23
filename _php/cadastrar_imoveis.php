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
        $tipo = $mysqli->real_escape_string($_POST['tipo']);
        $descricao = $mysqli->real_escape_string($_POST['desc']);
        $piscina = $mysqli->real_escape_string($_POST['piscina']);
        $venda_ou_loc = $mysqli->real_escape_string($_POST['venda_ou_loc']);
        
        $sql_code = "SELECT * FROM imoveis WHERE endereco = '$endereco'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

        $mysqli-> query("INSERT INTO imoveis (referencia, endereco, area_terreno, area_construida, numero_quartos, numero_suites, numero_banheiros, bairro, preco, tipo, descricao, venda_loc, piscina) VALUES ('$ref', '$endereco', '$areaTer', '$areaCon', '$quartos', '$suites', '$banheiros', '$bairo', '$preco', '$tipo', '$descricao', '$venda_ou_loc', '$piscina')");
        echo("Cadastro efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao cadastrar! Endereço já cadastrado";
    }
}
}
?>