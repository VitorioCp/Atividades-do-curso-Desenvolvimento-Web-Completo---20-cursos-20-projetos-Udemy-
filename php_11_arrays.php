<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Pratica</title>
</head>
<body>
    <?php
       //sequenciais  (númericos)
       /*
        $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');

        echo ('<pre>'); 
            var_dump($lista_frutas);
        echo ('<pre>'); 
        echo ('<hr />');
        echo ('<pre>'); 
            print_r($lista_frutas);
        echo ('<pre>'); 
        */
        //associados    
        $lista_frutas = 
        [
            'a' => 'Banana',
            'b' => 'Maça',
            'c' => 'Morango',
            'd' => 'Uva'
        ];

        $lista_frutas['w'] = 'Abacaxi ';
        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre>';
        
        echo $lista_frutas ['b'];

     ?>
</body>
</html>