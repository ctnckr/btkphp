<?php

    $a = 10;
    $b = 2;
    $c = 5;

    //1- a,b çarpımı ile a,b,c toplamının farkı nedir?

    $fark = ($a * $b) - ($a + $b + $c);
    echo "1: " .  ($fark);
    echo "<br>";

    //2- a,b,c toplamının mod 3'ü nedir?
    $modu = (($a + $b + $c) % 3);
    echo "2: " . $modu;
    echo "<br>";

    //3- b'nin c. kuvveti nedir?
    $kuvvet = ($b ** $c);
    echo "3: " .  ($kuvvet);
    echo "<br>";

    // 4- a için 50-100 arasında kontrolü yapınız.
    $aralık = ($a >= 50 and $a <= 100);
    echo "4: " .  var_dump($aralık);
    echo "<br>";

    //5- a için pozitif çift kontrolü yapınız,
    $kontrol = ($a > 0 and $a % 2==0);
    echo "5: " .  var_dump($kontrol);
    echo "<br>";

    //6- username ve password ile uygulama giriş kantrolü yapınız.
    $username = "sadik";
    $password = "123";
    $giris = ($username == "sadik" and $password == "123");
    echo "giriş durumu: " . $giris;
    echo "<br>";

    //7- a,b,c, için büyüklük kontrolü yapınız.
    $buyuktur = ($a > $b and $a > $c);
    echo "a en büyüktür ". $buyuktur . "<br>";

    $buyuktur = ($b > $a and $b > $c);
    echo "b en büyüktür ". $buyuktur . "<br>";

    $buyuktur = ($c > $a and $c > $b);
    echo "c en büyüktür ". $buyuktur . "<br>";

    //8- 2 vize (%60) ve final(%40) notuna göre ortalama hesaplayınız.
    // a - Eğer ortalama 50 ve üstünde ise geçti, değilse kaldı yazdırınız.
    // b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
    //c Geçmek için finalden 70 alındığında ortalamanın önemi olmasın.

    $vize1 = 10;
    $vize2 = 10;
    $final = 70;

    $ortalama = (($vize1 + $vize2) / 2) * 0.6 + ($final * 0.4);
    echo "Ortalama: " . $ortalama . "<br>";

    //$gecmeDurumu = ($ortalama >= 50);
    //$gecmeDurumu = ($ortalama >= 50 and $final >= 50);
    $gecmeDurumu = ($ortalama >= 50 or $final >= 70);
    echo "Geçme Durumu: " . (int)$gecmeDurumu . "<br>";





?>