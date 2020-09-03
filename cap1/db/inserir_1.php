<div class="titulo">
    Inserir registro #1
</div>
<?php

require_once "conexao.php";

$nome = "Andre";
$nascimento = "2007-"."-04-"."-021";
$site = "https://". "andre" . ".sites.com.br";
$sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (
            '{$nome}',
            '{$nascimento}',
            '{$nome}@email.coom',
            '{$site}',
            null,
            2001.87     
        )
";

$connect = newConnection();
$result = $connect->query($sql);
if($result) {
    echo "O {$nome} foi cadastrado com sucesso";
}else {
    echo "Erro: ". $connect->error;
}
$connect->close();