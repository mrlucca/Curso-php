<div class="titulo">
    Conexão no banco de dados
</div>
<?php

function newConnection($bank = "curso_php")
{
    $server = "127.0.0.1";
    $user   = "root";
    $password  = "root";

    $connect = new mysqli($server, $user, $password, $bank);

    // Tratamento de erro da conexão indicada, não é indicado tratar erro dessa forma em um sistema real
    if($connect->connect_error){
        die('Erro: '. $connect->connect_error);
    }

    return $connect;
}