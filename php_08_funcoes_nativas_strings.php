<html>
    <head>
    <meta charset="utf-8"/>
    <title>Curso PHP</title>
    </head>

    <body>
        <?php
      
      $texto = 'Curso completo de PHP';

      //string to lower
      echo $texto . '<br/>' ;
      echo strtolower($texto);

      echo '<hr/ >';

      //string to upper
      echo $texto . '<br/>' ;
      echo strtoupper($texto);

      echo '<hr/ >';

      //string to upper
      echo $texto . '<br/>' ;
      echo strtoupper($texto);

      echo '<hr/ >';

      //string to ucfirst
      echo $texto . '<br/>' ;
      echo ucfirst($texto);

      echo '<hr/ >';

      //string lenght
      echo $texto . '<br/>' ;
      echo strlen($texto);

      echo '<hr/ >';

      //string srt_replace
      echo $texto . '<br/>' ;
      echo str_replace('PHP', 'JavaScript', $texto);

      echo '<hr/ >';

      //'Curso completo de PHP'
      //0,1,2,3,4,5 ... 20
      //String substr
      echo $texto . '<br/>' ;
      echo substr($texto, 1 ,4);



       
        ?>
        


    </body>
</html>