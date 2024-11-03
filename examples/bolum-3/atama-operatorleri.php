<?php 
    /*
        a = b       a = b
        a += b       a = a + b
        a -= b       a = a - b
        a *= b       a = a * b
        a /= b       a = a / b
        a %= b       a = a % b
        a **= b      a = a ** b
        a .= b       a = a . b

    */

    $a;
    $a = 20; // Değişken önce tanımlanıp, sonraki satırlarda içeriğine değer ataması yapılabilir.
    echo $a; // Eğer değişken oluşturulur ve içeriğine herhangi bir değer atanmadan çıktı olarak kullanılırsa hata verir. 
    echo "<br>";

    $a = 20;
    $b = 20;
    $c = $a;
    echo $c."<br>";

    $d = ($a + 10) * 3;
    echo $d."<br>";

    

    
    $a += $b;   //$a = $a + $b;
    $a -= $b;   //$a = $a - $b;
    $a *= $b;   //$a = $a * $b;
    $a /= $b;   //$a = $a / $b;
    $a %= $b;   //$a = $a % $b;
    $a **= $b;   //$a = $a ** $b;
    $a .= $b;   //$a = $a . $b; //nokta birleştirme operatörüdür.
    
    $ad = "Sadık ";
    $soyad = "Turan";
    $ad .= $soyad;
    echo $a, $b, $c, $d, $ad;


?>