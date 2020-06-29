<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
    	<h1>Curso de PHP</h1>
    	<h2>Índice de Exercícios</h2>

    </header>
    <main class="principal">
    	<div class="conteudo">
    		<nav class="modulos">
    			<div class="modulo verde">
    				<h3>Módulo 1</h3>
    					<ul>

    						<li><a href="exercicio.php?dir=basico&file=ola">Olá Php</a></li>
    						<li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
    						<li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
    						<li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
    							
    					
    					</ul>
    				
    			</div>

                <div class="modulo vermelho">
    				<h3>Módulo 1</h3>
    					<ul>

    						<li><a href="exercicio.php?dir=tipos&file=int">Inteiros</a></li>
    						<li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
    						<li><a href="exercicio.php?dir=tipos&file=aritimetricas">Aritimétricas</a></li>
    						<li><a href="exercicio.php?dir=tipos&file=strings">Strings</a></li>
    							
    					
    					</ul>
    				
    			</div>
    			
    </main>

    <footer class="rodape">
    	<p>COD3R & ALUNOS 	&copy; LUCCA VINICIOS <?= date('M Y'); ?></p>
    </footer>

</body>
</html>