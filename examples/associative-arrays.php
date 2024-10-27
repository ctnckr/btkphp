<?php 
    // Associative Arrays (Key-Value):  İlişkisel diziler
    // key-value => 34: istanbul, 53: Rize

    $plakalar = array("41","53","34");
    $sehirler = array("kacaeli","rize","istanbul");

    echo "$plakalar[0] : $sehirler[0]"."<br>";
    echo "$plakalar[1] : $sehirler[1]"."<br>";
    echo "$plakalar[2] : $sehirler[2]"."<br>";

    //key-value mantığıyla dizi
    $plaka_bilgileri = array (
        "41" => "kocaeli",
        "53" => "rize",
        "34" => "istanbul"
    );

    echo $plaka_bilgileri["41"]."<br>";
    echo $plaka_bilgileri["53"]."<br>";
    echo $plaka_bilgileri["34"]."<br>";


    $telefon_rehberi = array (
        "ali" => "5555555",
        "mehmet" => "444444",
        "ayşe" => "33333"
    );

    echo $telefon_rehberi["ali"];
    

?>