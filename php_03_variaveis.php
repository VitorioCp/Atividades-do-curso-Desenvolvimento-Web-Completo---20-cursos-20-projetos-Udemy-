<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //string
    $nome = 'Jorger Sant Ana';

    //int
    $idade = 29;

    //float
    $peso = 82.5;

    //boolean
    $fumante_sn = true; //(true = 1) ou (false = vazio)
    
    ?>


    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome:
        <?= $nome ?>
    </p>
    <p>Idade:
        <?= $idade ?>
    </p>
    <p>Peso:
        <?= $peso ?>
    </p>
    <p>Fumante:
        <?= $fumante_sn ?>
    </p>

</body>

</html>