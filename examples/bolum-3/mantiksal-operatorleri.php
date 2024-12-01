<?php
    /*
        and => x ve y nin true olmasıyla sonuç true olur.
        or => x ve y den herhangi birinin true olmasıyla sonuç true olur.
        xor => x ve y den herhangi birinin true olmasıyla sonuç olur, diğer her durumda sonuç false olur.
        ! => x in tersini alır.
    */

    // (yas <= 18) => ehliyet alabilir.
    // ayrıca (mezuniyet =="lise") ise ehliyet alabilir.
    $yas = 20;
    $mezuniyet = "Lise";

    $sonuc = ($yas >= 18) and ($mezuniyet == "Lise"); // true & true => true
    // and
    // false & false => false
    // true & false => false
    // true & true => true

    //or
    // true & false => true
    // true & true => true
    // false & false => false
    $sonuc = ($yas >= 18) and ($mezuniyet == "Lise" or $mezuniyet == "Üniversite" or $mezuniyet == "Yüksek Lisans");

    //xor
    // true & false => true
    // true & true => false
    // false & false => false

    // not (!)
    $sonuc = !(true);
    echo var_dump($sonuc);
?>