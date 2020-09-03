<div class="titulo">
    <h1>Criar Banco de dados</h1>
</div>
<?php

require_once "conexao.php";

$connect = newConnection(null);

$sql = "CREATE DATABASE IF NOT EXISTS curso_php"; //Criar um banco de dados com o nome curso.... Se não existir

$result = $connect->query($sql);

if($result) {
    echo "Sucesso na criação";
}else {
    echo "Erro: ". $connect->error;
}
$connect->close();

