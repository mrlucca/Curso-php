
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php

require_once "conexao.php";

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$connect = newConnection();
$result = $connect->query($sql);

$registros = [];

if($result->num_rows > 0){
    //fetch_assoc é um array associativo de cada coluna que permitira pegar os dados

    while ($row = $result->fetch_assoc()){
        //$registros = $row;
        array_push($registros, $row);
    }

}elseif ($connect->error){
    echo "Erro: " . $connect->error;
}elseif ($connect->error){
    echo "Erro: ". $connect->error;
}

$connect->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?=$registro['id']?></td>
                <td><?=$registro['nome']?></td>
                <td><?=date("d/m/Y", strtotime($registro['nascimento']))?></td>
                <td><?=$registro['email']?></td>
            </tr>

        <?php endforeach;?>
    </tbody>
</table>


<style>
    table > * {
        font-size: 1.5rem;
    }
</style>