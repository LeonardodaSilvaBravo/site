<?php
include("conexao.php");
if(isset($_POST['ref'])){
    if(strlen($_POST['ref']) == 0) {
        echo "Preencha a referência";
    } else {
        $ref = $mysqli->real_escape_string($_POST['ref']);
        $sql_code = "SELECT * FROM imoveis WHERE referencia = '$ref'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

        $resultado = $mysqli->query($sql_code);     
    } else {
        echo "Falha ao buscar! Referência inexistente";
        header("Location: painel.php");
    }
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                        <li><a href="imoveis.php">Voltar</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <table border="1">
                <theard>
                    <td></td>
                    <td></td>
                    <td>Fotos</td>
                    <td></td>
                    <td></td>
                </thead>
                <?php
                    while($sql_imoveis = mysqli_fetch_assoc($resultado)){
                    
                ?>
                
                    <tbody>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto1']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto2']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto3']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto4']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto5']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto6']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    </tbody>

                    <tbody>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto7']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto8']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto9']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto10']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto11']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto12']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    </tbody>

                    <tbody>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto13']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto14']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto15']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto16']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto17']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto18']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    </tbody>

                    <tbody>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto19']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto20']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto21']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto22']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto23']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto24']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    </tbody>

                    <tbody>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto25']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto26']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto27']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto28']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto29']; ?>" alt="Primeira foto da casa" class="lista"></td>
                        <td><img height="200" width="200" src="<?php echo $sql_imoveis ['nome_foto30']; ?>" alt="Primeira foto da casa" class="lista"></td>
                    </tbody>
                <?php } ?>
            </table>
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

        <p>Feito com ♥ pelo <a href="https://github.com/LeonardodaSilvaBravo" target="_blank">Leonardo</a></p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
</body>
</html>