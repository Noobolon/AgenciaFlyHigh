<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly High - Fale Conosco</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/fale.css">
    <link rel="icon" href="../media/logo/FlyHigh.ico">
</head>
<body>
    <header>
            <nav>
                <a href="../index.html"><img src="../media/logo/FlyHigh.png" alt="logo" id="logo">  </a>
                <div>
                    <ul>
                        <li><a href="../index.html">Início</a></li>
                        <li><a href="../pag/pacotes.html">Pacotes</a></li>
                        <li><a href="../pag/fale.html">Fale conosco</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="artigo">
        <section>
            <div class="maintexto">
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $nome = $_POST["nome"];
                        $email = $_POST["email"];
                        $tel = $_POST["telefone"];
                        $assunto = $_POST["assunto"];
                        $mensagem = $_POST["mensagem"];

                        echo nl2br("Nome: $nome \nE-mail: $email\nTelefone: $tel\nAssunto: $assunto\nMensagem: $mensagem");  
                    }
                ?>
            </div>
        </section>
    </main>
       
    <footer>
        <div>
            <h1>Contatos</h1>
            <img src="../media/logo/linkedin.webp" alt="LinkedIn" class="imagem-footer">
            <img src="../media/logo/ig.png" alt="Instagram" class="imagem-footer">
            <img src="../media/logo/whats.png" alt="Whatsapp" class="imagem-footer">
        </div>
        <div id="lol">
            <h1>Fly High</h1>
            <img src="../media/logo/FlyHigh.png" alt="Logo" class="imagem-footer">
        </div>
    </footer>
</body>
</html>

