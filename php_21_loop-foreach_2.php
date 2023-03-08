<html>

<head>
    <meta charset="UTF-8">
    <title>loop Foreach</title>
</head>

<body>
    <?php
   
    $funcionarios = array(
        array('nome' =>'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'),
        array('nome' =>'Mária', 'salario' => 3000, 'data_nascimento' => '06/03/1970'),
        array('nome' =>'Julia', 'salario' => 2200, 'data_nascimento' => '06/03/1970'));
        

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    
    foreach($funcionarios as $idx => $funcionario){
    
        foreach($funcionario as $idx2 => $valor){
            echo "$idx2 - $valor <br/>";

        }
        echo "<hr/>";
    }
    
    ?>


</body>

</html>