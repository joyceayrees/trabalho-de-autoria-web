<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];
        $bio = $_POST['bio'];
        $aceite = isset($_POST['aceite']) ? 'Sim' : 'Não';
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUS - Dados Cadastrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">SUS</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Página Inicial</a></li>
                    <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="data-container">
            <h2>Informações Recebidas</h2>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
            <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($data_nascimento); ?></p>
            <p><strong>Gênero:</strong> <?php echo htmlspecialchars($genero); ?></p>
            <p><strong>Biografia:</strong> <?php echo nl2br(htmlspecialchars($bio)); ?></p>
            <p><strong>Aceito os Termos:</strong> <?php echo $aceite; ?></p>
            <p><strong>CEP:</strong> <?php echo htmlspecialchars($cep); ?></p>
            <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>
            <p><strong>Cidade:</strong> <?php echo htmlspecialchars($cidade); ?></p>
            <p><strong>Estado:</strong> <?php echo htmlspecialchars($estado); ?></p>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>IFRN campus Santa Cruz | Trabalho de Autoria Web | Prof. Marcelo Figueiredo Barbosa Júnior</p>
            <p>Desenvolvedores: Joyce Karenyne Ayres da Costa, Mikael Pereira do Nascimento, Emmily Kauani Lima de Oliveira</p>
        </div>
    </footer>
</body>
</html>