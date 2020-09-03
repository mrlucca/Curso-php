<div class="titulo">Criar Tabela</div>
<?php

require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";
$connect = newConnection();
$result = $connect->query($sql);
if($result) {
    echo "Sucesso na criação";
}else {
    echo "Erro: ". $connect->error;
}
$connect->close();
