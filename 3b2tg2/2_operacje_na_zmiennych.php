<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //porownanie
    $x=5;
    $y=5;

    if ($x==$y) {
      echo "Zmienne sa identyczne<br>";

    }
    else {
      echo "Zmienne nie są identyczne<br>";
    }
    ##########
    /*
      preinkrementacja ++$x
      predekramentacja --$x
      postinkrementacja $x++
      postdekramentacja $x--

    */
    $x=5;
    $x=$x++;
    echo $x; //5
    $x=++$x;
    echo $x; //6
    $y=$x++;
    echo $x; //7
    echo $y; //6
    $y=++$x * 2 -1;

    echo $x; //8
    echo $y; //15

    echo "<br>";
    $x=2;
    echo $x++; //2
    echo ++$x; //4
    echo $x; //4
    $y=$x++;
    echo $y; // 4
    $y=++$x;
    echo $y; //6
    echo ++$y; //7



    //operatory rzutowania
    //bool, int, float, string, array, object, unset
    $text="123abc";
    $text1=0;
    $text2=20;

    echo '<br>Typ danych $text:', gettype($text), "<br>";
    $x=(int)$text;
    echo $x;
    echo '<br>Typ danych $x:', gettype($x),'<br>';

    $x=(bool)$text1;
    echo $x;
    echo '<br>Typ danych $x:', gettype($x),'<br>';

    $x=(unset)$text2;
    echo $x;
    echo '<br>Typ danych $x:', gettype($x),'<hr>';

    //rozmiar typu integer

    echo PHP_INT_SIZE; //8

    //kontrola typu zmiennych
    $w;
      //echo $w;
      echo @gettype($w); //NULL

     ?>
  </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                  
