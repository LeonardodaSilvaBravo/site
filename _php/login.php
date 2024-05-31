<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $usuario = $sql_query->fetch_assoc();

        if(password_verify($senha,$usuario['senha']) == true){
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['ID'] = $usuario['ID'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
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
    <link rel="shortcut icon" href="./_imagens/icone.png" type="image/x-icon">
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
                        <li><a href="cadastro.php">Cadastrar</a></li>
                        <li><a href="contact.php">Contato</a></li>
                        <li><a href="../_html/search.html">Buscar Imóveis</a></li>
                        <li><a href="../_html/about_us.html">Quem Somos</a></li>
                    </ul>
                </nav>
        </header>

        <main>
            <form action="" method="POST">
                <p>
                    <label>E-mail</label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label>Senha</label>
                    <input type="password" name="senha">
                </p>
                <p>
                    <button type="submit">Entrar</button>
                </p>
            </form>
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
            <a href="https://doliveiraimobiliaria@gmail.com" target="_blank">
              <ion-icon name="mail-outline"></ion-icon>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>