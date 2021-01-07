<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>Exercício 1</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>EXERCÍCIOS</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/teste.php" ?> target="_blank" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include("{$_GET['dir']}/teste.php")
            ?>
        </div>
    </main>
    <footer class="rodape">Mauricio © <?= date('Y'); ?></footer>
</body>
</html>