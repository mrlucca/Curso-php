<div class="titulo">Integração CSS</div>

<h1 center>
<?php 
echo "olá";
echo "<small azul>";
echo " MUNDO";
echo "</small>";

?>
</h1>

<?= "<div azul> OUTRA FORMA DE INTEGRAR O PHP NO HTML</div>"?>

<br>

<div center><button dobro><?= "Click aqui"?></button></div>
<?php 
    $final = 10;    

?>

<style>
    button{
        padding: 5px <?= 2*10?>px;
        background-color: #425021;
        color: #EEE;
        font-weight: bold;
        border-radius: <?= $final ?>px;

    }

    [center]{
        display: flex;
        justify-content: center;
    }

    <?="[azul]"?> {
        background-color: cornflowerblue;
        color: white;
        padding: 2px;
        margin: 2px;
    }

    [dobro]{
      font-size: <?= 20 - 16?>rem;
    }
</style>