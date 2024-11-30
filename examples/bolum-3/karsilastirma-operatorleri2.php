<?php
/*
    ==      Equal (Eşittir)                 $x == $y
    ===     Identical (Tipleri Eşit mi?)        $x  === $y
    !=      Not Equal (Eşit değildir)       $x != $y
    <>      Not Equal (Eşit değildir)       $x <> $y
    !==     Identical (Tip eşit değil mi?)   $x  === $y
    >       Greater than (Büyüktür)         $x  > $y    
    <       Less than (Küçüktür)            $x < $y
    >=      Greater than or equal to (Büyük Eşittir) $x >= $y
    <=      Less than or equal to (Küçük Eşittir)    $x <= $y
    <=>     Spaceship                       $x <=> $y

*/

    $a = 30;
    $b = 40;
    $username = "sadikturan";

    $sonuc = ($a == $b);
    $sonuc = ($a != $b);
    $sonuc = ($username != "sadikturan");
    $sonuc = ($a === $b);
    $sonuc = ($a !== $b);
    $sonuc = ($a > $b);
    $sonuc = ($a >= $b);
    $sonuc = ($a <= $b);
    $sonuc = ($a <=> $b); //sayısal değer döndürür. 1-> soldaki sayı büyüktür. 0-> sayılar eşittir. -1 -> sağdaki sayı büyüktür.

    echo $sonuc; 

    // echo var_dump($sonuc);

?>