<div class="titulo">Operações aritimétricas</div>

<style>
    .ex {
        padding: 20px;
        color: white;
        font-size: 28px;
        font-weight: 300;
        background-color: crimson;
        font-family: Arial;
    }
</style>
<?php

function form($texto) {
    echo "<div class ='ex'>".$texto."</div>";
    
} 


form('Adição => | + | ');

echo 1 + 1, '<br>';
var_dump(1 + 1);

form('Operação entre float e inteiro sempre o float ganha | 1 + 2.5');
var_dump(1 + 2.5);

form('Subtração => ( - ) | Divisão => ( / ) | multiplicação => ( * ) | módulo => ( % ) | potenciação => ( ** ) ');

echo '5 operção 6 <br>';
echo 5 - 6,     ' Subtração <br>';
echo 5 * 6,     ' multiplicação<br>';
echo 5 / 6,     ' Divisão<br>';
echo 5 % 6,     ' módulo <br>';
echo 5 ** 6,    ' potenciação<br>';
echo intdiv(6, 7), ' truncando um resultado fazendo ele ficar inteiro <br>';




