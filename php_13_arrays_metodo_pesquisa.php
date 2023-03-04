<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays métodos de pesquisa</title>
</head>
<body>
    <?php
       
       //in_array() -> true our false, para a existência do que está sendo pesquisado
       //array_search()

       $lista_frutas = ['Banana', 'Uva', 'Pera'];

       echo'<pre>';
       print_r($lista_frutas);
       echo'<pre>';

        // $existe = in_array('Pera', $lista_frutas);
        //true = 1
        //false = vazio

       /* $existe = array_search('Uva', $lista_frutas);

        if($existe != null){
            echo 'Sim, o valor pesquisado existe no array.';
        } else {
            echo 'Não, o valor pesquisado não existe no array.';
        }
        */

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Uva', $lista_coisas['frutas']);
        

        


       
     ?>
</body>
</html>