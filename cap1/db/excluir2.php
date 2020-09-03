<div class="titulo">
    excluir #2
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
require_once "conexao.php";

$connect = newConnection();
if($_GET['excluir']){
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $connect->prepare($excluirSQL);//isso impede um sql injector
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();

}

$sql = "SELECT * FROM cadastro";

$result = $connect->query($sql); //execulta uma consulta ou um comando e traz o resultada como resposta

$registros = [];
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        array_push($registros, $row);

    }
}

$connect->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
    <th>ID</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>E-mail</th>
    <th>Ações</th>
    </thead>
    <tbody>
    <?php foreach ($registros as $registro): ?>
        <tr>
            <td><?=$registro['id']?></td>
            <td><?=$registro['nome']?></td>
            <td><?=date("d/m/Y", strtotime($registro['nascimento']))?></td>
            <td><?=$registro['email']?></td>
            <td><a href="?excluir=<?=$registro["id"]?>" class="btn btn-danger">
                    Excluir
                </a></td>
        </tr>

    <?php endforeach;?>
    </tbody>
</table>


<style>
    .titulo {
        text-align: center;
        font-size: 2.5rem;
        background-color: #ab52fd;
        color: cornsilk ;
    }
    table > * {
        font-size: 1.5rem;

    }
</style>
