<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <title>Curso de PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>EXERCÍCIOS</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo vermelho">
                    <h3>Módulo 1</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=exibir">Exibir na tela</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">Mauricio © <?= date('Y') ?></footer>
</body>
</html>