<?php
include("conexao.php");
if(isset($_POST['endereco']) || isset($_POST['ref'])){
    if(strlen($_POST['endereco']) == 0) {
        echo "Preencha o endereço";
    } else if(strlen($_POST['ref_atual']) == 0) {
        echo "Preencha a referência";
    } else {
        $endereco = $mysqli->real_escape_string($_POST['endereco']);
        $refAtual = $mysqli->real_escape_string($_POST['ref_atual']);
        $refNova = $mysqli->real_escape_string($_POST['ref_nova']);
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

        $sql_code = "SELECT * FROM imoveis WHERE referencia = '$refAtual'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

        $mysqli-> query("UPDATE imoveis SET referencia = '$refNova', endereco = '$endereco', area_terreno = '$areaTer', area_construida = '$areaCon', numero_quartos = '$quartos', numero_suites = '$suites', numero_banheiros = '$banheiros', bairro = '$bairo', preco = '$preco', tipo = '$tipo', descricao = '$descricao', venda_loc = '$venda_ou_loc', piscina = '$piscina' WHERE imoveis.referencia = '$refAtual';");
        echo("Atualização efetuado com sucesso");
        header("Location: painel_admin.php");
    } else {
        echo "Falha ao atualizar! Referência atual não existe";
    }
}
}
?>