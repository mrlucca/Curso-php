<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/exercicios.css">
    <title>Execíco</title>
</head> 
<body class ="exercicio">
    <header class="cabecalho">
    	<h1>Curso de PHP</h1>
    	<h2>Visualização do exercício</h2>

    </header>
    <nav class="navegacao">
        <a href="#" class ="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
    	<div class="conteudo">
            <div class="interior">
                <?php
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
    	</div>
    
    
    </main>
    			

    <footer class="rodape">
    	<p>COD3R & ALUNOS 	&copy; LUCCA VINICIOS <?= date('M Y'); ?></p>
    </footer>

</body>
</html>