<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimesional</title>
</head>
<body>
    <?php
       
        //$listas_coisas = array();

        $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango'];
        $lista_coisas['pessoas'] = [1 =>'João', 2 => 'José', 3 => 'Maria'];


        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';

        echo '<hr />';
        echo $lista_coisas['frutas'][3];
        echo '<br />';
        echo $lista_coisas['pessoas'][2];

     ?>
</body>
</html>