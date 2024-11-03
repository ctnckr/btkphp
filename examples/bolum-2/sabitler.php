<?php

    // PHP Sabitler:
    //Veri depolamak için kullanılır fakat sonradan değiştirilemez.
    define ("baglanti", "mysql bağlantı cümlesi"); //baglanti sabitine değer ataması. 
    echo baglanti; //sabitlerde $ kullanılmaz.
    echo "<br>";
    const baglanti2 = "mysql bağlantı cümlesi"; //bir diğer sabit atama şekli.
    echo baglanti2; //sabitlerde $ kullanılmaz.

    //baglanti = "asdaadasda"; //var olan bir sabite yeni değer atanamaz. Hata verir.

    const username = "ceto";
    const password = "123";
    //username = "321"; //hata verir, çünkü sabit içeriği yukarda belirlendi, tekrar değiştirilemez.

?>