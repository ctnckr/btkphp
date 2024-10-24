<?php
    $sayi1 = 5;
    $sayi2 = 3;

    echo "sonuç: ".($sayi1+$sayi2)."<br>";
    echo "sonuç: ".($sayi1-$sayi2)."<br>";
    echo "sonuç: ".($sayi1*$sayi2)."<br>";
    echo "sonuç: ".($sayi1/$sayi2)."<br>";

    $sayi3 = 8;

    echo "sonuç: ".($sayi1 + $sayi2 / $sayi3)."<br>"; //işlem önceliği
    echo "sonuç: ".(($sayi1 + $sayi2) / $sayi3)."<br>";

    echo is_int(5)."<br>";; //true, sonuç 1 yazar
    echo is_int(5.2)."<br>";; //false, sonuç null yazar
    echo "<br>";
    echo var_dump(is_int(5))."<br>";
    echo var_dump(is_int(5.2))."<br>";

    echo var_dump(is_float(5))."<br>";
    echo var_dump(is_float(5.2))."<br>";

    echo var_dump(is_numeric(5))."<br>";
    echo var_dump(is_numeric("5"))."<br>";
    echo var_dump(is_numeric("a5"))."<br>";
    
    echo abs(-10)."<br>"; //sayının mutlak değerini alır.
    echo ceil(4.3)."<br>"; //sayıyı her zaman yukarıya yuvarlar.
    echo floor(4.8)."<br>"; //sayıyı her zaman aşağıya yuvarlar.
    echo round(4.8)."<br>"; //sayıyı her zaman en yakına yuvarlar.
    echo round(4.4)."<br>"; //sayıyı her zaman en yakına yuvarlar.
    echo round(4.5)."<br>"; //sayıyı her zaman en yakına yuvarlar.

    echo sqrt(64)."<br>"; //sayının karekökünü bulur.
    echo pow(5,3)."<br>"; //5'in küpü, üslü çarpımlar.

    echo max(3,5,6,90)."<br>"; // sayı dizisindeki en yüksek sayıyı verir.
    echo min(3,5,6,90)."<br>"; // sayı dizisindeki en düşük sayıyı verir.
    
    //tüm php matematiksel fonksiyonlar: https://www.w3schools.com/php/php_math.asp

?>