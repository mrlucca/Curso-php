<div class="titulo">
    Excluir registo
</div>
<?php

require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$connect = newConnection();
$result = $connect->query($sql);

if($result) {
    echo "Sucesso na criação";
}else {
    echo "Erro: ". $connect->error;
}
$connect->close();
