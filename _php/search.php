<?php
include("conexao.php");
if(isset($_POST['areaTer']) || isset($_POST['precoMenor'])){
    if(strlen($_POST['areaTer']) == 0) {
        echo "Preencha todos os campos";
    } else if(strlen($_POST['precoMenor']) == 0) {
        echo "Preencha o preco";
    } else {
        $areaTer = $mysqli->real_escape_string($_POST['areaTer']);
        $quartos = $mysqli->real_escape_string($_POST['quartos']);
        $suites = $mysqli->real_escape_string($_POST['suites']);
        $banheiros = $mysqli->real_escape_string($_POST['banheiros']);
        $preco_maior = $mysqli->real_escape_string($_POST['precoMaior']);
        $preco_menor = $mysqli->real_escape_string($_POST['precoMenor']);
        $piscina = $mysqli->real_escape_string($_POST['piscina']);
        $venda_ou_loc = $mysqli->real_escape_string($_POST['venda_ou_loc']);

    $sql_imoveis_count_query = " SELECT COUNT(*) AS c FROM imoveis";
    $sql_imoveis_count_query_exec = $mysqli->query($sql_imoveis_count_query) or die($mysqli->error);

    $sql_imoveis_count = $sql_imoveis_count_query_exec->fetch_assoc();
    $imoveis_count = $sql_imoveis_count['c'];

    $page = $_GET['page'] ? intval($_GET['page']):1;
    $limit = 5;
    $offset = ($page - 1) * $limit;

    $page_number = ceil($imoveis_count/$limit);

    $sql_imoveis_query = "SELECT * FROM imoveis WHERE imoveis.preco >= '$preco_menor' AND imoveis.piscina = '$piscina' AND imoveis.numero_quartos >= '$quartos' AND imoveis.preco <= '$preco_maior' AND imoveis.numero_suites >= '$suites' AND imoveis.numero_banheiros >= '$banheiros' AND imoveis.venda_loc = '$venda_ou_loc' AND imoveis.area_terreno >= '$areaTer' ";
    $sql_imoveis_query_exec = $mysqli->query($sql_imoveis_query) or die($mysqli->error);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css"/>
    <link rel="shortcut icon" href="../_imagens/icone.png" type="image/x-icon">
    <script src="../_javascript/functions.js"></script>
    <title>D'Oliveira Imóveis</title>
</head>
<body>
    <div id="interface">
        <header id = "cabecalho">
            <div id="logotipo"><img src="../_imagens/logotipo-doliveira (3).png" alt="Logo Imobiliaria D'Oliveira" id="logo"></div>
            <br>
                <nav id="menu">
                    <h1>Menu</h1>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="all.php?page=1">Ver Todos</a></li>
                        <li><a href="painel.php">Voltar</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <table border="1">
                <theard>
                    <td>Referência</td>
                    <td>Foto em Destaque</td>
                    <td>Descrição</td>
                    <td>Preço</td>
                    <td>Tem Piscina</td>
                    <td>Venda ou Locação</td>
                    <td>Número de Quartos</td>
                    <td>Número de Banheiros</td>
                    <td>Número de Suítes</td>
                </thead>
                <?php
                    while($sql_imoveis = mysqli_fetch_assoc($sql_imoveis_query_exec)){
                    
                ?>
                
                <tbody>
                    <td><p><?php echo $sql_imoveis ['referencia']; ?></p></td>
                    <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto1']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    <td><p><?php echo $sql_imoveis ['descricao']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['preco']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['piscina']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['venda_loc']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['numero_quartos']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['numero_banheiros']; ?></p></td>
                    <td><p><?php echo $sql_imoveis ['numero_suites']; ?></p></td>
                </tbody>
                <?php } ?>
            </table>

            <br>

            <form action="more.php" method="POST">
                <h3>Para Mais Informações Digite A Referência da Primeira Coluna Aqui</h3>
                <p>
                    <label>Referência</label>
                    <input type="text" name="ref">
                </p>
                <p>
                    <button type="submit">Buscar</button>
                </p>
            </form>

            <br>

            <p>
                <?php echo "Página: {$page}"; ?> <br>
                <?php echo "Número de Páginas: {$page_number}"; ?>
            </p>

            <br>

            <p>
                <a href="?page=1"><<</a>
                <?php
                for($p = 1; $p <= $page_number; $p++){
                    if($p === $page){
                        echo "[{$p}]";
                    } else {
                        echo "<a href='?page={$p}'>[{$p}]</a> ";
                    }
                }
                ?>
                <a href="?page=<?php echo "$page_number"; ?>">>></a>
            </p>
        </main>

        <footer>

            <div id="social-links">
            <a href="https://www.facebook.com/doliveiraimoveisperuibe/" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="https://www.instagram.com/doliveiraimoveis/" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://www.youtube.com/@DOliveiraImoveisPeruibe" target="_blank">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
            <a href="https://www.tiktok.com/@doliveiraimoveis" target="_blank">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>

            </div>

            <p>Made by <a href="https://github.com/LeonardodaSilvaBravo" target="_blank" style="text-decoration: none; color: black;">Leonardo</a></p>
        </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
</body>
</html>